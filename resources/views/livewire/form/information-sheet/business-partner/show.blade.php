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
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                        {{-- <div class="card mt-2">
                            <div class="card-body">
                                <div class="row g-6">
                                    <div class="col-2">
                                        <div class="form-label">BP Type</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="Customer" readonly
                                                {{ ($data->bp_type_customer) ? 'checked' : '' }} 
                                                >
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->bp_type_supplier) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Supplier</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Document Purpose</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->document_purpose_new_registration) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->document_purpose_information_update) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Status Update</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->status_update_active) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Active</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->status_update_inactive) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Inactive</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
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
                                    <div class="col-2">
                                        <label class="form-label">Document Number</label>
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0 border-bottom"
                                                    placeholder="Document no." value="{{$data->document_no}}" readonly>
                                            </div>
                                    </div>
                                    <div class="col-2">
                                        <label class="form-label">Date Processed</label>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                                placeholder="Date Processed" value="{{$data->date_processed}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <h4>Primary Information</h4>
                                <div class="row g-6">
                                    <div class="col-8">
                                        <div>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Registered Name" value="{{$data->registered_name}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Trade Name" value="{{$data->trade_name}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Billing Address" value="{{$data->billing_address}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Shipping Address" value="{{$data->shipping_address}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Telephone No." value="{{$data->telephone_no}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Fax No." value="{{$data->fax_no}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Mobile No." value="{{$data->mobile_no}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Email Address" value="{{$data->email_address}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>    
                                    
                                    <div class="col-4">
                                        <div>                             
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Tax ID No." value="{{$data->tax_id_no}}" readonly>
                                                </div>
                                            </label>
                                        </div>
                                    </div>      
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Registration Date" value="{{$data->registration_date}}" readonly>
                                                </div>
                                            </label>                              
                                        </div>
                                    </div>  
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check">
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_corporation) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Corporation</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_partnership) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Partnership</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_government) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Government</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_single_proprietorship) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Single Proprietorship</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->type_of_business_individual_private) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Individual/Private</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business" {{ ($data->type_of_business_others) ? 'checked' : '' }} readonly>
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_php) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">PHP</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_usd) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">USD</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_euro) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">EURO</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_yen) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">YEN</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->currency_gbp) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">GBP</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency" {{ ($data->currency_others) ? 'checked' : '' }} readonly>
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->business_partner_group_trade) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Trade</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->business_partner_group_non_trade) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Non-Trade</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->business_partner_group_related_party) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Related Party</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->business_partner_group_employee) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Employee</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="business_partner_group" {{ ($data->business_partner_group_others) ? 'checked' : '' }} readonly>
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_cash_on_deliveryc) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Cash on Delivery</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_cash_with_orders) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Cash with Order</span>
                                            </label>

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_days_month_end) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Days Month End</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Days Month End" value="{{$data->payment_terms_days_month_end}}" readonly>
                                                </div>
                                            </label> 

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_days_after_delivery) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Days After Delivery</span>
                                            </label>
                                            <label class="form-check" >
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Days After Delivery" value="{{$data->payment_terms_days_after_delivery}}" readonly>
                                                </div>
                                            </label>

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_terms_others) ? 'checked' : '' }} readonly>
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_methods_cash) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Cash</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_methods_check) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Check</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_methods_electronic_bank_transfer) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Electronic Bank Transfer</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->payment_methods_others) ? 'checked' : '' }} readonly>
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
                                            <label class="form-check">
                                            
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Bank Name" value="{{$data->bank_name}}" readonly>
                       
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Bank Address" value="{{$data->bank_address}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Account Name" value="{{$data->account_name}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Account No." value="{{$data->account_no}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
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
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Account Receivable/Payable" value="{{$data->accouts_receivable_payable}}" readonly>
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Down Payment Clearing Account" value="{{$data->down_payment_clearing_account}}" readonly> 
                                                </div>
                                            </label>
                                            <label class="form-check">
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->withholding_tax) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Subject to WTax</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">WTax Codes Allowed</div>
                                        <div>
                                            <label class="form-check">
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
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_capital_goods) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_non_capital_goods) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_services) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_importations) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <br/>
                                        <div class="form-label"></div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_non_taxable) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_zero_rated) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <br/>
                                        <div class="form-label"></div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_exempt) ? 'checked' : '' }} readonly>
                                                <span class="form-check-label">Exepmt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->tax_group_others) ? 'checked' : '' }} readonly>
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
                        </div>   --}}

                        {{$data->certification}}
                        {{-- <div class="card mt-2">
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
                                                    class="form-control  @error('certification_name.' . $value) is-invalid @enderror"
                                                    placeholder="Certification" wire:model="certification_name.{{ $value }}" onkeyup="this.value = this.value.toUpperCase();">
                                                @error('certification_name.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-3">
                                                <input type="text"
                                                    class="form-control @error('organization_certifying_body.' . $value) is-invalid @enderror"
                                                    placeholder="Organization/Certifying"
                                                    wire:model="organization_certifying_body.{{ $value }}" onkeyup="this.value = this.value.toUpperCase();">
                                                @error('organization_certifying_body.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-2">
                                                <input type="date"
                                                    class="form-control @error('certificate_date.' . $value) is-invalid @enderror"
                                                    placeholder="Certification Date" wire:model="certificate_date.{{ $value }}">
                                                @error('certificate_date.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-2">
                                                <input type="date"
                                                    class="form-control @error('expiry_date.' . $value) is-invalid @enderror"
                                                    placeholder="Expiry Date" wire:model="expiry_date.{{ $value }}" onkeyup="this.value = this.value.toUpperCase();">
                                                @error('expiry_date.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
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
                                                    class="form-control  @error('name.' . $value) is-invalid @enderror"
                                                    placeholder="Name" wire:model="name.{{ $value }}" onkeyup="this.value = this.value.toUpperCase();">
                                                @error('name.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-3">
                                                <input type="text"
                                                    class="form-control @error('positionC.' . $value) is-invalid @enderror"
                                                    placeholder="Position"
                                                    wire:model="positionC.{{ $value }}" onkeyup="this.value = this.value.toUpperCase();">
                                                @error('positionC.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-2">
                                                <input type="text"
                                                    class="form-control @error('email_address_contacts.' . $value) is-invalid @enderror"
                                                    placeholder="Email Address" wire:model="email_address_contacts.{{ $value }}">
                                                @error('email_address_contacts.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-2">
                                                <input type="text"
                                                    class="form-control @error('phone_no.' . $value) is-invalid @enderror"
                                                    placeholder="Phone No." wire:model="phone_no.{{ $value }}" onkeyup="this.value = this.value.toUpperCase();">
                                                @error('phone_no.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
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
                                            <input type="text" class="form-control border-0 border-bottom"
                                            wire:model.lazy="remarks_signatory">
                                        </div>
                                        <div class="datagrid-title text-left">Remarks Signatory</div>
                                </div>
                                
                                <div class="row g-6">
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            wire:model.defer="full_name">
                                        </div>
                                        <div class="datagrid-title text-left">Full Name</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            wire:model.defer="position">
                                        </div>
                                        <div class="datagrid-title text-left">Position</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="date" class="form-control border-0 border-bottom"
                                            wire:model.defer="date">
                                        </div>
                                        <div class="datagrid-title text-left">Date</div>
                                    </div>
                                    <div class="col-3">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            wire:model.defer="signature">
                                        </div>
                                        <div class="datagrid-title text-left">Signature</div>
                                    </div>
                                </div>                                             
                            </div>
                        </div> --}}
                        
                        {{-- <div class="card mt-2">
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
                                                        wire:model.defer="operations_SOPN">
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        wire:model.defer="operations_date">
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="operations_status" value="Passed" name="operations_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="operations_status" value="Rejected" name="operations_status">
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
                                                        wire:model.defer="corporate_finance_SOPN">
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        wire:model.defer="corporate_finance_date">
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="corporate_finance_status" value="Passed" name="corporate_finance_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="corporate_finance_status" value="Rejected" name="corporate_finance_status">
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
                                                        wire:model.defer="supply_chain_human_resource_SOPN">
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        wire:model.defer="supply_chain_human_resource_date">
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="supply_chain_human_resource_status" value="Passed" name="supply_chain_human_resource_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="supply_chain_human_resource_status" value="Rejected" name="supply_chain_human_resource_status">
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
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        wire:model.defer="audit_SOPN">
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control border-0 border-bottom"
                                                        wire:model.defer="audit_date">
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="audit_status" value="Passed" name="audit_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="audit_status" value="Rejected" name="audit_status">
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
                                                        wire:model.defer="finance_SOPN">
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        wire:model.defer="finance_date">
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="finance_status" value="Passed" name="finance_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="finance_status" value="Rejected" name="finance_status">
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
                                                        wire:model.defer="system_administrator_SOPN">
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        wire:model.defer="system_administrator_date">
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="system_administrator_status" value="Passed" name="system_administrator_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" wire:model.defer="system_administrator_status" value="Rejected" name="system_administrator_status">
                                                            <span class="form-check-label">Rejected</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="card mt-2">
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-2">
          
                                            <div class="datagrid-content ">
                                                <input type="text" class="form-control border-0 border-bottom"
                                                    placeholder="Document No.">
                                            </div>
                               
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
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >DTI Certificate<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                               >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Articles of Incorporation/Cooperation & by laws</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                             >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >BIR Registration Form 2303<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                              >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                              >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                              >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Sample Photocopy of BIR Primary Doc. (OR/SI)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                             >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                               >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                             >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Certificate of Tax Exemption<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                              >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Certification (Person Authorized to Transact Business)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                             >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Photocopy of Valid ID of Authorized Representative(s)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                               >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                               >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Latest BIR-stamped Audited Financial Statement</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                               >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Latest General Information Sheet (GIS)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                              >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                               >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                               >
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
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0" style="background-color: rgb(236, 236, 236)"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                >
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
