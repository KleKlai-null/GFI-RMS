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
            $table->string('bp_type_customer')->nullable();
            $table->string('bp_type_supplier')->nullable();
            $table->string('document_purpose_new_registration')->nullable();
            $table->string('document_purpose_information_update')->nullable();
            $table->string('status_update_active')->nullable();
            $table->string('status_update_inactive')->nullable();
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->string('document_series_no')->nullable();
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
            $table->string('type_of_business_corporation')->nullable();
            $table->string('type_of_business_partnership')->nullable();
            $table->string('type_of_business_government')->nullable();
            $table->string('type_of_business_single_proprietorship')->nullable();
            $table->string('type_of_business_individual_private')->nullable();
            $table->string('type_of_business_others')->nullable();
            $table->string('currency_php')->nullable();
            $table->string('currency_usd')->nullable();
            $table->string('currency_euro')->nullable();
            $table->string('currency_yen')->nullable();
            $table->string('currency_gbp')->nullable();
            $table->string('currency_others')->nullable();
            $table->string('business_partner_group_trade')->nullable();
            $table->string('business_partner_group_non_trade')->nullable();
            $table->string('business_partner_group_related_party')->nullable();
            $table->string('business_partner_group_employee')->nullable();
            $table->string('business_partner_group_others')->nullable();
            $table->string('payment_terms_cash_on_delivery')->nullable();
            $table->string('payment_terms_cash_with_orders')->nullable();
            $table->string('payment_terms_days_month_end')->nullable();
            $table->string('payment_terms_days_after_delivery')->nullable();
            $table->string('payment_terms_others')->nullable();
            $table->string('payment_methods_cash')->nullable();
            $table->string('payment_methods_check')->nullable();
            $table->string('payment_methods_electronic_bank_transfer')->nullable();
            $table->string('payment_methods_others')->nullable();
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
            $table->string('tax_group_capital_goods')->nullable();
            $table->string('tax_group_non_capital_goods')->nullable();
            $table->string('tax_group_services')->nullable();
            $table->string('tax_group_importations')->nullable();
            $table->string('tax_group_non_taxable')->nullable();
            $table->string('tax_group_zero_rated')->nullable();
            $table->string('tax_group_exempt')->nullable();
            $table->string('tax_group_others')->nullable();
            $table->string('remarks_signatory')->nullable();
            $table->string('full_name')->nullable();
            $table->string('position')->nullable();
            $table->string('date')->nullable();
            $table->string('signature')->nullable();
            $table->integer('revision')->nullable();
            $table->string('modified')->nullable();
            $table->string('updated_by')->nullable();
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
