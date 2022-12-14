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
            <div class="card mb-3">
                <div class="card-body">
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Document No.</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                    placeholder="Document series no." wire:model.defer="document_series_no" readonly>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Date Processed</div>
                            <div class="datagrid-content">
                                <input type="date" class="form-control border-0" readonly
                                    placeholder="Date Processed" wire:model.defer="date_processed">
                            </div>
                        </div>
                    </div>

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Document Purpose</div>
                            <div class="datagrid-content">
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

                        <div class="datagrid-item">
                            <div class="datagrid-title">Status Update</div>
                            <div class="datagrid-content">
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
                        <div class="datagrid-item">
                            <div class="datagrid-title">Date From</div>
                            <div class="datagrid-content input-icon">
                                </span>
                                <input class="form-control border-0 border-bottom" placeholder="Select a date" id="datepicker-icon-prepend"
                                    type="date" wire:model.defer="date_from">
                            </div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Date To</div>
                            <div class="datagrid-content input-icon">
                                <input class="form-control border-0 border-bottom" placeholder="Select a date" id="datepicker-icon"
                                type="date" wire:model.defer="date_to">
                            </div>
                        </div>
                    </div>

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Type</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="item_type_fix_asset" value="Fixed Asset">
                                    <span class="form-check-label">Fixed Asset</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Class</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="item_class_sales_item" value="Sales Item">
                                    <span class="form-check-label">Sales Item</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Group</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="item_group_fixed_asset" value="Fixed Asset">
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
                                <input type="text" class="form-control border-0 border-bottom" placeholder="Brand" wire:model.defer="item_details_brand">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Model/Specification</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Model/Specification" wire:model.defer="item_details_model">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Generic Description</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Generic Description" wire:model.defer="item_details_generic_description">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Manufacturer</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Manufacturer" wire:model.defer="item_details_manufacturer">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">UoM Group</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="UoM Group" wire:model.defer="item_details_uom_group">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Barcode</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom" placeholder="Barcode" wire:model.defer="item_details_barcode">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Country of Origin</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Country of Origin" wire:model.defer="item_details_country">
                            </div>
                        </div>
                    </div>

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">WTax Liable</div>
                            <div class="datagrid-content">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="wtax_liable_yes" value="Yes">
                                    <span class="form-check-label">Yes</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="wtax_liable_no" value="No">
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
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Preferred Vendor" wire:model.defer="purchasing_data_preferred_vendor">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Purchasing UoM</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Purchasing UoM" wire:model.defer="purchasing_data_purchasing_uom">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Packaging UoM</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Packaging UoM" wire:model.defer="purchasing_data_packaging_uom">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Items Per Purchase Unit</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Items Per Purchase Unit" wire:model.defer="purchasing_data_items_per_purchase_unit">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Qty Per Package</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Qty Per Package" wire:model.defer="purchasing_data_qty_per_package">
                            </div>
                        </div>

                        {{-- <div class="datagrid-item">
                            <div class="datagrid-title">Barcode</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom" placeholder="Barcode" wire:model.defer="purchasing_data_barcode">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Country of Origin</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Country of Origin" wire:model.defer="purchasing_data_country">
                            </div>
                        </div> --}}
                    </div>

                    <h3 class="card-title">Purchasing VAT Group</h3>
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_capital_goods" value="Capital Goods 12%">
                                    <span class="form-check-label">Capital Goods 12%</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_non_capital_goods" value="Non-Capital Goods 12%">
                                    <span class="form-check-label">Non-Capital Goods 12%</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_services" value="Services 12%">
                                    <span class="form-check-label">Services 12%</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_importations" value="Importations">
                                    <span class="form-check-label">Importations</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_non_taxable" value="Non-Taxable">
                                    <span class="form-check-label">Non-Taxable</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_zero_rated" value="Zero Rated 0%">
                                    <span class="form-check-label">Zero Rated 0%</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_exempt" value="Exempt">
                                    <span class="form-check-label">Exempt</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" name="PVG_group_exempt" id="PVG_others">
                                    <span class="form-check-label">Others</span>
                                    <input type="text" class="form-control border-0 border-bottom" placeholder="Others" wire:model.defer="PVG_group_others" id="PVG_input_others">
                                </label>
                            </div>
                        </div>
                    </div>

                    <h3 class="card-title">Sales Data</h3>
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Sales UoM</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Sales UoM" wire:model.defer="sales_data_sales_uom">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Packaging UoM</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Packaging UoM" wire:model.defer="sales_data_packaging_uom">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Items Per Sales Unit</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Items Per Sales Unit" wire:model.defer="sales_data_items_per_sales_unit">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Qty Per Package</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Qty Per Package" wire:model.defer="sales_data_qty_per_packages">
                            </div>
                        </div>

                        {{-- <div class="datagrid-item">
                            <div class="datagrid-title">Barcode</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom" placeholder="Barcode" wire:model.defer="sales_data_barcode">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Country of Origin</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom"
                                    placeholder="Country of Origin" wire:model.defer="sales_data_country">
                            </div>
                        </div> --}}
                    </div>

                    <h3 class="card-title">Sales VAT Group</h3>
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_capital_goods" value="Capital Goods 12%">
                                    <span class="form-check-label">Capital Goods 12%</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_non_capital_goods" value="Non-Capital Goods 12%">
                                    <span class="form-check-label">Non-Capital Goods 12%</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_services" value="Services 12%">
                                    <span class="form-check-label">Services 12%</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_importations" value="Importations">
                                    <span class="form-check-label">Importations</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_non_taxable" value="Non-Taxable">
                                    <span class="form-check-label">Non-Taxable</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_zero_rated" value="Zero Rated 0%">
                                    <span class="form-check-label">Zero Rated 0%</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_exempt" value="Exempt">
                                    <span class="form-check-label">Exempt</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" name="SVG_group" id="SVG_others">
                                    <span class="form-check-label">Others</span>
                                    <input type="text" class="form-control border-0 border-bottom" placeholder="Others" wire:model.defer="SVG_group_others" id="SVG_input_others">
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
                                        <input class="form-check-input" type="checkbox" wire:model.defer="sales_uom_warehouse" value="Warehouse">
                                        <span class="form-check-label">Warehouse</span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:model.defer="sales_uom_item_group" value="Item Group">
                                        <span class="form-check-label">Item Group</span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:model.defer="sales_uom_item_level" value="Item Level">
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
                                            <input class="form-check-input" type="checkbox" wire:model.defer="valuation_method_standard" value="Standard">
                                            <span class="form-check-label">Standard</span>
                                        </label>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:model.defer="valuation_method_moving_average" value="Moving Average">
                                            <span class="form-check-label">Moving Average</span>
                                        </label>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:model.defer="valuation_method_batch_serial" value="Batch/Serial">
                                            <span class="form-check-label">Batch/Serial</span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" wire:model.defer="valuation_method_FIFO" value="FIFO">
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
                                    <input class="form-check-input" type="checkbox" wire:model.defer="manage_inventory_wh_yes" value="Yes">
                                    <span class="form-check-label">Yes</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="manage_inventory_wh_no" value="No">
                                    <span class="form-check-label">No</span>
                                </label>
                                <div class="datagrid-title">Inventory UoM</div>
                                <div class="datagrid-content">
                                    <input type="text" class="form-control border-0 border-bottom"
                                        placeholder="Inventory UoM" wire:model.defer="inventory_uom">
                                </div>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Default Warehouses</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control border-0 border-bottom" placeholder="" wire:model.defer="default_warehouses">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title card-title">Inventory Level</div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="datagrid-title">UoM</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="UoM" wire:model.defer="inventory_level_uom">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="datagrid-title">Minimum</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Minimum" wire:model.defer="inventory_level_minimum">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="datagrid-title">Maximum</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Maximum" wire:model.defer="inventory_level_maximum">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="card-title">Fixed Asset</h3>
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="d-flex flex-column">
                                <div class="col mb-2">
                                    <div class="datagrid-title">Asset Class</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Asset Class" wire:model.defer="fixed_data_asset_class">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Asset Group</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Asset Group" wire:model.defer="fixed_data_asset_group">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Depreciation Group</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Depreciation Group" wire:model.defer="fixed_data_depreciation_group">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="d-flex flex-column">
                                <div class="col mb-2">
                                    <div class="datagrid-title">Inventory No.</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Inventory No." wire:model.defer="fixed_data_inventory_no">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Serial No.</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Serial No." wire:model.defer="fixed_data_serial_no">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Location</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Location" wire:model.defer="fixed_data_location">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="d-flex flex-column">
                                <div class="col mb-2">
                                    <div class="datagrid-title">Technician</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Technician" wire:model.defer="fixed_data_technician">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Employee</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Employee" wire:model.defer="fixed_data_employee">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Capitalization Date</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control border-0 border-bottom"
                                            placeholder="Capitalization Date" wire:model.defer="fixed_data_capitalization_date">
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
                                    <input class="form-check-input" type="checkbox" wire:model.defer="planning_method_none" value="None">
                                    <span class="form-check-label">None</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="planning_method_mrp" value="MRP">
                                    <span class="form-check-label">MRP</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Procurement Method</div>
                            <div class="datagrid-content">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="procurement_method_buy" value="Buy">
                                    <span class="form-check-label">Buy</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="procurement_method_make" value="Make">
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
                                            <input type="text" class="form-control border-0 border-bottom"
                                                placeholder="Min. Order Qty" wire:model.defer="order_method_min_order_qty">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title">Lead Time (Days)</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                                placeholder="Lead Time (Days)" wire:model.defer="order_method_lead_time">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title">Tolerance (Day)</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                                placeholder="Tolerance (Day)" wire:model.defer="order_method_tolerance">
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
                                    <input class="form-check-input" type="checkbox" wire:model.defer="phantom_item_yes" value="Yes">
                                    <span class="form-check-label">Yes</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="phantom_item_no" value="No">
                                    <span class="form-check-label">No</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Issue Method</div>
                            <div class="datagrid-content">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="issue_method_backflush" value="Backflush">
                                    <span class="form-check-label">Backflush</span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="issue_method_manual" value="Manual">
                                    <span class="form-check-label">Manual</span>
                                </label>
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
                            <div class="datagrid-title">1. Property Custodian</div>
                            <div class="datagrid-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                            wire:model.defer="property_custodian_SOPN">
                                        </div>
                                        <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="date" class="form-control border-0 border-bottom"
                                            wire:model.defer="property_custodian_date">
                                        </div>
                                        <div class="datagrid-title text-center">Date</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title">Status</div>
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" wire:model.defer="property_custodian_status" value="Passed" name="property_custodian_status">
                                                <span class="form-check-label">Passed</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" wire:model.defer="property_custodian_status" value="Rejected" name="property_custodian_status">
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
                                                placeholder=""  wire:model.defer="corporate_finance_SOPN">
                                        </div>
                                        <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="date" class="form-control border-0 border-bottom"
                                                placeholder=""  wire:model.defer="corporate_finance_date">
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
                            <div class="datagrid-title">2. General Manager</div>
                            <div class="datagrid-content">
                                <div class="row">
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom"
                                                placeholder="" wire:model.defer="general_manager_SOPN">
                                        </div>
                                        <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="date" class="form-control border-0 border-bottom"
                                                placeholder="" wire:model.defer="general_manager_date">
                                        </div>
                                        <div class="datagrid-title text-center">Date</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title">Status</div>
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" wire:model.defer="general_manager_status" value="Passed" name="general_manager_status">
                                                <span class="form-check-label">Passed</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="radio" wire:model.defer="general_manager_status" value="Rejected" name="general_manager_status">
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
                                                placeholder="" wire:model.defer="audit_SOPN">
                                        </div>
                                        <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="date" class="form-control border-0 border-bottom"
                                                placeholder="" wire:model.defer="audit_date">
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
                                                placeholder="" wire:model.defer="finance_SOPN">
                                        </div>
                                        <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="date" class="form-control border-0 border-bottom"
                                                placeholder="" wire:model.defer="finance_date">
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
                                                placeholder="" wire:model.defer="system_administrator_SOPN">
                                        </div>
                                        <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-content">
                                            <input type="date" class="form-control border-0 border-bottom"
                                                placeholder="" wire:model.defer="system_administrator_date">
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
