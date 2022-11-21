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
