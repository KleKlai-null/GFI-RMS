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
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <label class="form-label">Document No.</label>
                                        <input type="text" class="form-control form-control-flush mt-1"
                                            name="Form control flush" placeholder="Document series no."
                                            readonly value="{{$data->document_series_no}}">
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Date Processed</label>
                                        <input type="text" class="form-control form-control-flush mt-1"
                                            name="Form control flush" placeholder="Document series no."
                                            readonly value="{{$data->date_processed}}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="form-label">Document Purpose</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->document_purpose_new_registration) ? 'checked' : '' }}>
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->document_purpose_information_update) ? 'checked' : '' }}>
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Status Update</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->status_update_active) ? 'checked' : '' }}>
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->status_update_inactive) ? 'checked' : '' }}>
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="form-label">Date from</label>
                                            <input class="form-control mb-2" placeholder="Select a date"
                                                id="datepicker-default" value="{{$data->date_from}}" type="text">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Date to</label>
                                            <div class="input-icon mb-2">
                                                <input class="form-control " placeholder="Select a date"
                                                    id="datepicker-icon" value="{{$data->date_to}}" type="text">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="form-label">Item Type</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->item_type_new_registration) ? 'checked' : '' }}>
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->item_type_information_update) ? 'checked' : '' }}>
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Item Class</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->item_class_new_registration) ? 'checked' : '' }}>
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->item_class_information_update) ? 'checked' : '' }}>
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Project Item Type</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->project_type_new_registration) ? 'checked' : '' }}>
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->project_type_information_update) ? 'checked' : '' }}>
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-12">
                                        <div class="row g-2">
                                            <div class="form-label">Item Group</div>
    
                                            <div class="col-4">
                                                <div>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_DM) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Direct Materials</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_FG) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Finished Goods</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_MI) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Merchandise</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_MRO) ? 'checked' : '' }}>
                                                        <span class="form-check-label">MRO</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_labor) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Labor</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_landed) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Landed</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_FA) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Fixed Asset</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_MA) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Minor Asset</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->item_group_others) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Others</span>
                                                    </label>
                                                    <input type="text" class="form-control" name="example-text-input" placeholder="Others" value="{{$data->item_group_others}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="hr-text">Item's Details</div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Brand</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" value="{{$data->brand}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">UOM Group</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" value="{{$data->uom_group}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Model/Specification</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" value="{{$data->model_specification}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Barcode</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" value="{{$data->barcode}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Generic Description</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" value="{{$data->generic_description}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Country of Origin</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" value="{{$data->country_of_origin}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Manufacturer</label>
                                        <div class="col">
                                          <input type="text" class="form-control-plaintext" value="{{$data->manufacturer}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-2 col-form-label">Receiving Treshold Before Expiry</label>
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" value="{{$data->receiving_treshold}}">
                                        <span class="input-group-text">
                                          Days
                                        </span>
                                    </div>
                                </div>
                            </div>  
                            <div class="mb-3 row">
                                <label class="col-2 col-form-label">Recall Treshold Before Expiry</label>
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" value="{{$data->recall_treshold}}">
                                        <span class="input-group-text">
                                          Days
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            <div class="mb-3 row">
                                <label class="col-2 col-form-label">Shelf Life</label>
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" value="{{$data->shelf_life}}">
                                        <span class="input-group-text">
                                          Days
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="form-label">WTax Liable</div>
                                <div>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" {{ ($data->wtax_liable_yes) ? 'checked' : '' }}>
                                        <span class="form-check-label">Yes</span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" {{ ($data->wtax_liable_no) ? 'checked' : '' }}>
                                        <span class="form-check-label">No</span>
                                    </label>
                                </div>

                                <h3 class="card-title">Purchasing Data</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Preferred Vendor</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->purchasing_data_preferred_vendor}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Purchasing UoM</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->purchasing_data_purchasing_uom}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Packaging UoM</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->purchasing_data_packaging_uom}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Items Per Purchase Unit</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->purchasing_data_items_per_purchase_unit}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Qty Per Package</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->purchasing_data_qty_per_package}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Barcode</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush" value="{{$data->purchasing_data_barcode}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Country of Origin</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->purchasing_data_country}}">
                                        </div>
                                    </div>
                                </div>
            
                                <h3 class="card-title">Purchasing VAT Group</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->PVG_group_capital_goods) ? 'checked' : '' }}>
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->PVG_group_non_capital_goods) ? 'checked' : '' }}>
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->PVG_group_services) ? 'checked' : '' }}>
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->PVG_group_importations) ? 'checked' : '' }}>
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->PVG_group_non_taxable) ? 'checked' : '' }}>
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->PVG_group_zero_rated) ? 'checked' : '' }}>
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->PVG_group_exempt) ? 'checked' : '' }}>
                                                <span class="form-check-label">Exempt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->PVG_group_others) ? 'checked' : '' }}>
                                                <span class="form-check-label">Others</span>
                                                <input type="text" class="form-control border-0 border-bottom" value="{{$data->PVG_group_others}}">
                                            </label>
                                        </div>
                                    </div>
                                </div>
            
                                <h3 class="card-title">Sales Data</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Sales UoM</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->sales_data_sales_uom}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Packaging UoM</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->sales_data_packaging_uom}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Items Per Sales Unit</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->sales_data_items_per_sales_unit}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Qty Per Package</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->sales_data_qty_per_packages}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Barcode</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush" value="{{$data->sales_data_barcode}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Country of Origin</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                            value="{{$data->sales_data_country}}">
                                        </div>
                                    </div>
                                </div>
            
                                <h3 class="card-title">Sales VAT Group</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->SVG_group_capital_goods) ? 'checked' : '' }}>
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->SVG_group_non_capital_goods) ? 'checked' : '' }}>
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->SVG_group_services) ? 'checked' : '' }}>
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->SVG_group_importations) ? 'checked' : '' }}>
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->SVG_group_non_taxable) ? 'checked' : '' }}>
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->SVG_group_zero_rated) ? 'checked' : '' }}>
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->SVG_group_exempt) ? 'checked' : '' }}>
                                                <span class="form-check-label">Exempt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" {{ ($data->SVG_group_others) ? 'checked' : '' }}>
                                                <span class="form-check-label">Others</span>
                                                <input type="text" class="form-control border-0 border-bottom" value="{{$data->SVG_group_others}}">
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="card-title">Inventory Data</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Set G/L Accounts by</div>
                                        <div class="datagrid-content">
                                            <div class="datagrid-content">
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" {{ ($data->set_accounts_warehouse) ? 'checked' : '' }}>
                                                    <span class="form-check-label">Warehouse</span>
                                                </label>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" {{ ($data->set_accounts_item_group) ? 'checked' : '' }}>
                                                    <span class="form-check-label">Item Group</span>
                                                </label>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" {{ ($data->set_accounts_item_level) ? 'checked' : '' }}>
                                                    <span class="form-check-label">Item Level</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Valuation Method</div>
                                        <div class="datagrid-content">
                                            <div class="row">
                                                <div class="col">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->valuation_method_standard) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Standard</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->valuation_method_moving_average) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Moving Average</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->valuation_method_batch_serial) ? 'checked' : '' }}>
                                                        <span class="form-check-label">Batch/Serial</span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" {{ ($data->valuation_method_FIFO) ? 'checked' : '' }}>
                                                        <span class="form-check-label">FIFO</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Manage Inventory by WH</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->manage_inventory_wh_yes) ? 'checked' : '' }}>
                                                <span class="form-check-label">Yes</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->manage_inventory_wh_no) ? 'checked' : '' }}>
                                                <span class="form-check-label">No</span>
                                            </label>
                                            <div class="datagrid-title">Inventory UoM</div>
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control form-control-flush"
                                                value="{{$data->inventory_uom}}">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Default Warehouses</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" value="{{$data->default_warehouses}}">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title card-title">Inventory Level</div>
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="datagrid-title">UoM</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control form-control-flush"
                                                    value="{{$data->inventory_level_uom}}">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="datagrid-title">Minimum</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control form-control-flush"
                                                    value="{{$data->inventory_level_minimum}}">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="datagrid-title">Maximum</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control form-control-flush"
                                                    value="{{$data->inventory_level_maximum}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h3 class="card-title">Planning Data</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Planning Method</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->planning_method_none) ? 'checked' : '' }}>
                                                <span class="form-check-label">None</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->planning_method_mrp) ? 'checked' : '' }}>
                                                <span class="form-check-label">MRP</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Procurement Method</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->procurement_method_buy) ? 'checked' : '' }}>
                                                <span class="form-check-label">Buy</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->procurement_method_make) ? 'checked' : '' }}>
                                                <span class="form-check-label">Make</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Order Method</div>
                                        <div class="datagrid-content">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="datagrid-title">Min. Order Qty</div>
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control form-control-flush"
                                                            placeholder="Min. Order Qty" value="{{$data->order_method_min_order_qty}}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Lead Time (Days)</div>
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control form-control-flush"
                                                            placeholder="Lead Time (Days)" value="{{$data->order_method_lead_time}}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Tolerance (Day)</div>
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control form-control-flush"
                                                            placeholder="Tolerance (Day)" value="{{$data->order_method_tolerance}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <h3 class="card-title">Production Data</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Phantom Item</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->phantom_item_yes) ? 'checked' : '' }}>
                                                <span class="form-check-label">Yes</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" {{ ($data->phantom_item_no) ? 'checked' : '' }}>
                                    <input class="form-check-input" type="checkbox" >
                                                <span class="form-check-label">No</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Issue Method</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->issue_method_backflush) ? 'checked' : '' }}>
                                                <span class="form-check-label">Backflush</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" {{ ($data->issue_method_manual) ? 'checked' : '' }}>
                                                <span class="form-check-label">Manual</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Properties</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" value="{{$data->properties}}">
                                        </div>
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
                                                    value="{{$data->approvalrouting->operations_SOPN}}">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom"
                                                    value="{{$data->approvalrouting->operations_date}}">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->operations_status === 'Passed') ? 'checked' : '' }}>
                                                        <span class="form-check-label">Passed</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->operations_status === 'Rejected') ? 'checked' : '' }}>
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
                                                    value="{{$data->approvalrouting->corporate_finance_SOPN}}">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom"
                                                    value="{{$data->approvalrouting->corporate_finance_date}}">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->corporate_finance_status === 'Passed') ? 'checked' : '' }}>
                                                        <span class="form-check-label">Passed</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->corporate_finance_status === 'Rejected') ? 'checked' : '' }}>
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
                                                    value="{{$data->approvalrouting->supply_chain_human_resource_SOPN}}">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                    value="{{$data->approvalrouting->supply_chain_human_resource_date}}">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->supply_chain_human_resource_status === 'Passed') ? 'checked' : '' }}>
                                                        <span class="form-check-label">Passed</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->supply_chain_human_resource_status === 'Rejected') ? 'checked' : '' }}>
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
                                                    value="{{$data->approvalrouting->audit_SOPN}}">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                    value="{{$data->approvalrouting->audit_date}}">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->audit_status === 'Passed') ? 'checked' : '' }}>
                                                        <span class="form-check-label">Passed</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->audit_status === 'Rejected') ? 'checked' : '' }}>
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
                                                    value="{{$data->approvalrouting->finance_SOPN}}">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom"
                                                    value="{{$data->approvalrouting->finance_date}}">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->finance_status === 'Passed') ? 'checked' : '' }}>
                                                        <span class="form-check-label">Passed</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->finance_status === 'Rejected') ? 'checked' : '' }}>
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
                                                    value="{{$data->approvalrouting->system_administrator_SOPN}}">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="date" class="form-control border-0 border-bottom"
                                                    value="{{$data->approvalrouting->system_administrator_date}}">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->system_administrator_status === 'Passed') ? 'checked' : '' }}>
                                                        <span class="form-check-label">Passed</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="radio" {{ ($data->approvalrouting->system_administrator_status === 'Rejected') ? 'checked' : '' }}>
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
                </div>
            </div>
        </div>
    </div>
</div>
