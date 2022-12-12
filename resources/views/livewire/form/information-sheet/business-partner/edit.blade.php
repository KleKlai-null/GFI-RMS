<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                {{-- <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <button class="btn btn-white" type="button" wire:click="download_pdf()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-file-download" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                    <path d="M12 17v-6"></path>
                                    <path d="M9.5 14.5l2.5 2.5l2.5 -2.5"></path>
                                 </svg>
                                Download PDF
                            </button>
                        </span>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <form action="{{ route('business-partner.update', $data) }}" method="post"> 
                    {{-- <form wire:submit.prevent="submit(Object.fromEntries(new FormData($event.target)))">  --}}
                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="row g-6">
                                    <div class="col-2">
                                        <div class="form-label">BP Type</div>
                                        <div>
                                            <input type="hidden" value="{{$revision_number}}" name="revision_number">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Customer" name="bp_type_customer"
                                                {{ ($data->bp_type_customer) ? 'checked' : '' }} 
                                                >
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="bp_type_supplier" {{ ($data->bp_type_supplier) ? 'checked' : '' }} >
                                                <span class="form-check-label">Supplier</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Document Purpose</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="document_purpose_new_registration" {{ ($data->document_purpose_new_registration) ? 'checked' : '' }} >
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="document_purpose_information_update" {{ ($data->document_purpose_information_update) ? 'checked' : '' }} >
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Status Update</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="status_update_active" {{ ($data->status_update_active) ? 'checked' : '' }} >
                                                <span class="form-check-label">Active</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="status_update_inactive" {{ ($data->status_update_inactive) ? 'checked' : '' }} >
                                                <span class="form-check-label">Inactive</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="form-label">Date from</label>
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom" name="date_from"  value="{{$data->date_from}}" >
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Date to</label>
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom" name="date_to" value="{{$data->date_to}}" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Document Number</label>
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0 border-bottom"
                                                    placeholder="Document no." value="{{$data->document_series_no}}" name="document_series_no" readonly>
                                            </div>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Date Processed</label>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                                placeholder="Date Processed" value="{{$data->date_processed}}" name="date_processed" readonly>
                                        </div>
                                    </div>
                                </div>
                                <h4>Primary Information</h4>
                                <div class="row g-6">
                                    <div class="col-8">
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Registered Name</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="registered_name"
                                                        placeholder="Registered Name" value="{{$data->registered_name}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Trade Name</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="trade_name"
                                                        placeholder="Trade Name" value="{{$data->trade_name}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Billing Address</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="billing_address"
                                                        placeholder="Billing Address" value="{{$data->billing_address}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Shipping Address</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="shipping_address"
                                                        placeholder="Shipping Address" value="{{$data->shipping_address}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Telephone No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="telephone_no"
                                                        placeholder="Telephone No." value="{{$data->telephone_no}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Fax No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="fax_no"
                                                        placeholder="Fax No." value="{{$data->fax_no}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Mobile No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="mobile_no"
                                                        placeholder="Mobile No." value="{{$data->mobile_no}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Email Address</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="email_address"
                                                        placeholder="Email Address" value="{{$data->email_address}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>    
                                    
                                    <div class="col-4">
                                        <div>                             
                                            <label class="form-check"><div class="datagrid-title">Tax ID No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="tax_id_no"
                                                        placeholder="Tax ID No." value="{{$data->tax_id_no}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>      
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Registration Date</div>
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom" name="registration_date"
                                                        placeholder="Registration Date" value="{{$data->registration_date}}" >
                                                </div>
                                            </label>                              
                                        </div>
                                    </div>  
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Website</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="website"
                                                        placeholder="Website" value="{{$data->website}}" >
                                                </div>
                                            </label>
                                        
                                        </div>
                                    </div>  
                                </div>  
                                
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-label">Type of Business</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business_corporation" {{ ($data->type_of_business_corporation) ? 'checked' : '' }} >
                                                <span class="form-check-label">Corporation</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business_partnership" {{ ($data->type_of_business_partnership) ? 'checked' : '' }} >
                                                <span class="form-check-label">Partnership</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business_government" {{ ($data->type_of_business_government) ? 'checked' : '' }} >
                                                <span class="form-check-label">Government</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business_single_proprietorship" {{ ($data->type_of_business_single_proprietorship) ? 'checked' : '' }} >
                                                <span class="form-check-label">Single Proprietorship</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business_individual_private" {{ ($data->type_of_business_individual_private) ? 'checked' : '' }} >
                                                <span class="form-check-label">Individual/Private</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business_others" id="TB_others_edit" {{ ($data->type_of_business_others) ? 'checked' : '' }} >
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="type_of_business_others" id="type_of_business_others_input" placeholder="Others" value="{{$data->type_of_business_others}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Currency</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency_php" {{ ($data->currency_php) ? 'checked' : '' }} >
                                                <span class="form-check-label">PHP</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency_usd" {{ ($data->currency_usd) ? 'checked' : '' }} >
                                                <span class="form-check-label">USD</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency_euro" {{ ($data->currency_euro) ? 'checked' : '' }} >
                                                <span class="form-check-label">EURO</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency_yen" {{ ($data->currency_yen) ? 'checked' : '' }} >
                                                <span class="form-check-label">YEN</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency_gbp" {{ ($data->currency_gbp) ? 'checked' : '' }} >
                                                <span class="form-check-label">GBP</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency_others" id="currency_others_edit" {{ ($data->currency_others) ? 'checked' : '' }} >
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="currency_others" id="currency_others_edit_input"
                                                        placeholder="Others" value="{{$data->currency_others}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Business Partner Group</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="business_partner_group_trade" {{ ($data->business_partner_group_trade) ? 'checked' : '' }} >
                                                <span class="form-check-label">Trade</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="business_partner_group_non_trade" {{ ($data->business_partner_group_non_trade) ? 'checked' : '' }} >
                                                <span class="form-check-label">Non-Trade</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="business_partner_group_related_party" {{ ($data->business_partner_group_related_party) ? 'checked' : '' }} >
                                                <span class="form-check-label">Related Party</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="business_partner_group_employee" {{ ($data->business_partner_group_employee) ? 'checked' : '' }} >
                                                <span class="form-check-label">Employee</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="business_partner_group_others" id="business_partner_group_others_edit" {{ ($data->business_partner_group_others) ? 'checked' : '' }} >
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="business_partner_group_others" id="business_partner_group_others_edit_input"
                                                        placeholder="Others" value="{{$data->business_partner_group_others}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>      
                                
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-label">Payment Terms</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_terms_cash_on_deliveryc" {{ ($data->payment_terms_cash_on_deliveryc) ? 'checked' : '' }} >
                                                <span class="form-check-label">Cash on Delivery</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_terms_cash_with_orders" {{ ($data->payment_terms_cash_with_orders) ? 'checked' : '' }} >
                                                <span class="form-check-label">Cash with Order</span>
                                            </label>

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_terms_days_month_end" id="payment_terms_days_month_end_edit" {{ ($data->payment_terms_days_month_end) ? 'checked' : '' }} >
                                                <span class="form-check-label">Days Month End</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom" name="payment_terms_days_month_end" id="payment_terms_days_month_end_edit_input"
                                                        placeholder="Days Month End" value="{{$data->payment_terms_days_month_end}}" >
                                                </div>
                                            </label> 

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_terms_days_after_delivery" id="payment_terms_days_after_delivery_edit" {{ ($data->payment_terms_days_after_delivery) ? 'checked' : '' }} >
                                                <span class="form-check-label">Days After Delivery</span>
                                            </label>
                                            <label class="form-check" >
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom" name="payment_terms_days_after_delivery" id="payment_terms_days_after_delivery_edit_input"
                                                        placeholder="Days After Delivery" value="{{$data->payment_terms_days_after_delivery}}" >
                                                </div>
                                            </label>

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_terms_others" id="payment_terms_others_edit" {{ ($data->payment_terms_others) ? 'checked' : '' }} >
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom" name="payment_terms_others" id="payment_terms_others_edit_input"
                                                        placeholder="Others" value="{{$data->payment_terms_others}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Payment Method</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_methods_cash" {{ ($data->payment_methods_cash) ? 'checked' : '' }} >
                                                <span class="form-check-label">Cash</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_methods_check" {{ ($data->payment_methods_check) ? 'checked' : '' }} >
                                                <span class="form-check-label">Check</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_methods_electronic_bank_transfer" {{ ($data->payment_methods_electronic_bank_transfer) ? 'checked' : '' }} >
                                                <span class="form-check-label">Electronic Bank Transfer</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_methods_others" id="payment_methods_others_edit" {{ ($data->payment_methods_others) ? 'checked' : '' }} >
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="payment_methods_others" id="payment_methods_others_edit_input"
                                                        placeholder="Others" value="{{$data->payment_methods_others}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Bank Details</div>
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Bank Name</div>
                                            
                                                    <input type="text" class="form-control border-0 border-bottom" name="bank_name"
                                                        placeholder="Bank Name" value="{{$data->bank_name}}" >
                       
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Bank Address</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="bank_address"
                                                        placeholder="Bank Address" value="{{$data->bank_address}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Account Name</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="account_name"
                                                        placeholder="Account Name" value="{{$data->account_name}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Account No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="account_no"
                                                        placeholder="Account No." value="{{$data->account_no}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Swift Code</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="swift_code"
                                                        placeholder="Swift Code" value="{{$data->swift_code}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-label">Control Accounts</div>
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Account Receivable/Payable</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Account Receivable/Payable" name="accouts_receivable_payable" value="{{$data->accouts_receivable_payable}}" >
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Down Payment Clearing Account</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Down Payment Clearing Account" name="down_payment_clearing_account" value="{{$data->down_payment_clearing_account}}" > 
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Down Payment Interim Account</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Down Payment Interim Account" name="donw_payment_interim_account" value="{{$data->donw_payment_interim_account}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">Withholding Tax</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="withholding_tax" {{ ($data->withholding_tax) ? 'checked' : '' }} >
                                                <span class="form-check-label">Subject to WTax</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">WTax Codes Allowed</div>
                                        <div>
                                            <label class="form-check">WTax Codes
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="wtax_codes_allowed"
                                                        placeholder="WTax Codes" value="{{$data->wtax_codes_allowed}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div> 
                                
                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-label">Tax Group</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group_capital_goods" {{ ($data->tax_group_capital_goods) ? 'checked' : '' }} >
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group_non_capital_goods" {{ ($data->tax_group_non_capital_goods) ? 'checked' : '' }} >
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group_services" {{ ($data->tax_group_services) ? 'checked' : '' }} >
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group_importations" {{ ($data->tax_group_importations) ? 'checked' : '' }} >
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <br/>
                                        <div class="form-label"></div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group_non_taxable" {{ ($data->tax_group_non_taxable) ? 'checked' : '' }} >
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group_zero_rated" {{ ($data->tax_group_zero_rated) ? 'checked' : '' }} >
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <br/>
                                        <div class="form-label"></div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group_exempt" {{ ($data->tax_group_exempt) ? 'checked' : '' }} >
                                                <span class="form-check-label">Exepmt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group_others" id="tax_group_others_edit" {{ ($data->tax_group_others) ? 'checked' : '' }} >
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" name="tax_group_others" id="tax_group_others_edit_input"
                                                        placeholder="Others" value="{{$data->tax_group_others}}" >
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>  

                        {{-- <div class="card mt-2">
                            <div class="card-body">
                                <h4>Certification/Standard Accreditation</h4>

                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table class="table table-vcenter card-table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Certification Name</th>
                                                        <th>Organization/Certifying Body</th>
                                                        <th>Certification Date</th>
                                                        <th>Expiry Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($data->certifications as $item)
                                                        <tr>
                                                            <td class="text-muted">{!! $item->certification_name  !!}</td>
                                                            <td class="text-muted">{!! $item->organization_certifying_body !!}</td>
                                                            <td class="text-muted">{!! $item->certificate_date !!}</td>
                                                            <td class="text-muted">{!! $item->expiry_date !!}</td>
                                                        </tr>
                                                    @empty
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
        
                                <h4>Contact Persons</h4>
                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table class="table table-vcenter card-table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Email Address</th>
                                                        <th>Phone No.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($data->contactpersons as $item)
                                                        <tr>
                                                            <td class="text-muted">{!! $item->name  !!}</td>
                                                            <td class="text-muted">{!! $item->position !!}</td>
                                                            <td class="text-muted">{!! $item->email_address_contacts !!}</td>
                                                            <td class="text-muted">{!! $item->phone_no !!}</td>
                                                        </tr>
                                                    @empty
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br/>

                                <div class="col-12">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"  value="{{$data->remarks_signatory}}">
                                        </div>
                                        <div class="datagrid-title text-left">Remarks Signatory</div>
                                </div>
                                
                                <div class="row g-6">
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                             value="{{$data->full_name}}">
                                        </div>
                                        <div class="datagrid-title text-left">Full Name</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                             value="{{$data->position}}">
                                        </div>
                                        <div class="datagrid-title text-left">Position</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                             value="{{$data->date}}">
                                        </div>
                                        <div class="datagrid-title text-left">Date</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                             value="{{$data->signature}}">
                                        </div>
                                        <div class="datagrid-title text-left">Signature</div>
                                    </div>
                                </div>                                             
                            </div>
                        </div> --}}
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4>Certification/Standard Accreditation</h4>
                                <div class="mb-3">
                                    <div class="row g-2 text-center">
                                        <div class="col-4">
                                            <label class="form-label">Certification Name</label>
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Organization/Certifying Body</label>
                                        </div>
                                        <div class="col-2">
                                            <label class="form-label">Certification Date</label>
                                        </div>
                                        <div class="col-2">
                                            <label class="form-label">Expiry Date</label>
                                        </div>
                                    </div>
                                    @foreach ($inputs as $key => $value)
                                        <div class="row g-2 mb-2">
                                            <div class="col-4">
                                                <input type="text"
                                                    class="form-control"
                                                    placeholder="Certification Name" name="certification_name[]"  wire:model="certification_name.{{ $value }}">
                                            </div>
                                            <div class="col-3">
                                                <input type="text"
                                                    class="form-control"
                                                    placeholder="Organization/Certifying" name="organization_certifying_body[]"
                                                    wire:model="organization_certifying_body.{{ $value }}">
                                            </div>
                                            <div class="col-2">
                                                <input type="date"
                                                    class="form-control"
                                                    placeholder="Certification Date" name="certificate_date[]" wire:model="certificate_date.{{ $value }}">
                                            </div>
                                            <div class="col-2">
                                                <input type="date"
                                                    class="form-control"
                                                    placeholder="Expiry Date" name="expiry_date[]" wire:model="expiry_date.{{ $value }}">
                                            </div>
                                            <div class="col-1">
                                                <button class="btn btn-icon"
                                                    wire:click.prevent="removeCertification({{ $key }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler-circle-minus" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="12" cy="12" r="9">
                                                        </circle>
                                                        <line x1="9" y1="12" x2="15"
                                                            y2="12"></line>
                                                    </svg></button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
        
                                <div class="mb-3">
                                    <div class="row g-2">
                                        <div class="col-2">
                                            <button class="btn btn-primary"
                                                wire:click.prevent="addCertification({{ $i }})"><svg
                                                    xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-plus"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <line x1="12" y1="5" x2="12"
                                                        y2="19">
                                                    </line>
                                                    <line x1="5" y1="12" x2="19"
                                                        y2="12">
                                                    </line>
                                                </svg>
                                                Add another line
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <h4>Contact Persons</h4>
                                <div class="mb-3">
                                    <div class="row g-2 text-center">
                                        <div class="col-4">
                                            <label class="form-label">Name</label>
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Position</label>
                                        </div>
                                        <div class="col-2">
                                            <label class="form-label">Email Address</label>
                                        </div>
                                        <div class="col-2">
                                            <label class="form-label">Phone No.</label>
                                        </div>
                                    </div>
                                    @foreach ($inputsContact as $key => $value)
                                        <div class="row g-2 mb-2">
                                            <div class="col-4">
                                                <input type="text"
                                                    class="form-control" name="name[]"
                                                    placeholder="Name" wire:model="name.{{ $value }}">
                                            </div>
                                            <div class="col-3">
                                                <input type="text"
                                                    class="form-control" 
                                                    placeholder="Position" name="positionC[]"
                                                    wire:model="positionC.{{ $value }}">
                                            </div>
                                            <div class="col-2">
                                                <input type="text"
                                                    class="form-control"
                                                    placeholder="Email Address" name="email_address_contacts[]" wire:model="email_address_contacts.{{ $value }}">
                                            </div>
                                            <div class="col-2">
                                                <input type="text"
                                                    class="form-control"
                                                    placeholder="Phone No." name="phone_no[]" wire:model="phone_no.{{ $value }}">
                                            </div>
                                            <div class="col-1">
                                                <button class="btn btn-icon"
                                                    wire:click.prevent="removeContact({{ $key }})">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="icon icon-tabler-circle-minus" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="12" cy="12" r="9">
                                                        </circle>
                                                        <line x1="9" y1="12" x2="15"
                                                            y2="12"></line>
                                                    </svg></button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
        
                                <div class="mb-3">
                                    <div class="row g-2">
                                        <div class="col-2">
                                            <button class="btn btn-primary"
                                                wire:click.prevent="addContact({{ $contact }})"><svg
                                                    xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-plus"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <line x1="12" y1="5" x2="12"
                                                        y2="19">
                                                    </line>
                                                    <line x1="5" y1="12" x2="19"
                                                        y2="12">
                                                    </line>
                                                </svg>
                                                Add another line
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" name="remarks_signatory"
                                            value="{{$data->remarks_signatory}}">
                                        </div>
                                        <div class="datagrid-title text-left">Remarks Signatory</div>
                                </div>
                                
                                <div class="row g-6">
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" name="full_name"
                                            value="{{$data->full_name}}">
                                        </div>
                                        <div class="datagrid-title text-left">Full Name</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" name="position"
                                            value="{{$data->position}}">
                                        </div>
                                        <div class="datagrid-title text-left">Position</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="date" class="form-control border-0 border-bottom" name="date"
                                            value="{{$data->date}}">
                                        </div>
                                        <div class="datagrid-title text-left">Date</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" name="signature"
                                            value="{{$data->signature}}">
                                        </div>
                                        <div class="datagrid-title text-left">Signature</div>
                                    </div>
                                </div>                                             
                            </div>
                        </div>


                        <div class="card mt-2">
                            <div class="card-body">
                                <h3 class="card-title text-center form-fieldset">***** APPROVAL ROUTING *****</h3>
                                <div class="datagrid mb-3">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">1. Operations</div>
                                        <div class="datagrid-content">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom" name="operations_SOPN"
                                                        value="{{$data->approvalrouting->operations_SOPN}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom" name="operations_date"
                                                        value="{{$data->approvalrouting->operations_date}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="operations_status" value="Passed" {{ ($data->approvalrouting->operations_status === 'Passed') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="operations_status" value="Rejected" {{ ($data->approvalrouting->operations_status === 'Rejected') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Rejected</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">4. Corporate Finance</div>
                                        <div class="datagrid-content">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom" name="corporate_finance_SOPN"
                                                        value="{{$data->approvalrouting->corporate_finance_SOPN}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom" name="corporate_finance_date"
                                                        value="{{$data->approvalrouting->corporate_finance_date}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="corporate_finance_status" value="Passed" {{ ($data->approvalrouting->corporate_finance_status === 'Passed') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="corporate_finance_status" value="Rejected" {{ ($data->approvalrouting->corporate_finance_status === 'Rejected') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Rejected</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="datagrid mb-3">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">2. Supply Chain/Human Resource</div>
                                        <div class="datagrid-content">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom" name="supply_chain_human_resource_SOPN"
                                                        value="{{$data->approvalrouting->supply_chain_human_resource_SOPN}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom" name="supply_chain_human_resource_date"
                                                        value="{{$data->approvalrouting->supply_chain_human_resource_date}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="supply_chain_human_resource_status" value="Passed" {{ ($data->approvalrouting->supply_chain_human_resource_status === 'Passed') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="supply_chain_human_resource_status" value="Rejected" {{ ($data->approvalrouting->supply_chain_human_resource_status === 'Rejected') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Rejected</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">5. Audit</div>
                                        <div class="datagrid-content">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom" name="audit_SOPN"
                                                        value="{{$data->approvalrouting->audit_SOPN}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom" name="audit_date"
                                                        value="{{$data->approvalrouting->audit_date}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="audit_status" value="Passed" {{ ($data->approvalrouting->audit_status === 'Passed') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="audit_status" value="Rejected" {{ ($data->approvalrouting->audit_status === 'Rejected') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Rejected</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="datagrid">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">3. Finance</div>
                                        <div class="datagrid-content">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom" name="finance_SOPN"
                                                        value="{{$data->approvalrouting->finance_SOPN}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom" name="finance_date"
                                                        value="{{$data->approvalrouting->finance_date}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="finance_status" value="Passed" {{ ($data->approvalrouting->finance_status === 'Passed') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="finance_status" value="Rejected" {{ ($data->approvalrouting->finance_status === 'Rejected') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Rejected</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">6. System Administrator</div>
                                        <div class="datagrid-content">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom" name="system_administrator_SOPN"
                                                        value="{{$data->approvalrouting->system_administrator_SOPN}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom" name="system_administrator_date"
                                                        value="{{$data->approvalrouting->system_administrator_date}}" >
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="system_administrator_status" value="Passed" {{ ($data->approvalrouting->system_administrator_status === 'Passed') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" name="system_administrator_status" value="Rejected" {{ ($data->approvalrouting->system_administrator_status === 'Rejected') ? 'checked' : '' }} >
                                                            <span class="form-check-label">Rejected</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-2">
                                        {{-- <label class="form-check"> --}}<div class="datagrid-title">Document No.</div>
                                            <div class="datagrid-content ">
                                                <input type="text" class="form-control border-0 border-bottom"
                                                    placeholder="Document No." value="{{$data->documenttable->document_no_page_2}}" name="document_no_page_2" readonly>
                                            </div>
                                        {{-- </label> --}}
                                    </div>
                                </div>
                            <h3>Checklist of Requirements</h3>
                            <p>Please indicate (✔️) in the Submitted column if the corresponding document is attached in this form. Items marked with asterisk (<span style="color:red">*</span>) are required documents to process the registration.</p>
                            <table class="table table-bordered">
                                <colgroup>
                                <col span="1" style="width: 40%;">
                                <col span="1" style="width: 10%;">
                                <col span="1" style="width: 10%;">
                                <col span="1" style="width: 10%;">
                                <col span="1" style="width: 10%;">
                                <col span="1" style="width: 10%;">
                                </colgroup>
                                
                                
                                <thead>
                                    <tr>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Individual</th>
                                        <th scope="col">Corporation</th>
                                        <th scope="col">Cooperative</th>
                                        <th scope="col">Submitted</th>
                                        <th scope="col">Reason, if not submitted</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td >Latest Business Permit<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"  name="DN_1_individual"
                                                {{ ($data->documenttable->DN_1_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_1_corporation"
                                                {{ ($data->documenttable->DN_1_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_1_cooperative"
                                                {{ ($data->documenttable->DN_1_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_1_submitted"
                                                {{ ($data->documenttable->DN_1_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_1_RNS" value="{{$data->documenttable->DN_1_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >DTI Certificate<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_2_individual"
                                                {{ ($data->documenttable->DN_2_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_2_corporation"
                                                {{ ($data->documenttable->DN_2_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_2_cooperative"
                                                {{ ($data->documenttable->DN_2_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_2_submitted"
                                                {{ ($data->documenttable->DN_2_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_2_RNS" value="{{$data->documenttable->DN_2_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Articles of Incorporation/Cooperation & by laws</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_3_individual"
                                                {{ ($data->documenttable->DN_3_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_3_corporation"
                                                {{ ($data->documenttable->DN_3_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_3_cooperative"
                                                {{ ($data->documenttable->DN_3_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_3_submitted"
                                                {{ ($data->documenttable->DN_3_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_3_RNS" value="{{$data->documenttable->DN_3_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >BIR Registration Form 2303<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_4_individual"
                                                {{ ($data->documenttable->DN_4_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_4_corporation"
                                                {{ ($data->documenttable->DN_4_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_4_cooperative"
                                               {{ ($data->documenttable->DN_4_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_4_submitted"
                                                {{ ($data->documenttable->DN_4_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_4_RNS" value="{{$data->documenttable->DN_4_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Sample Photocopy of BIR Primary Doc. (OR/SI)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_5_individual"
                                              {{ ($data->documenttable->DN_5_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_5_corporation"
                                                {{ ($data->documenttable->DN_5_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_5_cooperative"
                                                {{ ($data->documenttable->DN_5_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_5_submitted"
                                                {{ ($data->documenttable->DN_5_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_5_RNS" value="{{$data->documenttable->DN_5_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Certificate of Tax Exemption<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_6_individual"
                                                {{ ($data->documenttable->DN_6_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_6_corporation"
                                                {{ ($data->documenttable->DN_6_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_6_cooperative"
                                               {{ ($data->documenttable->DN_6_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_6_submitted"
                                                {{ ($data->documenttable->DN_6_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_6_RNS" value="{{$data->documenttable->DN_6_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Certification (Person Authorized to Transact Business)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_7_individual"
                                                {{ ($data->documenttable->DN_7_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"  name="DN_7_corporation"
                                                {{ ($data->documenttable->DN_7_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_7_cooperative"
                                                {{ ($data->documenttable->DN_7_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"  name="DN_7_submitted"
                                                {{ ($data->documenttable->DN_7_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_7_RNS" value="{{$data->documenttable->DN_7_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Photocopy of Valid ID of Authorized Representative(s)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_8_individual"
                                                {{ ($data->documenttable->DN_8_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_8_corporation"
                                                {{ ($data->documenttable->DN_8_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"  name="DN_8_cooperative"
                                                {{ ($data->documenttable->DN_8_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"  name="DN_8_submitted"
                                                {{ ($data->documenttable->DN_8_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_8_RNS" value="{{$data->documenttable->DN_8_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Latest BIR-stamped Audited Financial Statement</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_9_individual"
                                                {{ ($data->documenttable->DN_9_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_9_corporation"
                                                {{ ($data->documenttable->DN_9_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_9_cooperative"
                                                {{ ($data->documenttable->DN_9_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_9_submitted"
                                                {{ ($data->documenttable->DN_9_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_9_RNS" value="{{$data->documenttable->DN_9_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Latest General Information Sheet (GIS)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_10_individual"
                                                {{ ($data->documenttable->DN_10_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_10_corporation"
                                                {{ ($data->documenttable->DN_10_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_10_cooperative"
                                                {{ ($data->documenttable->DN_10_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_10_submitted"
                                                {{ ($data->documenttable->DN_10_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_10_RNS" value="{{$data->documenttable->DN_10_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>      
                                    <tr>
                                        <td style='border:none;'>Additional Document, If Applying for Credit Line</td>
                                    </tr>
                                    <tr>
                                        <td >Credit Application Form<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_11_individual"
                                                {{ ($data->documenttable->DN_11_individual) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"  name="DN_11_corporation"
                                               {{ ($data->documenttable->DN_11_corporation) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_11_cooperative"
                                                {{ ($data->documenttable->DN_11_cooperative) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" name="DN_11_submitted"
                                                {{ ($data->documenttable->DN_11_submitted) ? 'checked' : '' }} >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" name="DN_11_RNS" value="{{$data->documenttable->DN_11_RNS}}" >
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>

                    <div class="modal modal-blur fade" id="remarks" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Add Remarks</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="datagrid-title">Remarks</div>
                            <textarea class="form-control" name="remarks"></textarea>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                            </div>
                          </div>
                        </div>
                      </div>


                    <div class="form-footer" x-data="{ open: false }">
        
                        <div x-show="!open">
                            <a href="javascript:void();" class="btn btn-outline-success w-100" @click="open = ! open" data-bs-toggle="modal" data-bs-target="#remarks">
                                Apply
                            </a>
                        </div>

                        <div x-show="open" class="text-center">
                                                   
                            <h1>Heads Up!</h1>
    
                            <small>Are you sure you want to make this changes?</small>
    
                            <button type="submit" class="btn btn-outline-danger w-100 mt-3">
                                Confirm
                            </button>
    
                            <a href="{{ route('business-partner.show', $data) }}" class="btn btn-success w-100 mt-3">
                                Cancel
                            </a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
