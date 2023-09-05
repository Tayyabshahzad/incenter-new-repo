<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Models\Accreditation;
use App\Models\County;
use App\Models\Source;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Imports\ExcelImport;
use App\Jobs\VerifyPropertyJob;
use App\Models\Property;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use Session;
use App\Models\State;
use App\Jobs\ProcessExcelDataJob;
class FrontendController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }

    public function manageusers(Request $request)
    {
        $users = User::get();
        if ($request->ajax()) {
            return datatables()->of($users)
            ->addColumn('action',function($user){
                return "<a href='".route('delete_user.manage',$user->id)."'> Delete  </a> | <a href='".route('edit_user.manage',$user->id)."'>   Edit   </a>";
            })
            ->rawColumns(['action'])
            ->toJson();
        }
        return view('manageusers',compact('users'));
    }

    public function delete_user(Request $request ,$id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }


    public function edit_user(Request $request ,$id)
    {

        $user = User::find($id);
        // $user->name  = $request->name;
        // $user->email  = $request->email;
        // $user->password  = Hash::make($request->password);
        // $user->save();
        return view('edit_manage_user',compact('user'));
    }


    public function update_user(Request $request)
    {

        $user = User::find($request->id);
        $user->name  = $request->name;
        if($request->password != ''){
            $user->password  = Hash::make($request->password);
        }
        $user->save();
        return redirect()->back();
    }


    public function manage_properties(Request $request)
    {

        $properties = Property::select('id','owner1fullname','address','state','county','clr_if_any','assessment','assessed_market_value','estimated_market_value_api','is_verified')->with('source')->get();
        if ($request->ajax()) {
            return datatables()->of($properties)
            ->addColumn('view_details',function($property){

                return "<button class='btn btn-info btn-sm fetch_property'   data-bs-toggle='modal'    data-bs-target='#kt_modal_property_details' data-id='".$property->id."'> View </button>";
            })
            ->addColumn('source',function($property_source){
                return $property_source->source;
            })
            ->addColumn('status',function($property_source){
                if( $property_source->is_verified == true){
                    $status = 'Verified';
                }else{
                    $status = 'Not-Verified';
                }
                return $status;
            })

            ->rawColumns(['view_details','source','status'])
            ->toJson();
        }
        $properties_verified =   Property::where('is_verified',true)->count();
        $properties_unverified = Property::where('is_verified',false)->count();
        return view('manage_properties',compact('properties','properties_verified','properties_unverified'));
    }

    public function import_properties(Request $request)
    {
        $properties = Property::orderby('id','desc')->limit(5)->with('source','user')->get();
        if ($request->ajax()) {
            return datatables()->of($properties)
            ->addColumn('create_date',function($property){
                return $property->date;
            })
            ->rawColumns(['create_date'])
            ->toJson();
        }




        $total_properties = Property::count();

        $boaSource = Source::where('src', 'boa')->first();
        $citySource = Source::where('src', 'citi_bank')->first();

        if ($boaSource) {
            $boa_properties = $boaSource->properties()->count();
        } else {
            $boa_properties = 0; // or handle the case when 'boa' source does not exist
        }


        if ($citySource) {
            $citi_bank_properties = $citySource->properties()->count();
        } else {
            $citi_bank_properties = 0; // or handle the case when 'city' source does not exist
        }





        return view('import_properties',compact('total_properties','boa_properties','citi_bank_properties'));
    }


    public function review_properties(Request $request)
    {


        $properties = Property::select('id','owner1fullname','address','state','county','clr_if_any','assessment','assessed_market_value','estimated_market_value_api','is_verified')->with('source')->where('estimated_market_value_api',0)->get();

        if ($request->ajax()) {
            return datatables()->of($properties)
            ->addColumn('view_details',function($property){

                return "<button class='btn btn-info btn-sm fetch_property'   data-bs-toggle='modal'    data-bs-target='#kt_modal_property_details' data-id='".$property->id."'> View </button>";
            })
            ->addColumn('source',function($property_source){
                return $property_source->source;
            })
            ->addColumn('status',function($property_source){
                if( $property_source->is_verified == true){
                    $status = 'Verified';
                }else{
                    $status = 'Not-Verified';
                }
                return $status;
            })

            ->rawColumns(['view_details','source','status'])
            ->toJson();
        }


        return view('review_property');
    }

    public function counties(Request $request)
    {

        $states = State::get();
        $counties = County::with('CountyState')->get();

        if ($request->ajax()) {

            return datatables()->of($counties)
                ->addColumn('action',function($countie){
                    return "<a href='".route('counties.edit',$countie->id)."'> Edit  </a> | <a href='".route('counties.delete',$countie->id)."'> Delete  </a>";
                })
                ->addColumn('county_state',function($countie){
                    return  $countie->CountyState->state;
                })
            ->rawColumns(['action','county_state'])
            ->toJson();
        }
        return view('counties',compact('counties','states'));
    }

    public function properties()
    {
        return view('properties');
    }



    public function add_counties(Request $request)
    {


        $county = new County();
        $county->state_id  = $request->state;
        $county->county  = $request->county;
        $county->appeal_deadline  =  $request->appeal_deadline;
        $county->re_review_date  =  $request->re_review_date;
        $county->clr  =  $request->clr;
        $county->save();
        return redirect()->back();
    }

    public function counties_edit(Request $request,$id)
    {
        $states = State::get();
        $county = County::with('CountyState')->findOrFail($id);
        return view('edit_county',compact('county','states'));

    }


    public function counties_update(Request $request)
    {
        $county = County::findOrFail($request->id);
        $county->state_id  = $request->state;
        $county->county  = $request->county;
        $county->appeal_deadline  =  $request->appeal_deadline;
        $county->re_review_date  =  $request->re_review_date;
        $county->clr  =  $request->clr;
        $county->save();
        return redirect()->route('counties');
    }

    public function counties_delete(Request $request,$id)
    {
        $county = County::findOrFail($id);
        $county->delete();
        return redirect()->back();
    }




    public function addUser(Request $request)
    {

        $user = new User();
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->password  = Hash::make($request->password);
        $user->save();
        return redirect()->back();
    }







    function import_properties_excel(Request $request){

       try{
            DB::beginTransaction();
            $file = $request->file('file');
            $source = $request->input('source');
            $customName = 'datasheet_' . time() . '.' . $file->getClientOriginalExtension();
            $request->validate([
                'file' => 'required|mimes:csv,xlsx',
                'source' => 'required',
            ]);
            $sourcing = new Source;
            $sourcing->src = $source;
            $sourcing->file = $customName;
            $path = $file->storeAs('data-sheets', $customName);
            $sourcing->save();
            DB::commit();
       }catch(Exception $file_error){
            return response([
                'status'=>false,
                'message'=>"Error While Uploading File"
            ]);
       }

       try {
        $import = new ExcelImport($sourcing);
        Excel::import($import, $path);
        return response([
            'status'=>true,
            'message'=>"Data Added"
        ]);
        } catch (Exception $content_error) {

            return response([
                'status'=>false,
                'message'=>"Error While Uploading File"
            ]);
        }

    }

    public function propmix(Request $request)
    {

        $chunkSize = 100;
        $properties = Property::where('is_verified',false)->select('id','streetaddress','postalcode','is_verified')->get();

        $properties->chunk($chunkSize)->each(function ($chunk) {

            foreach ($chunk as $property) {


                VerifyPropertyJob::dispatch($property);
            }
        });
        return response([
            'status'=>true,
            'message'=>'Data Processed'
        ]);
    }


    public function fetch_property(Request $request)
    {

        $properties = Property::where('id',$request->id)->first();
        return response([
            'status'=>true,
            'property'=> $properties
        ]);
    }

    public function callPythonScript()
{
    $pythonScriptPath = base_path('python-scripts/api_request.py');

    // Execute the Python script
    exec("python3 $pythonScriptPath", $output, $returnCode);

    if ($returnCode === 0) {
        // Successfully executed the Python script
        // Process $output as needed
        return response()->json($output);
    } else {
        // Handle errors
        return response()->json(['error' => 'Python script execution failed'], 500);
    }
}


}
