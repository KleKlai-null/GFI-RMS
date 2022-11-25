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
        {{-- {{$data->approvalroutings}} --}}
        <div class="container-xl">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Document No.</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                    placeholder="Document series no.">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Date Processed</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                    placeholder="Date Processed">
                            </div>
                        </div>
                    </div>

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Document Purpose</div>
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

                        <div class="datagrid-item">
                            <div class="datagrid-title">Status Update</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Active</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-label">Inactive</span>
                                </label>
                            </div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Date From</div>
                            <div class="datagrid-content input-icon">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                            rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                </span>
                                <input class="form-control" placeholder="Select a date" id="datepicker-icon-prepend"
                                    value="2020-06-20">
                            </div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Date To</div>
                            <div class="datagrid-content input-icon">
                                <input class="form-control " placeholder="Select a date" id="datepicker-icon"
                                    value="2020-06-20">
                                <span class="input-icon-addon">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <rect x="4" y="5" width="16" height="16"
                                            rx="2"></rect>
                                        <line x1="16" y1="3" x2="16" y2="7"></line>
                                        <line x1="8" y1="3" x2="8" y2="7"></line>
                                        <line x1="4" y1="11" x2="20" y2="11"></line>
                                        <line x1="11" y1="15" x2="12" y2="15"></line>
                                        <line x1="12" y1="15" x2="12" y2="18"></line>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Type</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" >
                                    <span class="form-check-label">Fixed Asset</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Class</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" >
                                    <span class="form-check-label">Sales Item</span>
                                </label>
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Item Group</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" type="checkbox" >
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
                                <input type="text" class="form-control form-control-flush" placeholder="Brand">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Model/Specification</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                    placeholder="Model/Specification">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Generic Description</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                    placeholder="Generic Description">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">Manufacturer</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                    placeholder="Manufacturer">
                            </div>
                        </div>

                        <div class="datagrid-item">
                            <div class="datagrid-title">UoM Group</div>
                            <div class="datagrid-content">
                                <input type="text" class="form-control form-control-flush"
                                    placeholder="UoM Group">
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

                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="datagrid-title">WTax Liable</div>
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
                            <div class="datagrid-title">Sales UoM</div>
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

                    <h3 class="card-title">Fixed Data</h3>
                    <div class="datagrid mb-4">
                        <div class="datagrid-item">
                            <div class="d-flex flex-column">
                                <div class="col mb-2">
                                    <div class="datagrid-title">Asset Class</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                            placeholder="Asset Class">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Asset Group</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                            placeholder="Asset Group">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Depreciation Group</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                            placeholder="Depreciation Group">
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
                                            placeholder="Inventory No.">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Serial No.</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                            placeholder="Serial No.">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Location</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                            placeholder="Location">
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
                                            placeholder="Technician">
                                    </div>
                                </div>
                                <div class="col mb-2">
                                    <div class="datagrid-title">Employee</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                            placeholder="Employee">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="datagrid-title">Capitalization Date</div>
                                    <div class="datagrid-content">
                                        <input type="text" class="form-control form-control-flush"
                                            placeholder="Capitalization Date">
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
                            <div class="datagrid-title">2. General Manager</div>
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

        </div>
    </div>
</div>
