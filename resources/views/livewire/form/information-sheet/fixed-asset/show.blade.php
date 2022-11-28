<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{$title}}
                    </h2>
                </div>
            </div>
        </div>

    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Document No.</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                    value="{{$data->document_series_no}}">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Date Processed</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                value="{{$data->date_processed}}">
                            </div>
                        </div>
                    </div>

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Document Purpose</div>
                            <div class="datagrid-content">
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

                        <div class="datagrid-item">
                            <div class="datagrid-title">Status Update</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" {{ ($data->status_update_active) ? 'checked' : '' }}>
                                    <span class="form-check-label">Active</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" {{ ($data->status_update_inactive) ? 'checked' : '' }}>
                                    <span class="form-check-label">Inactive</span>
                                </label>
                            </div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Date From</div>
                            <div class="datagrid-content input-icon">
                                <input class="form-control" value="{{$data->date_from}}" type="text">
                            </div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Date To</div>
                            <div class="datagrid-content input-icon">
                                <input class="form-control " value="{{$data->date_to}}" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Type</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" {{ ($data->item_type_fix_asset) ? 'checked' : '' }}>
                                    <span class="form-check-label">Fixed Asset</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Class</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" {{ ($data->item_class_sales_item) ? 'checked' : '' }}>
                                    <span class="form-check-label">Sales Item</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Group</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" {{ ($data->item_group_fixed_asset) ? 'checked' : '' }}>
                                    <span class="form-check-label">Fixed Asset</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <h3 class="card-title">Item Details</h3>
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Brand</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush" value="{{$data->item_details_brand}}">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Model/Specification</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                value="{{$data->item_details_model}}">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Generic Description</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                value="{{$data->item_details_generic_description}}">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Manufacturer</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                value="{{$data->item_details_manufacturer}}">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">UoM Group</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                value="{{$data->item_details_uom_group}}">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Barcode</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush" value="{{$data->item_details_barcode}}">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Country of Origin</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                value="{{$data->item_details_country}}">
                            </div>
                        </div>
                    </div>

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">WTax Liable</div>
                            <div class="datagrid-content">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" {{ ($data->wtax_liable_yes) ? 'checked' : '' }}>
                                    <span class="form-check-label">Yes</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" {{ ($data->wtax_liable_no) ? 'checked' : '' }}>
                                    <span class="form-check-label">No</span>
                                </label>
                            </div>
                        </div>
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
                            <div class="datagrid-title">Sales UoM</div>
                            <div class="datagrid-content">
                                <div class="datagrid-content">
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" {{ ($data->sales_uom_warehouse) ? 'checked' : '' }}>
                                        <span class="form-check-label">Warehouse</span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" {{ ($data->sales_uom_item_group) ? 'checked' : '' }}>
                                        <span class="form-check-label">Item Group</span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" {{ ($data->sales_uom_item_level) ? 'checked' : '' }}>
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

                    <h3 class="card-title">Fixed Data</h3>
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="d-flex flex-column">
                                <div class="col mb-2">
                                    <div class="datagrid-title">Asset Class</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_asset_class}}">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Asset Group</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_asset_group}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Depreciation Group</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_depreciation_group}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="d-flex flex-column">
                                <div class="col mb-2">
                                    <div class="datagrid-title">Inventory No.</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_inventory_no}}">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Serial No.</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_serial_no}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Location</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_location}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="d-flex flex-column">
                                <div class="col mb-2">
                                    <div class="datagrid-title">Technician</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_technician}}">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Employee</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_employee}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Capitalization Date</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                        value="{{$data->fixed_data_capitalization_date}}">
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
                    </div>

                    
                    <h3 class="card-title text-center form-fieldset">***** APPROVAL ROUTING *****</h3>
                    <div class="datagrid mb-3">
                        <div class="datagrid-item">
                            <div class="datagrid-title">1. Property Custodian</div>
                            <div class="datagrid-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            value="{{$data->approvalrouting->property_custodian_SOPN}}">
                                        </div>
                                        <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            value="{{$data->approvalrouting->property_custodian_date}}">
                                        </div>
                                        <div class="datagrid-title text-center">Date</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title">Status</div>
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" {{ ($data->approvalrouting->property_custodian_status === 'Passed') ? 'checked' : '' }}>
                                                <span class="form-check-label">Passed</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" {{ ($data->approvalrouting->property_custodian_status === 'Rejected') ? 'checked' : '' }}>
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
                                            <input type="text" class="form-control border-0 border-bottom"
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
                            <div class="datagrid-title">2. General Manager</div>
                            <div class="datagrid-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            value="{{$data->approvalrouting->general_manager_SOPN}}">
                                        </div>
                                        <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            value="{{$data->approvalrouting->general_manager_date}}">
                                        </div>
                                        <div class="datagrid-title text-center">Date</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title">Status</div>
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" {{ ($data->approvalrouting->general_manager_status === 'Passed') ? 'checked' : '' }}>
                                                <span class="form-check-label">Passed</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" {{ ($data->approvalrouting->general_manager_status === 'Rejected') ? 'checked' : '' }}>
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
                                            <input type="text" class="form-control border-0 border-bottom"
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
                                            <input type="text" class="form-control border-0 border-bottom"
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
