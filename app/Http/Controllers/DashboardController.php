<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Property;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
      $properties = Property::count();
      $properties = (int)$properties;

      $total_contracts = Property::sum('total_contracts');
      $total_savings = Property::sum('savings_amount');
      
    
      if($request->ajax()) {
        $properties = Property::orderby('id','desc')->limit(5)->with('source','user')->get();
        return datatables()->of($properties)->toJson();
      } 
       return view('dashboard',compact('properties','total_contracts','total_savings'));
    }
}
