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
            $table->text('date')->nullable();
            $table->text('reviewed_by')->nullable();
            $table->text('senior')->nullable();
            $table->text('disabled_veteran')->nullable();
            $table->text('we_are_filing_homestead_exemption')->nullable();
            $table->text('referred_by')->nullable();
            $table->text('event')->nullable();
            $table->text('referral_fee')->nullable();
            $table->text('review_again_on')->nullable();
            $table->text('type')->nullable();
            $table->text('first_name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('address')->nullable();
            $table->text('parcel_opa')->nullable();
            $table->text('county')->nullable();
            $table->text('state')->nullable();
            $table->text('municipality')->nullable();
            $table->text('deadline_to_appeal')->nullable();
            $table->text('homestead_exemption_filed')->nullable();
            $table->text('assessment')->nullable();
            $table->text('clr_if_any')->nullable();
            $table->text('assessed_market_value')->nullable();
            $table->text('estimated_market_value')->nullable();
            $table->text('current_taxes')->nullable();
            $table->text('confidence_score')->nullable();
            $table->text('notes')->nullable();
            $table->text('purchase_price')->nullable();
            $table->text('savings_percentage')->nullable();
            $table->text('savings_amount')->nullable();
            $table->text('appeal_yes_no')->nullable();
            $table->text('postcard_sent')->nullable();
            $table->text('entered_into_hubspot')->nullable();
            $table->text('its_fee')->nullable();
            $table->text('cd_or_appraisal_required')->nullable();
            $table->text('appraisal_fee')->nullable();
            $table->text('date_contract_sent')->nullable();
            $table->text('date_contract_rcvd')->nullable();
            $table->text('notes_for_appraiser_for_appraisal_channel')->nullable();
            $table->text('appraisal_ordered')->nullable();
            $table->text('appraisal_namecontact_infodate_of_appraisal')->nullable();
            $table->text('appeal_filed')->nullable();
            $table->text('attorney_name')->nullable();
            $table->text('hearing_datetime')->nullable();
            $table->text('appraisalcd_sent_to_board')->nullable();
            $table->text('appraised_value')->nullable();
            $table->text('new_assessment')->nullable();
            $table->text('actual_savings')->nullable();
            $table->text('invoiced_amount')->nullable();
            $table->text('invoiced')->nullable();
            $table->text('paid')->nullable(); 
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
