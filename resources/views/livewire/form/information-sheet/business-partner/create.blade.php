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
                        <div class="card mt-2">
                            <div class="card-body">
                                <div class="row mb-6">
                                    <div class="row g-2">
                                        <div class="col-4">
                                            <label class="form-label">Document No.</label>
                                            <input type="text" class="form-control border-0 "
                                                name="Form control flush" placeholder="Document series no."
                                                wire:model="document_series_no" readonly>
                                        </div>
                                        <div class="col-4">
                                            <label class="form-label">Date Processed</label>
                                            <input type="text" class="form-control border-0 "
                                                name="Form control flush"
                                                wire:model="date_processed" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-6">
                                    <div class="col-3">
                                        <div class="form-label">BP Type</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="bp_type_customer" value="Customer">
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="bp_type_supplier" value="Supplier">
                                                <span class="form-check-label">Supplier</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">Document Purpose</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="document_purpose_new_registration" value="New Registration">
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="document_purpose_information_update" value="Information Update">
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">Status Update</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="status_update_active" value="Active">
                                                <span class="form-check-label">Active</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="status_update_inactive" value="Inactive">
                                                <span class="form-check-label">Inactive</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="form-label">Date from</label>
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom"
                                                    wire:model.defer="date_from">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Date to</label>
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom"
                                                    wire:model.defer="date_to">
                                                </div>
                                            </div>
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
                                                        placeholder="Registered Name" wire:model.defer="registered_name">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Trade Name" wire:model.defer="trade_name">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Billing Address" wire:model.defer="billing_address">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Shipping Address" wire:model.defer="shipping_address">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Telephone No." wire:model.defer="telephone_no">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Fax No." wire:model.defer="fax_no">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Mobile No." wire:model.defer="mobile_no">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Email Address" wire:model.defer="email_address">
                                                </div>
                                            </label>
                                        </div>
                                    </div>    
                                    
                                    <div class="col-4">
                                        <div>                             
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Tax ID No." wire:model.defer="tax_id_no">
                                                </div>
                                            </label>
                                        </div>
                                    </div>      
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom"
                                                        placeholder="Registration Date" wire:model.defer="registration_date">
                                                </div>
                                            </label>                              
                                        </div>
                                    </div>  
                                    <div class="col-4">
                                        <div>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Website" wire:model.defer="website">
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
                                                <input class="form-check-input" type="checkbox" wire:model.defer="type_of_business_corporation" value="Corporation">
                                                <span class="form-check-label">Corporation</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="type_of_business_partnership" value="Partnership">
                                                <span class="form-check-label">Partnership</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="type_of_business_government" value="Government">
                                                <span class="form-check-label">Government</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="type_of_business_single_proprietorship" value="Single Proprietorship">
                                                <span class="form-check-label">Single Proprietorship</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="type_of_business_individual_private" value="Individual/Private">
                                                <span class="form-check-label">Individual/Private</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="type_of_business" id="TB_others">
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" wire:model.defer="type_of_business_others" id="TB_input_others">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Currency</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="currency_php" value="PHP">
                                                <span class="form-check-label">PHP</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="currency_usd" value="USD">
                                                <span class="form-check-label">USD</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="currency_euro" value="EURO" >
                                                <span class="form-check-label">EURO</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="currency_yen" value="YEN">
                                                <span class="form-check-label">YEN</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="currency_gbp" value="GBP">
                                                <span class="form-check-label">GBP</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="currency" id="Currency_others">
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" wire:model.defer="currency_others" id="Currency_input_others">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label">Business Partner Group</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="business_partner_group_trade" value="Trade" name="business_partner_group">
                                                <span class="form-check-label">Trade</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="business_partner_group_non_trade" value="Non-Trade" name="business_partner_group">
                                                <span class="form-check-label">Non-Trade</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="business_partner_group_related_party" value="Related Party" name="business_partner_group">
                                                <span class="form-check-label">Related Party</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="business_partner_group_employee" value="Employee" name="business_partner_group">
                                                <span class="form-check-label">Employee</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="business_partner_group" id="BP_others">
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" wire:model.defer="business_partner_group_others" id="BP_input_others">
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
                                                <input class="form-check-input" type="checkbox" wire:model.defer="payment_terms_cash_on_delivery" value="Cash on Delivery">
                                                <span class="form-check-label">Cash on Delivery</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="payment_terms_cash_with_orders" value="Cash with Order">
                                                <span class="form-check-label">Cash with Order</span>
                                            </label>

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_terms_days_month_end" id="PT_DME">
                                                <span class="form-check-label">Days Month End</span>
                                            </label>
                                            <label class="form-check" id="PT_label_DME">
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Days Month End" wire:model.defer="payment_terms_days_month_end" id="PT_input_DME">
                                                </div>
                                            </label> 

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_terms_days_after_delivery" id="PT_DAD">
                                                <span class="form-check-label">Days After Delivery</span>
                                            </label>
                                            <label class="form-check" id="PT_label_DAD">
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Days After Delivery" wire:model.defer="payment_terms_days_after_delivery" id="PT_input_DAD">
                                                </div>
                                            </label>

                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_terms_others" id="PT_Others">
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check" id="PT_label_Others">
                                                <div class="datagrid-content col-5">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" wire:model.defer="payment_terms_others" id="PT_input_Others">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Payment Method</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="payment_methods_cash" value="Cash">
                                                <span class="form-check-label">Cash</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="payment_methods_check" value="Check">
                                                <span class="form-check-label">Check</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="payment_methods_electronic_bank_transfer" value="Electronic Bank Transfer">
                                                <span class="form-check-label">Electronic Bank Transfer</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="payment_methods" id="PM_Others">
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" wire:model.defer="payment_methods_others" id="PM_input_Others">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Bank Details</div>
                                        <div>
                                            <label class="form-check">
                                                {{-- <div class="datagrid-content"> --}}
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Bank Name" wire:model.defer="bank_name">
                                                {{-- </div> --}}
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Bank Address" wire:model.defer="bank_address">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Account Name" wire:model.defer="account_name">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Account No." wire:model.defer="account_no">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Swift Code" wire:model.defer="swift_code">
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
                                                        placeholder="Account Receivable/Payable" wire:model.defer="accouts_receivable_payable">
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Down Payment Clearing Account" wire:model.defer="down_payment_clearing_account"> 
                                                </div>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Down Payment Interim Account" wire:model.defer="donw_payment_interim_account">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-label">Withholding Tax</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="withholding_tax" value="Subject to WTax" name="withholding_tax">
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
                                                        placeholder="WTax Codes" wire:model.defer="wtax_codes_allowed">
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
                                                <input class="form-check-input" type="checkbox" wire:model.defer="tax_group_capital_goods" value="Capital Goods 12%">
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="tax_group_non_capital_goods" value="Non-Capital Goods 12%">
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-label"></div>
                                        <br/>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="tax_group_services" value="Services 12%">
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="tax_group_importations" value="Importations">
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <br/>
                                        <div class="form-label"></div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="tax_group_non_taxable" value="Non-Taxable">
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="tax_group_zero_rated" value="Zero Rated 0%">
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <br/>
                                        <div class="form-label"></div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="tax_group_exempt" value="Exepmt">
                                                <span class="form-check-label">Exepmt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="tax_group" id="TG_Others">
                                                <span class="form-check-label">Others</span>
                                            </label>
                                            <label class="form-check">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Others" wire:model.defer="tax_group_others" id="TG_input_Others">
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
                                                    placeholder="Certification Name" wire:model="certification_name.{{ $value }}">
                                                @error('certification_name.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-3">
                                                <input type="text"
                                                    class="form-control @error('organization_certifying_body.' . $value) is-invalid @enderror"
                                                    placeholder="Organization/Certifying"
                                                    wire:model="organization_certifying_body.{{ $value }}">
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
                                                    placeholder="Expiry Date" wire:model="expiry_date.{{ $value }}">
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
                                                    placeholder="Name" wire:model="name.{{ $value }}">
                                                @error('name.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-3">
                                                <input type="text"
                                                    class="form-control @error('positionC.' . $value) is-invalid @enderror"
                                                    placeholder="Position"
                                                    wire:model="positionC.{{ $value }}">
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
                                                    placeholder="Phone No." wire:model="phone_no.{{ $value }}">
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
                                            wire:model.defer="remarks_signatory">
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
                                                            <input class="form-check-input" type="radio" wire:model.defer="operations_status" value="Passed" name="operations_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" wire:model.defer="operations_status" value="Rejected" name="operations_status">
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
                                                            <input class="form-check-input" type="radio" wire:model.defer="corporate_finance_status" value="Passed" name="corporate_finance_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" wire:model.defer="corporate_finance_status" value="Rejected" name="corporate_finance_status">
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
                                                            <input class="form-check-input" type="radio" wire:model.defer="supply_chain_human_resource_status" value="Passed" name="supply_chain_human_resource_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" wire:model.defer="supply_chain_human_resource_status" value="Rejected" name="supply_chain_human_resource_status">
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
                                                        wire:model.defer="audit_SOPN">
                                                    </div>
                                                    <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-content">
                                                        <input type="date" class="form-control border-0 border-bottom"
                                                        wire:model.defer="audit_date">
                                                    </div>
                                                    <div class="datagrid-title text-center">Date</div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Status</div>
                                                    <div class="datagrid-content">
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" wire:model.defer="audit_status" value="Passed" name="audit_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" wire:model.defer="audit_status" value="Rejected" name="audit_status">
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
                                                            <input class="form-check-input" type="radio" wire:model.defer="finance_status" value="Passed" name="finance_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" wire:model.defer="finance_status" value="Rejected" name="finance_status">
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
                                                            <input class="form-check-input" type="radio" wire:model.defer="system_administrator_status" value="Passed" name="system_administrator_status">
                                                            <span class="form-check-label">Passed</span>
                                                        </label>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="radio" wire:model.defer="system_administrator_status" value="Rejected" name="system_administrator_status">
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
                                        {{-- <label class="form-check"> --}}
                                            <div class="datagrid-content ">
                                                <input type="text" class="form-control border-0 border-bottom"
                                                    placeholder="Document No." wire:model.defer="document_no_page_2" readonly>
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
                                                wire:model.defer="DN_1_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_1_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_1_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_1_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_1_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >DTI Certificate<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_2_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_2_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_2_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_2_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_2_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Articles of Incorporation/Cooperation & by laws</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_3_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_3_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_3_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_3_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_3_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >BIR Registration Form 2303<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_4_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_4_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_4_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_4_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_4_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Sample Photocopy of BIR Primary Doc. (OR/SI)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_5_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_5_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_5_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_5_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_5_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Certificate of Tax Exemption<span style="color:red">*</span></td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_6_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_6_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_6_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_6_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_6_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Certification (Person Authorized to Transact Business)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_7_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_7_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_7_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_7_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_7_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Photocopy of Valid ID of Authorized Representative(s)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_8_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_8_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_8_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_8_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_8_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Latest BIR-stamped Audited Financial Statement</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_9_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_9_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_9_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_9_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_9_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >Latest General Information Sheet (GIS)</td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_10_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_10_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_10_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_10_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_10_RNS">
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
                                                wire:model.defer="DN_11_individual">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_11_corporation">
                                            </div>
                                        </td>
                                        <td style="background-color: rgb(236, 236, 236)">
                                            <div class="datagrid-content">
                                                <input type="checkbox"
                                                wire:model.defer="DN_11_cooperative">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="checkbox" 
                                                wire:model.defer="DN_11_submitted">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control border-0"
                                                wire:model.defer="DN_11_RNS">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>

                        <div class="form-footer">
                            <button type="button" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                wire:click="create" class="btn btn-primary"
                                wire:loading.class="d-none">Create</button>
                        </div>
                        <div wire:loading wire:target="create">
                            Processing Data...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
