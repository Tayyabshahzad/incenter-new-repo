<?php

namespace App\Imports;

use App\Models\Property;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;

class ExcelImport implements ToCollection, WithHeadingRow
{
    private $sourcing;

    public function __construct($sourcing)
    {
        $this->sourcing = $sourcing;
    }

    public function collection(Collection $rows)
    {
        $chunkSize = 500;
        $rows->chunk($chunkSize)->each(function ($chunk) {
            foreach ($chunk  as $row) {
               
                $assessment = (float) $row['assessment'];
                $clr = (float) $row['clr_if_any'];
                $assessment_market_value = ($assessment*$clr); 
               
                $estimated_market_value = (float) $row['estimated_market_value']; 
                $total_contracts = ($assessment_market_value - $estimated_market_value) / $assessment_market_value;
          
                // // Combine the data from the XLSX file with the $sourcing data
                // $address = $row['address'];
                // $postcode = null;
                // $streetAddress = null;

                // if (preg_match('/\b(\d{5}(?:-\d{4})?)\b/', $address, $matches)) {
                //     // Postcode found in the address, extract it
                //     $postcode = $matches[1];

                //     // Remove the postcode from the address to get the street address
                //     $streetAddress = str_replace($postcode, '', $address);
                //     $streetAddress = trim($streetAddress);
                // } else {
                //     // Postcode not found in the address, assume the whole address is the street address
                //     $streetAddress = $address;
                // } 
$data = [
'source_id'                                                                              => $this->sourcing->id,
'user_id'                                                                                => Auth::user()->id,
'date'                                                                                   => $row['date'],
'postcode'                                                                                   => $row['postalcode'],
'unique_id'                                                                                      => $row['unique_id'],
'type'                                                                               => $row['type'],
'propertysubtype'                                                                                    => $row['propertysubtype'],
'senior'                                                                         => $row['senior'],
'disabled_veteran'                                                       => $row['disabled_veteran'],
'homestead_exemption'                                                                            => $row['homestead_exemption'],
'referred_by'                                                                                    => $row['referred_by'],
're_review_again'                                                                            => $row['re_review_again'],
'first_name'                                                                         => $row['first_name'],
'last_name'                                                                                      => $row['last_name'],
'owner1fullname'                                                                             => $row['owner1fullname'],
'owner2fullname'                                                                                 => $row['owner2fullname'],
'address'                                                                                => $row['address'],
'streetaddress'                                                                              => $row['streetaddress'],
'city'                                                                               => $row['city'],
'stateorprovince'                                                                                    => $row['stateorprovince'],
'postalcode'                                                                                     => $row['postalcode'],
'parcel_opa'                                                                             => $row['parcel_opa'],
'county'                                                                     => $row['county'],
'state'                                                              => $row['state'],
'municipality'                                                                               => $row['municipality'],
'reassessed_in_2023_yesno'                                                                               => $row['reassessed_in_2023_yesno'],
'deadline_to_appeal'                                                                     => $row['deadline_to_appeal'],
'homestead_exemption_filed'                                                                  => $row['homestead_exemption_filed'],
'assessment'                                                                             =>  $row['assessment'],
'clr_if_any'                                                                         => $row['clr_if_any'],
'assessed_market_value'                                                                                  => $assessment_market_value,
'estimated_market_value'                                                                         => $row['estimated_market_value'],
'current_taxes'                                                                      => $row['current_taxes'],
'confidencescore'                                                                            => $row['confidencescore'],
'sale_date'                                                                          => $row['sale_date'],
'sale_price'                                                                             => $row['sale_price'],
'notes'                                                                      => $row['notes'],
'county_link'                                                                                => $row['county_link'],
'savings_percentage'                                                                 => $row['savings_percentage'],
'savings_amount'                                                                             => $row['savings_amount'],
'appeal_yesno_does_owner_need_to_sign_appeal_form'                                                                       => $row['appeal_yesno_does_owner_need_to_sign_appeal_form'],
'postcard_sent'                                                                      => $row['postcard_sent'],
'entered_into_hubspot'                                               => $row['entered_into_hubspot'],
'its_fee'                                                                        => $row['its_fee'],
'cd_or_appraisal_required'                                                  => $row['cd_or_appraisal_required'],
'appraisal_fee'                                                                              => $row['appraisal_fee'],
'date_contract_sent'                                                                             => $row['date_contract_sent'],
'date_contract_rcvd'                                                                         => $row['date_contract_rcvd'],
'notes_for_appraiser_for_appraisal_channel'                                                                  => $row['notes_for_appraiser_for_appraisal_channel'],
'appraisal_ordered'                                                                          => $row['appraisal_ordered'],
'appraisal_namecontact_infodate_of_appraisal'                                                                            => $row['appraisal_namecontact_infodate_of_appraisal'],
'appeal_filed'                                                                           => $row['appeal_filed'],
'attorney_name'                                                                          => $row['attorney_name'],
'hearing_datetime'                                                                                   => $row['hearing_datetime'],
'appraisalcd_sent_to_board'                                                                                      => $row['appraisalcd_sent_to_board'],
'appraised_value'                                                                                    => $row['appraised_value'],
'savings_based_on_appraisal'                                                                                     => $row['savings_based_on_appraisal'],
'new_assessment'                                                                                     => $row['new_assessment'],
'actual_savings'                                                                                     => $row['actual_savings'],
'savings'                                                                                    => $row['savings'],
'invoiced_amount'                                                                                    => $row['invoiced_amount'],
'invoiced_date'                                                                                      => $row['invoiced_date'],
'paid'                                                                                       => $row['paid'],
'event_manual' => $row['event_manual'],
'client_manual' => $row['client_manual'],
'referral_fee' => $row['referral_fee'],
'total_contracts' =>  $total_contracts,
                ];

                // Create a new model instance and save the data to the database
                Property::create($data);
            }
        });
    }
}
