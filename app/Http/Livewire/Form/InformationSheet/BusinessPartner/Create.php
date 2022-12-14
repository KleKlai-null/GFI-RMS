<?php

namespace App\Http\Livewire\Form\InformationSheet\BusinessPartner;

use Livewire\Component;
use App\Events\PDF\bpinformationsheet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Throwable;
use Event;
use App\Models\InformationSheet\BP\BusinessPartner;
use App\Services\DocumentService;
use Carbon\Carbon;

class Create extends Component
{
    public $inputs = [];
    public $inputsContact = [];
    public $i = 1;
    public $contact = 1;

    public $bp_type_customer, $bp_type_supplier , $document_purpose_new_registration, $document_purpose_information_update, $status_update_active, $status_update_inactive, $date_from, $date_to, $document_series_no, $date_processed, $registered_name, $trade_name,
    $billing_address, $shipping_address, $tax_id_no, $telephone_no, $fax_no, $mobile_no, $email_address, $website, $registration_date, $type_of_business_corporation, $type_of_business_partnership, $type_of_business_government,$type_of_business_single_proprietorship,$type_of_business_individual_private,$type_of_business_others ,
    $currency_php, $currency_usd, $currency_euro, $currency_yen, $currency_gbp, $currency_others, $business_partner_group_trade, $business_partner_group_non_trade, $business_partner_group_related_party, $business_partner_group_employee, $business_partner_group_others, $payment_terms_cash_on_delivery, $payment_terms_cash_with_orders, $payment_terms_days_month_end, $payment_terms_days_after_delivery, $payment_terms_others, $payment_methods_cash, $payment_methods_check, $payment_methods_electronic_bank_transfer, $payment_methods_others, $bank_name, $bank_address, $account_name, $account_no, $swift_code, $accouts_receivable_payable,
    $down_payment_clearing_account, $donw_payment_interim_account, $withholding_tax, $wtax_codes_allowed, $tax_group_capital_goods, $tax_group_non_capital_goods, $tax_group_services, $tax_group_importations, $tax_group_non_taxable, $tax_group_zero_rated, $tax_group_exempt, $tax_group_others, $remarks_signatory, $full_name,
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
    //document_series_no_page_2
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

    public $BP_model = 'App\Models\InformationSheet\BP\BusinessPartner';
    public $AR_model = 'App\Models\InformationSheet\BP\ApprovalRouting';
    public $Certification = 'App\Models\InformationSheet\BP\Certification';
    public $CP = 'App\Models\InformationSheet\BP\ContactPerson';
    public $DT_model = 'App\Models\InformationSheet\BP\DocumentTable';

    public function render()
    {
        return view('livewire.form.information-sheet.business-partner.create', [
            'title' => 'Business Partner Sheet'
        ])->layout('layouts.tabler.app');
    }

    public function mount()
    {
        array_push($this->inputs, 1);
        array_push($this->inputsContact, 1);
        $date = Carbon::now();
        $formatedDate = $date->format('Y-m-d');
        $this->document_series_no = DocumentService::GenerateSeriesNoForIS('GFI', 'BP');
        $this->document_no_page_2 = DocumentService::GenerateSeriesNoForIS('GFI', 'BP');
        $this->date_processed = $formatedDate;

    }

    public function addCertification($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    public function removeCertification($i)
    {
        unset($this->inputs[$i]);
        unset($this->inputs[$i],$this->certification_name[$i+1],$this->organization_certifying_body[$i+1],$this->certificate_date[$i+1],$this->expiry_date[$i+1]);
    }

    public function addContact($i)
    {
        $i = $i + 1;
        $this->contact = $i;
        array_push($this->inputsContact, $i);
    }

    public function removeContact($i)
    {
        unset($this->inputsContact[$i]);
        unset($this->inputsContact[$i],$this->name[$i+1],$this->positionC[$i+1],$this->email_address_contacts[$i+1],$this->phone_no[$i+1]);
    }

    public function rules(){
        return[
            'bp_type_customer'                                  => 'nullable',
            'bp_type_supplier'                                  => 'nullable',
            'document_purpose_new_registration'                 => 'nullable',
            'document_purpose_information_update'               => 'nullable',
            'status_update_active'                              => 'nullable',
            'status_update_inactive'                            => 'nullable',
            'date_from'                                         => 'nullable|date',
            'date_to'                                           => 'nullable|date',
            'document_series_no'                                => 'nullable',
            'date_processed'                                    => 'nullable|date',
            'registered_name'                                   => 'nullable',
            'trade_name'                                        => 'nullable',
            'billing_address'                                   => 'nullable',
            'shipping_address'                                  => 'nullable',
            'tax_id_no'                                         => 'nullable',
            'telephone_no'                                      => 'nullable',
            'fax_no'                                            => 'nullable',
            'mobile_no'                                         => 'nullable',
            'email_address'                                     => 'nullable',
            'website'                                           => 'nullable',
            'registration_date'                                 => 'nullable|date',
            'type_of_business_corporation'                      => 'nullable',
            'type_of_business_partnership'                      => 'nullable',
            'type_of_business_government'                       => 'nullable',
            'type_of_business_single_proprietorship'            => 'nullable',
            'type_of_business_individual_private'               => 'nullable',
            'type_of_business_others'                           => 'nullable',
            'currency_php'                                      => 'nullable',
            'currency_usd'                                      => 'nullable',
            'currency_euro'                                     => 'nullable',
            'currency_yen'                                      => 'nullable',
            'currency_gbp'                                      => 'nullable',
            'currency_others'                                   => 'nullable',
            'business_partner_group_trade'                      => 'nullable',
            'business_partner_group_non_trade'                  => 'nullable',
            'business_partner_group_related_party'              => 'nullable',
            'business_partner_group_employee'                   => 'nullable',
            'business_partner_group_others'                     => 'nullable',
            'payment_terms_cash_on_delivery'                    => 'nullable',
            'payment_terms_cash_with_orders'                    => 'nullable',
            'payment_terms_days_month_end'                      => 'nullable',
            'payment_terms_days_after_delivery'                 => 'nullable',
            'payment_terms_others'                              => 'nullable',
            'payment_methods_cash'                              => 'nullable',
            'payment_methods_check'                             => 'nullable',
            'payment_methods_electronic_bank_transfer'          => 'nullable',
            'payment_methods_others'                            => 'nullable',
            'bank_name'                                         => 'nullable',
            'bank_address'                                      => 'nullable',
            'account_name'                                      => 'nullable',
            'account_no'                                        => 'nullable',
            'swift_code'                                        => 'nullable',
            'accouts_receivable_payable'                        => 'nullable',
            'down_payment_clearing_account'                     => 'nullable',
            'donw_payment_interim_account'                      => 'nullable',
            'withholding_tax'                                   => 'nullable',
            'wtax_codes_allowed'                                => 'nullable',
            'tax_group_capital_goods'                           => 'nullable',
            'tax_group_non_capital_goods'                       => 'nullable',
            'tax_group_services'                                => 'nullable',
            'tax_group_importations'                            => 'nullable',
            'tax_group_non_taxable'                             => 'nullable',
            'tax_group_zero_rated'                              => 'nullable',
            'tax_group_exempt'                                  => 'nullable',
            'tax_group_others'                                  => 'nullable',
            'remarks_signatory'                                 => 'nullable',
            'full_name'                                         => 'nullable',
            'position'                                          => 'nullable',
            'date'                                              => 'nullable|date',
            'signature'                                         => 'nullable',
    
            'certification_name.*'                              => 'required',
            'organization_certifying_body.*'                    => 'required',
            'certificate_date.*'                                => 'required|date',
            'expiry_date.*'                                     => 'required|date',
    
            'name.*'                                            => 'required',
            'positionC.*'                                       => 'required',
            'email_address_contacts.*'                          => 'required',
            'phone_no.*'                                        => 'required',

            'operations_SOPN'                                   => 'nullable',
            'operations_date'                                   => 'nullable|date',
            'operations_status'                                 => 'nullable',
            'supply_chain_human_resource_SOPN'                  => 'nullable',
            'supply_chain_human_resource_date'                  => 'nullable|date',
            'supply_chain_human_resource_status'                => 'nullable',
            'finance_SOPN'                                      => 'nullable',
            'finance_date'                                      => 'nullable|date',
            'finance_status'                                    => 'nullable',
            'corporate_finance_SOPN'                            => 'nullable',
            'corporate_finance_date'                            => 'nullable|date',
            'corporate_finance_status'                          => 'nullable',
            'audit_SOPN'                                        => 'nullable',
            'audit_date'                                        => 'nullable|date',
            'audit_status'                                      => 'nullable',
            'system_administrator_SOPN'                         => 'nullable',
            'system_administrator_date'                         => 'nullable|date',
            'system_administrator_status'                       => 'nullable',
            'document_no_page_2'                                => 'nullable',
            'DN_1_individual'                                   => 'nullable',
            'DN_1_corporation'                                  => 'nullable',
            'DN_1_cooperative'                                  => 'nullable',
            'DN_1_submitted'                                    => 'nullable',
            'DN_1_RNS'                                          => 'nullable',
            'DN_2_individual'                                   => 'nullable',
            'DN_2_corporation'                                  => 'nullable',
            'DN_2_cooperative'                                  => 'nullable',
            'DN_2_submitted'                                    => 'nullable',
            'DN_2_RNS'                                          => 'nullable',
            'DN_3_individual'                                   => 'nullable',
            'DN_3_corporation'                                  => 'nullable',
            'DN_3_cooperative'                                  => 'nullable',
            'DN_3_submitted'                                    => 'nullable',
            'DN_3_RNS'                                          => 'nullable',
            'DN_4_individual'                                   => 'nullable',
            'DN_4_corporation'                                  => 'nullable',
            'DN_4_cooperative'                                  => 'nullable',
            'DN_4_submitted'                                    => 'nullable',
            'DN_4_RNS'                                          => 'nullable',
            'DN_5_individual'                                   => 'nullable',
            'DN_5_corporation'                                  => 'nullable',
            'DN_5_cooperative'                                  => 'nullable',
            'DN_5_submitted'                                    => 'nullable',
            'DN_5_RNS'                                          => 'nullable',
            'DN_6_individual'                                   => 'nullable',
            'DN_6_corporation'                                  => 'nullable',
            'DN_6_cooperative'                                  => 'nullable',
            'DN_6_submitted'                                    => 'nullable',
            'DN_6_RNS'                                          => 'nullable',
            'DN_7_individual'                                   => 'nullable',
            'DN_7_corporation'                                  => 'nullable',
            'DN_7_cooperative'                                  => 'nullable',
            'DN_7_submitted'                                    => 'nullable',
            'DN_7_RNS'                                          => 'nullable',
            'DN_8_individual'                                   => 'nullable',
            'DN_8_corporation'                                  => 'nullable',
            'DN_8_cooperative'                                  => 'nullable',
            'DN_8_submitted'                                    => 'nullable',
            'DN_8_RNS'                                          => 'nullable',
            'DN_9_individual'                                   => 'nullable',
            'DN_9_corporation'                                  => 'nullable',
            'DN_9_cooperative'                                  => 'nullable',
            'DN_9_submitted'                                    => 'nullable',
            'DN_9_RNS'                                          => 'nullable',
            'DN_10_individual'                                  => 'nullable',
            'DN_10_corporation'                                 => 'nullable',
            'DN_10_cooperative'                                 => 'nullable',
            'DN_10_submitted'                                   => 'nullable',
            'DN_10_RNS'                                         => 'nullable',
            'DN_11_individual'                                  => 'nullable',
            'DN_11_corporation'                                 => 'nullable',
            'DN_11_cooperative'                                 => 'nullable',
            'DN_11_submitted'                                   => 'nullable',
            'DN_11_RNS'                                         => 'nullable',
        ];
    }

    public function create(){
        $this->validate();
        try{
            DB::beginTransaction();

            $data = $this->BP_model::create([
                'bp_type_customer'                              => $this->bp_type_customer,
                'bp_type_supplier'                              => $this->bp_type_supplier,
                'document_purpose_new_registration'             => $this->document_purpose_new_registration,
                'document_purpose_information_update'           => $this->document_purpose_information_update,
                'status_update_active'                          => $this->status_update_active,
                'status_update_inactive'                        => $this->status_update_inactive,
                'date_from'                                     => $this->date_from,
                'date_to'                                       => $this->date_to,
                'document_series_no'                            => $this->document_series_no,
                'date_processed'                                => $this->date_processed,
                'registered_name'                               => $this->registered_name,
                'trade_name'                                    => $this->trade_name,
                'billing_address'                               => $this->billing_address,
                'shipping_address'                              => $this->shipping_address,
                'tax_id_no'                                     => $this->tax_id_no,
                'telephone_no'                                  => $this->telephone_no,
                'fax_no'                                        => $this->fax_no,
                'mobile_no'                                     => $this->mobile_no,
                'email_address'                                 => $this->email_address,
                'website'                                       => $this->website,
                'registration_date'                             => $this->registration_date,
                'type_of_business_corporation'                  => $this->type_of_business_corporation,
                'type_of_business_partnership'                  => $this->type_of_business_partnership,
                'type_of_business_government'                   => $this->type_of_business_government,
                'type_of_business_single_proprietorship'        => $this->type_of_business_single_proprietorship,
                'type_of_business_individual_private'           => $this->type_of_business_individual_private,
                'type_of_business_others'                       => $this->type_of_business_others,
                'currency_php'                                  => $this->currency_php,
                'currency_usd'                                  => $this->currency_usd,
                'currency_euro'                                 => $this->currency_euro,
                'currency_yen'                                  => $this->currency_yen,
                'currency_gbp'                                  => $this->currency_gbp,
                'currency_others'                               => $this->currency_others,
                'business_partner_group_trade'                  => $this->business_partner_group_trade,
                'business_partner_group_non_trade'              => $this->business_partner_group_non_trade,
                'business_partner_group_related_party'          => $this->business_partner_group_related_party,
                'business_partner_group_employee'               => $this->business_partner_group_employee,
                'business_partner_group_others'                 => $this->business_partner_group_others,
                'payment_terms_cash_on_delivery'                => $this->payment_terms_cash_on_delivery,
                'payment_terms_cash_with_orders'                => $this->payment_terms_cash_with_orders,
                'payment_terms_days_month_end'                  => $this->payment_terms_days_month_end,
                'payment_terms_days_after_delivery'             => $this->payment_terms_days_after_delivery,
                'payment_terms_others'                          => $this->payment_terms_others,
                'payment_methods_cash'                          => $this->payment_methods_cash,
                'payment_methods_check'                         => $this->payment_methods_check,
                'payment_methods_electronic_bank_transfer'      => $this->payment_methods_electronic_bank_transfer,
                'payment_methods_others'                        => $this->payment_methods_others,
                'bank_name'                                     => $this->bank_name,
                'bank_address'                                  => $this->bank_address,
                'account_name'                                  => $this->account_name,
                'account_no'                                    => $this->account_no,
                'swift_code'                                    => $this->swift_code,
                'accouts_receivable_payable'                    => $this->accouts_receivable_payable,
                'down_payment_clearing_account'                 => $this->down_payment_clearing_account,
                'donw_payment_interim_account'                  => $this->donw_payment_interim_account,
                'withholding_tax'                               => $this->withholding_tax,
                'wtax_codes_allowed'                            => $this->wtax_codes_allowed,
                'tax_group_capital_goods'                       => $this->tax_group_capital_goods,
                'tax_group_non_capital_goods'                   => $this->tax_group_non_capital_goods,
                'tax_group_services'                            => $this->tax_group_services,
                'tax_group_importations'                        => $this->tax_group_importations,
                'tax_group_non_taxable'                         => $this->tax_group_non_taxable,
                'tax_group_zero_rated'                          => $this->tax_group_zero_rated,
                'tax_group_exempt'                              => $this->tax_group_exempt,
                'tax_group_others'                              => $this->tax_group_others,
                'remarks_signatory'                             => $this->remarks_signatory,
                'full_name'                                     => $this->full_name,
                'position'                                      => $this->position,
                'date'                                          => $this->date,
                'signature'                                     => $this->signature,
            ]);

            foreach ($this->certification_name as $key => $item) {
                $this->Certification::create([
                    'business_partner_id'                       => $data->id,
                    'certification_name'                        => $this->certification_name[$key],
                    'organization_certifying_body'              => $this->organization_certifying_body[$key],
                    'certificate_date'                          => $this->certificate_date[$key],
                    'expiry_date'                               => $this->expiry_date[$key],
                ]);
            }

            foreach ($this->name as $key => $item) {
                $this->CP::create([
                    'business_partner_id'                       => $data->id,
                    'name'                                      => $this->name[$key],
                    'position'                                  => $this->positionC[$key],
                    'email_address_contacts'                    => $this->email_address_contacts[$key],
                    'phone_no'                                  => $this->phone_no[$key],
                ]);
            }

            $this->AR_model::create([
                'business_partner_id'                           => $data->id,
                'operations_SOPN'                               => $this->operations_SOPN,
                'operations_date'                               => $this->operations_date,
                'operations_status'                             => $this->operations_status,
                'supply_chain_human_resource_SOPN'              => $this->supply_chain_human_resource_SOPN,
                'supply_chain_human_resource_date'              => $this->supply_chain_human_resource_date,
                'supply_chain_human_resource_status'            => $this->supply_chain_human_resource_status,
                'finance_SOPN'                                  => $this->finance_SOPN,
                'finance_date'                                  => $this->finance_date,
                'finance_status'                                => $this->finance_status,
                'corporate_finance_SOPN'                        => $this->corporate_finance_SOPN,
                'corporate_finance_date'                        => $this->corporate_finance_date,
                'corporate_finance_status'                      => $this->corporate_finance_status,
                'audit_SOPN'                                    => $this->audit_SOPN,
                'audit_date'                                    => $this->audit_date,
                'audit_status'                                  => $this->audit_status,
                'system_administrator_SOPN'                     => $this->system_administrator_SOPN,
                'system_administrator_date'                     => $this->system_administrator_date,
                'system_administrator_status'                   => $this->system_administrator_status,
            ]);

            $this->DT_model::create([
                'business_partner_id'                           => $data->id,
                'document_no_page_2'                            => $this->document_no_page_2,
                'DN_1_individual'                               => $this->DN_1_individual,
                'DN_1_corporation'                              => $this->DN_1_corporation,
                'DN_1_cooperative'                              => $this->DN_1_cooperative,
                'DN_1_submitted'                                => $this->DN_1_submitted,
                'DN_1_RNS'                                      => $this->DN_1_RNS,
                'DN_2_individual'                               => $this->DN_2_individual,
                'DN_2_corporation'                              => $this->DN_2_corporation,
                'DN_2_cooperative'                              => $this->DN_2_cooperative,
                'DN_2_submitted'                                => $this->DN_2_submitted,
                'DN_2_RNS'                                      => $this->DN_2_RNS,
                'DN_3_individual'                               => $this->DN_3_individual,
                'DN_3_corporation'                              => $this->DN_3_corporation,
                'DN_3_cooperative'                              => $this->DN_3_cooperative,
                'DN_3_submitted'                                => $this->DN_3_submitted,
                'DN_3_RNS'                                      => $this->DN_3_RNS,
                'DN_4_individual'                               => $this->DN_4_individual,
                'DN_4_corporation'                              => $this->DN_4_corporation,
                'DN_4_cooperative'                              => $this->DN_4_cooperative,
                'DN_4_submitted'                                => $this->DN_4_submitted,
                'DN_4_RNS'                                      => $this->DN_4_RNS,
                'DN_5_individual'                               => $this->DN_5_individual,
                'DN_5_corporation'                              => $this->DN_5_corporation,
                'DN_5_cooperative'                              => $this->DN_5_cooperative,
                'DN_5_submitted'                                => $this->DN_5_submitted,
                'DN_5_RNS'                                      => $this->DN_5_RNS,
                'DN_6_individual'                               => $this->DN_6_individual,
                'DN_6_corporation'                              => $this->DN_6_corporation,
                'DN_6_cooperative'                              => $this->DN_6_cooperative,
                'DN_6_submitted'                                => $this->DN_6_submitted,
                'DN_6_RNS'                                      => $this->DN_6_RNS,
                'DN_7_individual'                               => $this->DN_7_individual,
                'DN_7_corporation'                              => $this->DN_7_corporation,
                'DN_7_cooperative'                              => $this->DN_7_cooperative,
                'DN_7_submitted'                                => $this->DN_7_submitted,
                'DN_7_RNS'                                      => $this->DN_7_RNS,
                'DN_8_individual'                               => $this->DN_8_individual,
                'DN_8_corporation'                              => $this->DN_8_corporation,
                'DN_8_cooperative'                              => $this->DN_8_cooperative,
                'DN_8_submitted'                                => $this->DN_8_submitted,
                'DN_8_RNS'                                      => $this->DN_8_RNS,
                'DN_9_individual'                               => $this->DN_9_individual,
                'DN_9_corporation'                              => $this->DN_9_corporation,
                'DN_9_cooperative'                              => $this->DN_9_cooperative,
                'DN_9_submitted'                                => $this->DN_9_submitted,
                'DN_9_RNS'                                      => $this->DN_9_RNS,
                'DN_10_individual'                              => $this->DN_10_individual,
                'DN_10_corporation'                             => $this->DN_10_corporation,
                'DN_10_cooperative'                             => $this->DN_10_cooperative,
                'DN_10_submitted'                               => $this->DN_10_submitted,
                'DN_10_RNS'                                     => $this->DN_10_RNS,
                'DN_11_individual'                              => $this->DN_11_individual,
                'DN_11_corporation'                             => $this->DN_11_corporation,
                'DN_11_cooperative'                             => $this->DN_11_cooperative,
                'DN_11_submitted'                               => $this->DN_11_submitted,
                'DN_11_RNS'                                     => $this->DN_11_RNS,
            ]);

            DB::commit(); 

            Event::dispatch(new bpinformationsheet($data));

            $this->reset();

            return redirect()->route('business-partner.show',$data);
            
        }catch(Exception $exception){
            DB::rollback();
            Log::error($exception);
        }catch (Throwable $throwable) {
            DB::rollback();
            Log::error($throwable);
        }
    }
}
