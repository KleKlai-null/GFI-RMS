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
                                            wire:model="document_series_no" readonly>
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label">Date Processed</label>
                                        <input type="text" class="form-control form-control-flush mt-1"
                                            name="Form control flush" placeholder="Document series no."
                                            wire:model="document_series_no" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <div class="form-label">Document Purpose</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Status Update</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row g-2">
                                            <div class="col-6">
                                                <label class="form-label">Date from</label>
                                            <input class="form-control mb-2" placeholder="Select a date"
                                                id="datepicker-default" value="2020-06-20">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Date to</label>
                                            <div class="input-icon mb-2">
                                                <input class="form-control " placeholder="Select a date"
                                                    id="datepicker-icon" value="2020-06-20">
                                                <span class="input-icon-addon">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        stroke-width="2" stroke="currentColor" fill="none"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <rect x="4" y="5" width="16"
                                                            height="16" rx="2"></rect>
                                                        <line x1="16" y1="3" x2="16"
                                                            y2="7"></line>
                                                        <line x1="8" y1="3" x2="8"
                                                            y2="7"></line>
                                                        <line x1="4" y1="11" x2="20"
                                                            y2="11"></line>
                                                        <line x1="11" y1="15" x2="12"
                                                            y2="15"></line>
                                                        <line x1="12" y1="15" x2="12"
                                                            y2="18"></line>
                                                    </svg>
                                                </span>
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
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Item Class</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Information Update</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-label">Project Item Type</div>
                                        <div>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">New Registration</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
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
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Direct Materials</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Finished Goods</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Merchandise</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">MRO</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Labor</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Landed</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Fixed Asset</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Minor Asset</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Landed</span>
                                                    </label>
                                                    <input type="text" class="form-control" name="example-text-input" placeholder="Others">
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
                                          <input type="email" class="form-control-plaintext" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">UOM Group</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Model/Specification</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Barcode</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Generic Description</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Country of Origin</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-6">
                                    <div class="mb-2 row">
                                        <label class="col-3 col-form-label">Manufacturer</label>
                                        <div class="col">
                                          <input type="email" class="form-control-plaintext" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-2 col-form-label">Receiving Treshold Before Expiry</label>
                                <div class="col">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="subdomain" autocomplete="off">
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
                                        <input type="text" class="form-control" placeholder="subdomain" autocomplete="off">
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
                                        <input type="text" class="form-control" placeholder="subdomain" autocomplete="off">
                                        <span class="input-group-text">
                                          Days
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            
                            <div class="form-label">WTax Liable</div>
                                <div>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">Yes</span>
                                    </label>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="form-check-label">No</span>
                                    </label>
                                </div>

                                <h3 class="card-title">Purchasing Data</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Preferred Vendor</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Preferred Vendor">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Purchasing UoM</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Purchasing UoM">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Packaging UoM</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Packaging UoM">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Items Per Purchase Unit</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Items Per Purchase Unit">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Qty Per Package</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Qty Per Package">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Barcode</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush" placeholder="Barcode">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Country of Origin</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Country of Origin">
                                        </div>
                                    </div>
                                </div>
            
                                <h3 class="card-title">Purchasing VAT Group</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Exempt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Others</span>
                                                <input type="text" class="form-control border-0 border-bottom" placeholder="">
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
                                                placeholder="Sales UoM">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Packaging UoM</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Packaging UoM">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Items Per Sales Unit</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Items Per Sales Unit">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Qty Per Package</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Qty Per Package">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Barcode</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush" placeholder="Barcode">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Country of Origin</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control form-control-flush"
                                                placeholder="Country of Origin">
                                        </div>
                                    </div>
                                </div>
            
                                <h3 class="card-title">Sales VAT Group</h3>
                                <div class="datagrid mb-4">
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Non-Capital Goods 12%</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Services 12%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Importations</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Non-Taxable</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Zero Rated 0%</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-content">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Exempt</span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Others</span>
                                                <input type="text" class="form-control border-0 border-bottom" placeholder="">
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
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="form-check-label">Warehouse</span>
                                                </label>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox">
                                                    <span class="form-check-label">Item Group</span>
                                                </label>
                                                <label class="form-check">
                                                    <input class="form-check-input" type="checkbox">
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
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Standard</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Moving Average</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Batch/Serial</span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
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
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Yes</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">No</span>
                                            </label>
                                            <div class="datagrid-title">Inventory UoM</div>
                                            <div class="datagrid-content">
                                                <input type="text" class="form-control form-control-flush"
                                                    placeholder="Inventory UoM">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Default Warehouses</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" placeholder="">
                                            <input type="text" class="form-control border-0 border-bottom" placeholder="">
                                            <input type="text" class="form-control border-0 border-bottom" placeholder="">
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title card-title">Inventory Level</div>
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="datagrid-title">UoM</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control form-control-flush"
                                                        placeholder="UoM">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="datagrid-title">Minimum</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control form-control-flush"
                                                        placeholder="Minimum">
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="datagrid-title">Maximum</div>
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control form-control-flush"
                                                        placeholder="Maximum">
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
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">None</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">MRP</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Procurement Method</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Buy</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox">
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
                                                            placeholder="Min. Order Qty">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Lead Time (Days)</div>
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control form-control-flush"
                                                            placeholder="Lead Time (Days)">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="datagrid-title">Tolerance (Day)</div>
                                                    <div class="datagrid-content">
                                                        <input type="text" class="form-control form-control-flush"
                                                            placeholder="Tolerance (Day)">
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
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Yes</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">No</span>
                                            </label>
                                        </div>
                                    </div>
            
                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Issue Method</div>
                                        <div class="datagrid-content">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Backflush</span>
                                            </label>
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox">
                                                <span class="form-check-label">Manual</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="datagrid-item">
                                        <div class="datagrid-title">Properties</div>
                                        <div class="datagrid-content">
                                            <input type="text" class="form-control border-0 border-bottom" placeholder="">
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
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">New Registration</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Information Update</span>
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
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">New Registration</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Information Update</span>
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
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">New Registration</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Information Update</span>
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
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">New Registration</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Information Update</span>
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
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">New Registration</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Information Update</span>
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
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Signature Over Printed Name</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-content">
                                                    <input type="text" class="form-control border-0 border-bottom"
                                                        placeholder="">
                                                </div>
                                                <div class="datagrid-title text-center">Date</div>
                                            </div>
                                            <div class="col">
                                                <div class="datagrid-title">Status</div>
                                                <div class="datagrid-content">
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">New Registration</span>
                                                    </label>
                                                    <label class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                        <span class="form-check-label">Information Update</span>
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
                            wire:click.prevent="store" class="btn btn-primary"
                            wire:loading.class="d-none">Create</button>
                    </div>
                    <div wire:loading wire:target="store">
                        Processing Data...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
