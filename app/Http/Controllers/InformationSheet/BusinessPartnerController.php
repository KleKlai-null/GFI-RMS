<?php

namespace App\Http\Controllers\InformationSheet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\PDF\bpinformationsheet;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Throwable;
use Event;
use App\Models\InformationSheet\BP\ApprovalRouting;
use App\Models\InformationSheet\BP\BusinessPartner;
use App\Models\InformationSheet\BP\Certification;
use App\Models\InformationSheet\BP\ContactPerson;
use App\Models\InformationSheet\BP\DocumentTable;
use Carbon\Carbon;

class BusinessPartnerController extends Controller
{


    public function update(Request $request){

        $now = Carbon::now();
        $modified_now = $now->format('Y-m-d H:i:s');

        try{
            DB::beginTransaction();

            $data = BusinessPartner::create([
                'bp_type_customer'                              => $request->bp_type_customer,
                'bp_type_supplier'                              => $request->bp_type_supplier,
                'document_purpose_new_registration'             => $request->document_purpose_new_registration,
                'document_purpose_information_update'           => $request->document_purpose_information_update,
                'status_update_active'                          => $request->status_update_active,
                'status_update_inactive'                        => $request->status_update_inactive,
                'date_from'                                     => $request->date_from,
                'date_to'                                       => $request->date_to,
                'document_series_no'                            => $request->document_series_no,
                'date_processed'                                => $request->date_processed,
                'registered_name'                               => $request->registered_name,
                'trade_name'                                    => $request->trade_name,
                'billing_address'                               => $request->billing_address,
                'shipping_address'                              => $request->shipping_address,
                'tax_id_no'                                     => $request->tax_id_no,
                'telephone_no'                                  => $request->telephone_no,
                'fax_no'                                        => $request->fax_no,
                'mobile_no'                                     => $request->mobile_no,
                'email_address'                                 => $request->email_address,
                'website'                                       => $request->website,
                'registration_date'                             => $request->registration_date,
                'type_of_business_corporation'                  => $request->type_of_business_corporation,
                'type_of_business_partnership'                  => $request->type_of_business_partnership,
                'type_of_business_government'                   => $request->type_of_business_government,
                'type_of_business_single_proprietorship'        => $request->type_of_business_single_proprietorship,
                'type_of_business_individual_private'           => $request->type_of_business_individual_private,
                'type_of_business_others'                       => $request->type_of_business_others,
                'currency_php'                                  => $request->currency_php,
                'currency_usd'                                  => $request->currency_usd,
                'currency_euro'                                 => $request->currency_euro,
                'currency_yen'                                  => $request->currency_yen,
                'currency_gbp'                                  => $request->currency_gbp,
                'currency_others'                               => $request->currency_others,
                'business_partner_group_trade'                  => $request->business_partner_group_trade,
                'business_partner_group_non_trade'              => $request->business_partner_group_non_trade,
                'business_partner_group_related_party'          => $request->business_partner_group_related_party,
                'business_partner_group_employee'               => $request->business_partner_group_employee,
                'business_partner_group_others'                 => $request->business_partner_group_others,
                'payment_terms_cash_on_delivery'                => $request->payment_terms_cash_on_delivery,
                'payment_terms_cash_with_orders'                => $request->payment_terms_cash_with_orders,
                'payment_terms_days_month_end'                  => $request->payment_terms_days_month_end,
                'payment_terms_days_after_delivery'             => $request->payment_terms_days_after_delivery,
                'payment_terms_others'                          => $request->payment_terms_others,
                'payment_methods_cash'                          => $request->payment_methods_cash,
                'payment_methods_check'                         => $request->payment_methods_check,
                'payment_methods_electronic_bank_transfer'      => $request->payment_methods_electronic_bank_transfer,
                'payment_methods_others'                        => $request->payment_methods_others,
                'bank_name'                                     => $request->bank_name,
                'bank_address'                                  => $request->bank_address,
                'account_name'                                  => $request->account_name,
                'account_no'                                    => $request->account_no,
                'swift_code'                                    => $request->swift_code,
                'accouts_receivable_payable'                    => $request->accouts_receivable_payable,
                'down_payment_clearing_account'                 => $request->down_payment_clearing_account,
                'donw_payment_interim_account'                  => $request->donw_payment_interim_account,
                'withholding_tax'                               => $request->withholding_tax,
                'wtax_codes_allowed'                            => $request->wtax_codes_allowed,
                'tax_group_capital_goods'                       => $request->tax_group_capital_goods,
                'tax_group_non_capital_goods'                   => $request->tax_group_non_capital_goods,
                'tax_group_services'                            => $request->tax_group_services,
                'tax_group_importations'                        => $request->tax_group_importations,
                'tax_group_non_taxable'                         => $request->tax_group_non_taxable,
                'tax_group_zero_rated'                          => $request->tax_group_zero_rated,
                'tax_group_exempt'                              => $request->tax_group_exempt,
                'tax_group_others'                              => $request->tax_group_others,
                'remarks_signatory'                             => $request->remarks_signatory,
                'full_name'                                     => $request->full_name,
                'position'                                      => $request->position,
                'date'                                          => $request->date,
                'signature'                                     => $request->signature,
                'revision'                                      => $request->revision_number,
                'modified'                                      => $modified_now,
                'remarks'                                       => $request->remarks,
                'updated_by'                                    => auth()->user()->username,
            ]);

            foreach ($request->certification_name as $key => $item) {
                Certification::create([
                    'business_partner_id'                       => $data->id,
                    'certification_name'                        => $request->certification_name[$key],
                    'organization_certifying_body'              => $request->organization_certifying_body[$key],
                    'certificate_date'                          => $request->certificate_date[$key],
                    'expiry_date'                               => $request->expiry_date[$key],
                ]);
            }

            foreach ($request->name as $key => $item) {
                ContactPerson::create([
                    'business_partner_id'                       => $data->id,
                    'name'                                      => $request->name[$key],
                    'position'                                  => $request->positionC[$key],
                    'email_address_contacts'                    => $request->email_address_contacts[$key],
                    'phone_no'                                  => $request->phone_no[$key],
                ]);
            }

            ApprovalRouting::create([
                'business_partner_id'                           => $data->id,
                'operations_SOPN'                               => $request->operations_SOPN,
                'operations_date'                               => $request->operations_date,
                'operations_status'                             => $request->operations_status,
                'supply_chain_human_resource_SOPN'              => $request->supply_chain_human_resource_SOPN,
                'supply_chain_human_resource_date'              => $request->supply_chain_human_resource_date,
                'supply_chain_human_resource_status'            => $request->supply_chain_human_resource_status,
                'finance_SOPN'                                  => $request->finance_SOPN,
                'finance_date'                                  => $request->finance_date,
                'finance_status'                                => $request->finance_status,
                'corporate_finance_SOPN'                        => $request->corporate_finance_SOPN,
                'corporate_finance_date'                        => $request->corporate_finance_date,
                'corporate_finance_status'                      => $request->corporate_finance_status,
                'audit_SOPN'                                    => $request->audit_SOPN,
                'audit_date'                                    => $request->audit_date,
                'audit_status'                                  => $request->audit_status,
                'system_administrator_SOPN'                     => $request->system_administrator_SOPN,
                'system_administrator_date'                     => $request->system_administrator_date,
                'system_administrator_status'                   => $request->system_administrator_status,
            ]);

            DocumentTable::create([
                'business_partner_id'                           => $data->id,
                'document_no_page_2'                            => $request->document_no_page_2,
                'DN_1_individual'                               => $request->DN_1_individual,
                'DN_1_corporation'                              => $request->DN_1_corporation,
                'DN_1_cooperative'                              => $request->DN_1_cooperative,
                'DN_1_submitted'                                => $request->DN_1_submitted,
                'DN_1_RNS'                                      => $request->DN_1_RNS,
                'DN_2_individual'                               => $request->DN_2_individual,
                'DN_2_corporation'                              => $request->DN_2_corporation,
                'DN_2_cooperative'                              => $request->DN_2_cooperative,
                'DN_2_submitted'                                => $request->DN_2_submitted,
                'DN_2_RNS'                                      => $request->DN_2_RNS,
                'DN_3_individual'                               => $request->DN_3_individual,
                'DN_3_corporation'                              => $request->DN_3_corporation,
                'DN_3_cooperative'                              => $request->DN_3_cooperative,
                'DN_3_submitted'                                => $request->DN_3_submitted,
                'DN_3_RNS'                                      => $request->DN_3_RNS,
                'DN_4_individual'                               => $request->DN_4_individual,
                'DN_4_corporation'                              => $request->DN_4_corporation,
                'DN_4_cooperative'                              => $request->DN_4_cooperative,
                'DN_4_submitted'                                => $request->DN_4_submitted,
                'DN_4_RNS'                                      => $request->DN_4_RNS,
                'DN_5_individual'                               => $request->DN_5_individual,
                'DN_5_corporation'                              => $request->DN_5_corporation,
                'DN_5_cooperative'                              => $request->DN_5_cooperative,
                'DN_5_submitted'                                => $request->DN_5_submitted,
                'DN_5_RNS'                                      => $request->DN_5_RNS,
                'DN_6_individual'                               => $request->DN_6_individual,
                'DN_6_corporation'                              => $request->DN_6_corporation,
                'DN_6_cooperative'                              => $request->DN_6_cooperative,
                'DN_6_submitted'                                => $request->DN_6_submitted,
                'DN_6_RNS'                                      => $request->DN_6_RNS,
                'DN_7_individual'                               => $request->DN_7_individual,
                'DN_7_corporation'                              => $request->DN_7_corporation,
                'DN_7_cooperative'                              => $request->DN_7_cooperative,
                'DN_7_submitted'                                => $request->DN_7_submitted,
                'DN_7_RNS'                                      => $request->DN_7_RNS,
                'DN_8_individual'                               => $request->DN_8_individual,
                'DN_8_corporation'                              => $request->DN_8_corporation,
                'DN_8_cooperative'                              => $request->DN_8_cooperative,
                'DN_8_submitted'                                => $request->DN_8_submitted,
                'DN_8_RNS'                                      => $request->DN_8_RNS,
                'DN_9_individual'                               => $request->DN_9_individual,
                'DN_9_corporation'                              => $request->DN_9_corporation,
                'DN_9_cooperative'                              => $request->DN_9_cooperative,
                'DN_9_submitted'                                => $request->DN_9_submitted,
                'DN_9_RNS'                                      => $request->DN_9_RNS,
                'DN_10_individual'                              => $request->DN_10_individual,
                'DN_10_corporation'                             => $request->DN_10_corporation,
                'DN_10_cooperative'                             => $request->DN_10_cooperative,
                'DN_10_submitted'                               => $request->DN_10_submitted,
                'DN_10_RNS'                                     => $request->DN_10_RNS,
                'DN_11_individual'                              => $request->DN_11_individual,
                'DN_11_corporation'                             => $request->DN_11_corporation,
                'DN_11_cooperative'                             => $request->DN_11_cooperative,
                'DN_11_submitted'                               => $request->DN_11_submitted,
                'DN_11_RNS'                                     => $request->DN_11_RNS,
            ]);

            DB::commit(); 

            Event::dispatch(new bpinformationsheet($data));

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
