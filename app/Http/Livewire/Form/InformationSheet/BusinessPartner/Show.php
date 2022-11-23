<?php

namespace App\Http\Livewire\Form\InformationSheet\BusinessPartner;

use Livewire\Component;

class Show extends Component
{
    public $inputs = [];
    public $inputsContact = [];
    public $i = 1;
    public $contact = 1;

    public $bp_type, $document_purpose, $status_update, $date_from, $date_to, $document_no, $date_processed, $registered_name, $trade_name,
    $billing_address, $shipping_address, $tax_id_no, $telephone_no, $fax_no, $mobile_no, $email_address, $website, $registration_date, $type_of_business,
    $currency, $business_partner_group, $payment_terms, $payment_methods, $bank_name, $bank_address, $account_name, $account_no, $swift_code, $accouts_receivable_payable,
    $down_payment_clearing_account, $donw_payment_interim_account, $withholding_tax, $wtax_codes_allowed, $tax_group, $remarks_signatory, $full_name,
    $position, $date, $signature;

    // dynamic certification
    public $certification_name, $organization_certifying_body, $certificate_date, $expiry_date;
    //dynamic contacts
    public $name, $positionC, $email_address_contacts, $phone_no;
    //approval routing form
    public $operations_SOPN, $operations_date, $operations_status;
    public $supply_chain_human_resource_SOPN, $supply_chain_human_resource_date, $supply_chain_human_resource_status;
    public $finance_SOPN, $finance_date, $finance_status;
    public $corporate_finance_SOPN, $corporate_finance_date, $corporate_finance_status;
    public $audit_SOPN, $audit_date, $audit_status;
    public $system_administrator_SOPN, $system_administrator_date, $system_administrator_status;
    //document_no_page_2
    public $document_no_page_2;
    public $DN_1_individual, $DN_1_corporation, $DN_1_cooperative, $DN_1_submitted, $DN_1_RNS;
    public $DN_2_individual, $DN_2_corporation, $DN_2_cooperative, $DN_2_submitted, $DN_2_RNS;
    public $DN_3_individual, $DN_3_corporation, $DN_3_cooperative, $DN_3_submitted, $DN_3_RNS;
    public $DN_4_individual, $DN_4_corporation, $DN_4_cooperative, $DN_4_submitted, $DN_4_RNS;
    public $DN_5_individual, $DN_5_corporation, $DN_5_cooperative, $DN_5_submitted, $DN_5_RNS;
    public $DN_6_individual, $DN_6_corporation, $DN_6_cooperative, $DN_6_submitted, $DN_6_RNS;
    public $DN_7_individual, $DN_7_corporation, $DN_7_cooperative, $DN_7_submitted, $DN_7_RNS;
    public $DN_8_individual, $DN_8_corporation, $DN_8_cooperative, $DN_8_submitted, $DN_8_RNS;
    public $DN_9_individual, $DN_9_corporation, $DN_9_cooperative, $DN_9_submitted, $DN_9_RNS;
    public $DN_10_individual, $DN_10_corporation, $DN_10_cooperative, $DN_10_submitted, $DN_10_RNS;
    public $DN_11_individual, $DN_11_corporation, $DN_11_cooperative, $DN_11_submitted, $DN_11_RNS;
    public function render()
    {
        return view('livewire.form.information-sheet.business-partner.show', [
            'title' => 'Business Partner Sheet'
        ])->layout('layouts.tabler.app');
    }
}
