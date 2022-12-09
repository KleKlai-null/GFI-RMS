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
                <div class="col-12 col-md-auto ms-auto d-print-none">
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
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="row g-2">
                                        <div class="col-4">
                                            <div class="datagrid-title">Document No.</div>
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control form-control-flush"
                                                    value="{{$data->document_series_no}}" readonly>
                                            </div>
                                        </div>
                
                                        <div class="col-4">
                                            <div class="datagrid-title">Date Processed</div>
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control form-control-flush"
                                                value="{{$data->date_processed}}" readonly>
                                            </div>
                                        </div>
                
                                        <div class="col-4">
                                            @if ($data->revision)
                                                <h6 class="text-end">Revision Number : <span style="color:red">{{$data->revision}}</span> </h6>
                                                <h6 class="text-end">Updated by : <span style="color:red">{{$data->updated_by}}</span> </h6>
                                            @else
                                                <h6 class="text-end"><span style="color:red">Original Document</span> </h6>
                                            @endif                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-6">
                                    <div class="col-3">
                                        <div class="form-label">BP Type</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Customer" disabled
                                                {{ ($data->bp_type_customer) ? 'checked' : '' }} 
                                                >
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->bp_type_supplier) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Supplier</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">Document Purpose</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->document_purpose_new_registration) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->document_purpose_information_update) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">Status Update</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->status_update_active) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Active</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->status_update_inactive) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Inactive</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="form-label">Date from</label>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" value="{{$data->date_from}}" readonly>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Date to</label>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom" value="{{$data->date_to}}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-2">
                                        <label class="form-label">Document Number</label>
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0 border-bottom"
                                                    placeholder="Document no." value="{{$data->document_series_no}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Date Processed</label>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                                placeholder="Date Processed" value="{{$data->date_processed}}" readonly>
                                        </div>
                                    </div> --}}
                                </div>
                                <h4>Primary Information</h4>
                                <div class="row g-6">
                                    <div class="col-8">
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Registered Name</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Registered Name" value="{{$data->registered_name}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Trade Name</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Trade Name" value="{{$data->trade_name}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Billing Address</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Billing Address" value="{{$data->billing_address}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Shipping Address</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Shipping Address" value="{{$data->shipping_address}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Telephone No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Telephone No." value="{{$data->telephone_no}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Fax No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Fax No." value="{{$data->fax_no}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Mobile No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Mobile No." value="{{$data->mobile_no}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Email Address</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Email Address" value="{{$data->email_address}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>    
                                    
                                    <div class="col-4">
                                        <div>                             
                                            <label class="form-check"><div class="datagrid-title">Tax ID No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Tax ID No." value="{{$data->tax_id_no}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>      
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Registration Date</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Registration Date" value="{{$data->registration_date}}" readonly>
                                                </div>
                                            </label>                              
                                        </div>
                                    </div>  
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Website</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Website" value="{{$data->website}}" readonly>
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_corporation) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Corporation</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_partnership) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Partnership</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_government) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Government</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_single_proprietorship) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Single Proprietorship</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_individual_private) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Individual/Private</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business" {{ ($data->type_of_business_others) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" value="{{$data->type_of_business_others}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Currency</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_php) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">PHP</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_usd) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">USD</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_euro) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">EURO</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_yen) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">YEN</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_gbp) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">GBP</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency" {{ ($data->currency_others) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" value="{{$data->currency_others}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Business Partner Group</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->business_partner_group_trade) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Trade</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->business_partner_group_non_trade) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Non-Trade</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->business_partner_group_related_party) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Related Party</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->business_partner_group_employee) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Employee</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="business_partner_group" {{ ($data->business_partner_group_others) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" value="{{$data->business_partner_group_others}}" readonly>
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_cash_on_deliveryc) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Cash on Delivery</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_cash_with_orders) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Cash with Order</span>
                                            </label>

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_days_month_end) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Days Month End</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Days Month End" value="{{$data->payment_terms_days_month_end}}" readonly>
                                                </div>
                                            </label> 

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_days_after_delivery) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Days After Delivery</span>
                                            </label>
                                            <label class="form-check" >
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Days After Delivery" value="{{$data->payment_terms_days_after_delivery}}" readonly>
                                                </div>
                                            </label>

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_others) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" value="{{$data->payment_terms_others}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Payment Method</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_methods_cash) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Cash</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_methods_check) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Check</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_methods_electronic_bank_transfer) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Electronic Bank Transfer</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_methods_others) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" value="{{$data->payment_methods_others}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Bank Details</div>
                                        <div>
                                            <label class="form-check"><div class="datagrid-title">Bank Name</div>
                                            
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Bank Name" value="{{$data->bank_name}}" readonly>
                       
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Bank Address</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Bank Address" value="{{$data->bank_address}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Account Name</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Account Name" value="{{$data->account_name}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Account No.</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Account No." value="{{$data->account_no}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Swift Code</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Swift Code" value="{{$data->swift_code}}" readonly>
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
                                                        placeholder="Account Receivable/Payable" value="{{$data->accouts_receivable_payable}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Down Payment Clearing Account</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Down Payment Clearing Account" value="{{$data->down_payment_clearing_account}}" readonly> 
                                                </div>
                                            </label>
                                            <label class="form-check"><div class="datagrid-title">Down Payment Interim Account</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Down Payment Interim Account" value="{{$data->donw_payment_interim_account}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">Withholding Tax</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->withholding_tax) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Subject to WTax</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">WTax Codes Allowed</div>
                                        <div>
                                            <label class="form-check">WTax Codes
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="WTax Codes" value="{{$data->wtax_codes_allowed}}" readonly>
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_capital_goods) ? 'checked' : '' }} @disabled(true)>
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_non_capital_goods) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_services) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_importations) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <br/>
                                        <div class="form-label"></div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_non_taxable) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_zero_rated) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <br/>
                                        <div class="form-label"></div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_exempt) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Exepmt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_others) ? 'checked' : '' }} disabled>
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" value="{{$data->tax_group_others}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>  

                        <div class="card mt-2">
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
                                <br/>
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
                                            <input type="text" class="form-control border-0 border-bottom" readonly value="{{$data->remarks_signatory}}">
                                        </div>
                                        <div class="datagrid-title text-left">Remarks Signatory</div>
                                </div>
                                
                                <div class="row g-6">
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            readonly value="{{$data->full_name}}">
                                        </div>
                                        <div class="datagrid-title text-left">Full Name</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            readonly value="{{$data->position}}">
                                        </div>
                                        <div class="datagrid-title text-left">Position</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            readonly value="{{$data->date}}">
                                        </div>
                                        <div class="datagrid-title text-left">Date</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            readonly value="{{$data->signature}}">
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
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->operations_SOPN}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->operations_date}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->operations_status === 'Passed') ? 'checked' : '' }} disabled>
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->operations_status === 'Rejected') ? 'checked' : '' }} disabled>
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
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->corporate_finance_SOPN}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->corporate_finance_date}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->corporate_finance_status === 'Passed') ? 'checked' : '' }} @disabled(true)>
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->corporate_finance_status === 'Rejected') ? 'checked' : '' }} @disabled(true)>
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
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->supply_chain_human_resource_SOPN}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->supply_chain_human_resource_date}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->supply_chain_human_resource_status === 'Passed') ? 'checked' : '' }} @disabled(true)>
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->supply_chain_human_resource_status === 'Rejected') ? 'checked' : '' }} @disabled(true)>
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
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->audit_SOPN}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->audit_date}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->audit_status === 'Passed') ? 'checked' : '' }} @disabled(true)>
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->audit_status === 'Rejected') ? 'checked' : '' }} @disabled(true)>
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
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->finance_SOPN}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->finance_date}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->finance_status === 'Passed') ? 'checked' : '' }} @disabled(true)>
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->finance_status === 'Rejected') ? 'checked' : '' }} @disabled(true)>
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
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->system_administrator_SOPN}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        value="{{$data->approvalrouting->system_administrator_date}}" readonly>
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->system_administrator_status === 'Passed') ? 'checked' : '' }} @disabled(true)>
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" {{ ($data->approvalrouting->system_administrator_status === 'Rejected') ? 'checked' : '' }} @disabled(true)>
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
                                                    placeholder="Document No." value="{{$data->documenttable->document_no_page_2}}" readonly>
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
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_1_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_1_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_1_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_1_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_1_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >DTI Certificate<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_2_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_2_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_2_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_2_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_2_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Articles of Incorporation/Cooperation & by laws</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_3_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_3_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_3_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_3_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_3_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >BIR Registration Form 2303<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_4_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_4_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                               {{ ($data->documenttable->DN_4_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_4_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_4_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Sample Photocopy of BIR Primary Doc. (OR/SI)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                              {{ ($data->documenttable->DN_5_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_5_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_5_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_5_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_5_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Certificate of Tax Exemption<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_6_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_6_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                               {{ ($data->documenttable->DN_6_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_6_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_6_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Certification (Person Authorized to Transact Business)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_7_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_7_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_7_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_7_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_7_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Photocopy of Valid ID of Authorized Representative(s)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_8_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_8_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_8_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_8_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_8_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Latest BIR-stamped Audited Financial Statement</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_9_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_9_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_9_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_9_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_9_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Latest General Information Sheet (GIS)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_10_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_10_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_10_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_10_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_10_RNS}}" readonly>
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
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_11_individual) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                               {{ ($data->documenttable->DN_11_corporation) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                {{ ($data->documenttable->DN_11_cooperative) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                {{ ($data->documenttable->DN_11_submitted) ? 'checked' : '' }} @disabled(true)>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" value="{{$data->documenttable->DN_11_RNS}}" readonly>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>

                        @if ($data->remarks)
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4>Remarks</h4>
                                <div class="datagrid-content">
                                    <h6>{{$data->remarks}}</h6>
                                </div>
                            </div>
                        </div>                           
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
