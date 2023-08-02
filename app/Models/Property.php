<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'source_id',  
        'user_id',
        'is_verified',
        'date' ,                                           
        'postcode' ,                                       
        'unique_id' ,                                      
        'type' ,                                           
        'propertysubtype' ,                                
        'senior' ,                                         
        'disabled_veteran' ,                               
        'homestead_exemption' ,                            
        'referred_by' ,                                    
        're_review_again' ,                                
        'first_name' ,                                     
        'last_name' ,                                      
        'owner1fullname' ,                                 
        'owner2fullname' ,                                 
        'address' ,                                        
        'streetaddress' ,                                  
        'city' ,                                           
        'stateorprovince' ,                                
        'postalcode' ,                                     
        'parcel_opa' ,                                     
        'county' ,                                         
        'state' ,                                          
        'municipality' ,                                   
        'reassessed_in_2023_yesno' ,                       
        'deadline_to_appeal' ,                             
        'homestead_exemption_filed' ,                      
        'assessment' ,                                     
        'clr_if_any' ,                                     
        'assessed_market_value' ,                          
        'estimated_market_value' ,
        'estimated_market_value_api',                         
        'current_taxes' ,                                  
        'confidencescore' ,                                
        'sale_date' ,                                      
        'sale_price' ,                                     
        'notes' ,                                          
        'county_link' ,                                    
        'savings_percentage' ,                             
        'savings_amount' ,                                 
        'appeal_yesno_does_owner_need_to_sign_appeal_form',
        'postcard_sent' ,                                  
        'entered_into_hubspot' ,                           
        'its_fee' ,                                        
        'cd_or_appraisal_required' ,                       
        'appraisal_fee' ,                                  
        'date_contract_sent' ,                             
        'date_contract_rcvd' ,                             
        'notes_for_appraiser_for_appraisal_channel' ,      
        'appraisal_ordered' ,                              
        'appraisal_namecontact_infodate_of_appraisal' ,    
        'appeal_filed' ,                                   
        'attorney_name' ,                                  
        'hearing_datetime' ,                               
        'appraisalcd_sent_to_board' ,                      
        'appraised_value' ,                                
        'savings_based_on_appraisal' ,                     
        'new_assessment' ,                                 
        'actual_savings' ,                                 
        'savings' ,                                        
        'invoiced_amount' ,                                
        'invoiced_date' ,                                  
        'paid' , 
        'event_manual',
        'client_manual',
        'referral_fee',
        'total_contracts',                               
       
    ]; 

    public function source(){
        return $this->belongsTo(Source::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
