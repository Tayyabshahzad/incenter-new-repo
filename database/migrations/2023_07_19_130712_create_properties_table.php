<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('source_id');
            $table->foreign('source_id')->references('id')->on('sources')->onDelete('cascade');
            
            $table->text('date') ->nullable();             
             $table->text('postcode') ->nullable();                                       
             $table->text('unique_id') ->nullable();                                      
             $table->text('type') ->nullable();                                           
             $table->text('propertysubtype') ->nullable();                                
             $table->text('senior') ->nullable();                                         
             $table->text('disabled_veteran') ->nullable();                               
             $table->text('homestead_exemption') ->nullable();                            
             $table->text('referred_by') ->nullable();                                    
             $table->text('re_review_again') ->nullable();                                
             $table->text('first_name') ->nullable();                                     
             $table->text('last_name') ->nullable();                                      
             $table->text('owner1fullname') ->nullable();                                 
             $table->text('owner2fullname') ->nullable();                                 
             $table->text('address') ->nullable();                                        
             $table->text('streetaddress') ->nullable();                                  
             $table->text('city') ->nullable();                                           
             $table->text('stateorprovince') ->nullable();                                
             $table->text('postalcode') ->nullable();                                     
             $table->text('parcel_opa') ->nullable();                                     
             $table->text('county') ->nullable();                                         
             $table->text('state') ->nullable();                                          
             $table->text('municipality') ->nullable();                                   
             $table->text('reassessed_in_2023_yesno') ->nullable();                       
             $table->text('deadline_to_appeal') ->nullable();                             
             $table->text('homestead_exemption_filed') ->nullable();                      
             $table->text('assessment') ->nullable();                                     
             $table->text('clr_if_any') ->nullable();                                     
             $table->text('assessed_market_value') ->nullable();
             $table->text('estimated_market_value') ->nullable();                                       
             $table->text('estimated_market_value_api') ->nullable();                         
             $table->text('current_taxes') ->nullable();                                  
             $table->text('confidencescore') ->nullable();                                
             $table->text('sale_date') ->nullable();                                      
             $table->text('sale_price') ->nullable();                                     
             $table->text('notes') ->nullable();                                          
             $table->text('county_link') ->nullable();                                    
             $table->text('savings_percentage') ->nullable();                             
             $table->text('savings_amount') ->nullable();                                 
             $table->text('appeal_yesno_does_owner_need_to_sign_appeal_form')->nullable();
             $table->text('postcard_sent') ->nullable();                                  
             $table->text('entered_into_hubspot') ->nullable();                           
             $table->text('its_fee') ->nullable();                                        
             $table->text('cd_or_appraisal_required') ->nullable();                       
             $table->text('appraisal_fee') ->nullable();                                  
             $table->text('date_contract_sent') ->nullable();                             
             $table->text('date_contract_rcvd') ->nullable();                             
             $table->text('notes_for_appraiser_for_appraisal_channel') ->nullable();      
             $table->text('appraisal_ordered') ->nullable();                              
             $table->text('appraisal_namecontact_infodate_of_appraisal') ->nullable();    
             $table->text('appeal_filed') ->nullable();                                   
             $table->text('attorney_name') ->nullable();                                  
             $table->text('hearing_datetime') ->nullable();                               
             $table->text('appraisalcd_sent_to_board') ->nullable();                      
             $table->text('appraised_value') ->nullable();                                
             $table->text('savings_based_on_appraisal') ->nullable();                     
             $table->text('new_assessment') ->nullable();                                 
             $table->text('actual_savings') ->nullable();                                 
             $table->text('savings') ->nullable();                                        
             $table->text('invoiced_amount') ->nullable();                                
             $table->text('invoiced_date') ->nullable();

             $table->text('event_manual') ->nullable();
             $table->text('client_manual') ->nullable();
             $table->text('referral_fee') ->nullable();
             $table->text('total_contracts') ->nullable();
             
             $table->boolean('is_verified')->default(false);                                  
             $table->text('paid') ->nullable();       



 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
