<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Property;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class VerifyPropertyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $property;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Property $property)
    {
        $this->property = $property;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try {
            DB::beginTransaction(); 
            $url = "https://staging-api.propmix.io/pubrec/assessor/v1/GetPropertyDetails?streetaddress=".$this->property->streetaddress."&postalcode=".$this->property->postalcode;
            $response = Http::withHeaders([
                'Access-Token' => 'd181dae79124a5bcd015c20c9474bed35fa0f68a46f26c24ab62004bb5a7a2b5',
                'Content-Type' => 'application/json'
            ])->get($url); 
            $result = json_decode((string) $response->getBody(), true); 
            if ($response->successful()) {  
                // Assuming there is a field 'is_verified' in your Property model
                $this->property->is_verified = true;
                $this->property->estimated_market_value_api = $result['Data']['Listing']['AssessedValue'];
                $this->property->save();  
                DB::commit();
            }
        } catch (Exception $error) { 
            DB::rollBack();
        }

    }
}
