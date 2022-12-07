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
                                        <input type="text" class="form-control border-0 border-bottom"
                                            name="Form control flush" placeholder="Document series no."
                                            wire:model="document_series_no" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Date Processed</label>
                                        <input type="text" class="form-control border-0 border-bottom"
                                            name="Form control flush"
                                            wire:model="date_processed" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="form-label">Document Purpose</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="document_purpose_new_registration">
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="document_purpose_information_update">
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Status Update</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="status_update_active">
                                                <span class="form-check-label">Active</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="status_update_inactive">
                                                <span class="form-check-label">Inactive</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="form-label">Date from</label>
                                            <input class="form-control mb-2" placeholder="Select a date"
                                                id="datepicker-default" type="date" wire:model.defer="date_from">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Date to</label>
                                            <div class="input-icon mb-2">
                                                <input class="form-control " placeholder="Select a date"
                                                    id="datepicker-icon" type="date" wire:model.defer="date_to">
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
                                                <input class="form-check-input" type="checkbox" wire:model.defer="item_type_items">
                                                <span class="form-check-label">Items</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="item_type_labor">
                                                <span class="form-check-label">Labor</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Item Class</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="item_class_inventory_item">
                                                <span class="form-check-label">Inventory Item</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="item_class_sales_item">
                                                <span class="form-check-label">Sales Item</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="item_class_purchasing_item">
                                                <span class="form-check-label">Purchasing Item</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Project Item Type</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="project_type_materials">
                                                <span class="form-check-label">Materials</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="project_type_equipment">
                                                <span class="form-check-label">Equipment</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="project_type_labor_and_equipment">
                                                <span class="form-check-label">Labor and Equipment</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="project_type_labor">
                                                <span class="form-check-label">Labor</span>
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
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="item_group_DM">
                                                        <span class="form-check-label">Direct Materials</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="item_group_FG">
                                                        <span class="form-check-label">Finished Goods</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="item_group_MI">
                                                        <span class="form-check-label">Merchandise</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="item_group_MRO">
                                                        <span class="form-check-label">MRO</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="item_group_labor">
                                                        <span class="form-check-label">Labor</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="item_group_landed">
                                                        <span class="form-check-label">Landed</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="item_group_FA">
                                                        <span class="form-check-label">Fixed Asset</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="item_group_MA">
                                                        <span class="form-check-label">Minor Asset</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="item_group" id="IG_others">
                                                        <span class="form-check-label">Others</span>
                                                    </label>
                                                    <input type="text" class="form-control border-0 border-bottom" placeholder="Others" id="IG_input_others" wire:model.defer="item_group_others">
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
                                          <input type="text" class="form-control border-0 border-bottom" wire:model.defer="brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">UOM Group</label>
                                        <div class="col">
                                          <input type="text" class="form-control border-0 border-bottom" wire:model.defer="uom_group">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Model/Specification</label>
                                        <div class="col">
                                          <input type="text" class="form-control border-0 border-bottom" wire:model.defer="model_specification">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Barcode</label>
                                        <div class="col">
                                          <input type="text" class="form-control border-0 border-bottom" wire:model.defer="barcode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Generic Description</label>
                                        <div class="col">
                                          <input type="text" class="form-control border-0 border-bottom" wire:model.defer="generic_description">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Country of Origin</label>
                                        <div class="col">
                                          <input type="text" class="form-control border-0 border-bottom" wire:model.defer="country_of_origin">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Manufacturer</label>
                                        <div class="col">
                                          <input type="text" class="form-control border-0 border-bottom" wire:model.defer="manufacturer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-2 col-form-label">Receiving Treshold Before Expiry</label>
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" autocomplete="off" wire:model.defer="receiving_treshold">
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
                                        <input type="text" class="form-control" autocomplete="off" wire:model.defer="recall_treshold">
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
                                        <input type="text" class="form-control" autocomplete="off" wire:model.defer="shelf_life">
                                        <span class="input-group-text">
                                          Days
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="form-label">WTax Liable</div>
                                <div>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:model.defer="wtax_liable_yes">
                                        <span class="form-check-label">Yes</span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" wire:model.defer="wtax_liable_no">
                                        <span class="form-check-label">No</span>
                                    </label>
                                </div>

                                <h3 class="card-title">Purchasing Data</h3>
                                <div class="datagrid mb-5">
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
                                </div>
            
                                <h3 class="card-title">Purchasing VAT Group</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_capital_goods">
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_non_capital_goods">
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_services">
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_importations">
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_non_taxable">
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_zero_rated">
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="PVG_group_exempt">
                                                <span class="form-check-label">Exempt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="PVG_item_group" id="PVG_item_others">
                                                <span class="form-check-label">Others</span>
                                                <input type="text" class="form-control border-0 border-bottom" placeholder="Others" id="PVG_item_input_others" wire:model.defer="PVG_group_others">
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
                                </div>
            
                                <h3 class="card-title">Sales VAT Group</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_capital_goods">
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_non_capital_goods">
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_services">
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_importations">
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_non_taxable">
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_zero_rated">
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="SVG_group_exempt">
                                                <span class="form-check-label">Exempt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="SVG_item_group" id="SVG_item_others">
                                                <span class="form-check-label">Others</span>
                                                <input type="text" class="form-control border-0 border-bottom" placeholder="Others" id="SVG_item_input_others" wire:model.defer="SVG_group_others">
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
                                                    <input class="form-check-input" type="checkbox" wire:model.defer="set_accounts_warehouse">
                                                    <span class="form-check-label">Warehouse</span>
                                                </label>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" wire:model.defer="set_accounts_item_group">
                                                    <span class="form-check-label">Item Group</span>
                                                </label>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox" wire:model.defer="set_accounts_item_level">
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
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="valuation_method_standard">
                                                        <span class="form-check-label">Standard</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="valuation_method_moving_average">
                                                        <span class="form-check-label">Moving Average</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="valuation_method_batch_serial">
                                                        <span class="form-check-label">Batch/Serial</span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox" wire:model.defer="valuation_method_FIFO">
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
                                                <input class="form-check-input" type="checkbox" wire:model.defer="manage_inventory_wh_yes">
                                                <span class="form-check-label">Yes</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="manage_inventory_wh_no">
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
                                            <input type="text" class="form-control border-0 border-bottom" wire:model.defer="default_warehouses">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title card-title">Inventory Level (QTY)</div>
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="datagrid-title">Required</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="Required" wire:model.defer="inventory_level_uom">
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

                                <h3 class="card-title">Planning Data</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Planning Method</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="planning_method_none">
                                                <span class="form-check-label">None</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="planning_method_mrp">
                                                <span class="form-check-label">MRP</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Procurement Method</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="procurement_method_buy">
                                                <span class="form-check-label">Buy</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="procurement_method_make">
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
                                                <input class="form-check-input" type="checkbox" wire:model.defer="phantom_item_yes">
                                                <span class="form-check-label">Yes</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="phantom_item_no">
                                                <span class="form-check-label">No</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Issue Method</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="issue_method_backflush">
                                                <span class="form-check-label">Backflush</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" wire:model.defer="issue_method_manual">
                                                <span class="form-check-label">Manual</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Properties</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" wire:model.defer="properties">
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
                                    <div class="datagrid-title">2. Supply Chain:</div>
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


                    <div class="form-footer">
                        <button type="button" onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                            wire:click.prevent="create" class="btn btn-primary"
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
