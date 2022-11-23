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
        Schema::create('business_partners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('user_name');
            $table->enum('status', ['Open', 'Closed', 'Archived','Pending'])->default('Open')->nullable();
            $table->string('remarks')->nullable();
            $table->string('bp_type')->nullable();
            $table->string('document_purpose')->nullable();
            $table->string('status_update')->nullable();
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->string('document_no')->nullable();
            $table->string('date_processed')->nullable();
            $table->string('registered_name')->nullable();
            $table->string('trade_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('tax_id_no')->nullable();
            $table->string('telephone_no')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('website')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('type_of_business')->nullable();
            $table->string('currency')->nullable();
            $table->string('business_partner_group')->nullable();
            $table->string('payment_terms')->nullable();
            $table->string('payment_methods')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_no')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('accouts_receivable_payable')->nullable();
            $table->string('down_payment_clearing_account')->nullable();
            $table->string('donw_payment_interim_account')->nullable();
            $table->string('withholding_tax')->nullable();
            $table->string('wtax_codes_allowed')->nullable();
            $table->string('tax_group')->nullable();
            $table->string('remarks_signatory')->nullable();
            $table->string('full_name')->nullable();
            $table->string('position')->nullable();
            $table->string('date')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('business_partners');
    }
};
