<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                    <small class="text-danger">* </small><small>Indicates required field</small>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Document Series No.</label>
                                <div class="col">
                                    <div class="form-control-plaintext">{{ $document_series_no }}</div>
                                </div>
                            </div>

                            <div class="hr-text">Customer Details</div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label required @error('customer_name') text-danger @enderror">Customer name</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter customer name (e.g Juan Dela Cruz)"
                                    wire:model="customer_name">
                                    @error('customer_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label required @error('contact_person') text-danger @enderror">Contact person</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter person name"
                                    wire:model="contact_person">
                                    @error('contact_person')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label required @error('phone_no') text-danger @enderror">Phone no.</label>
                                <div class="col">
                                    <input type="text" name="input-mask" class="form-control form-control-flush mt-1" data-mask="+63 000-000-0000" data-mask-visible="true" placeholder="+63 000-000-0000" autocomplete="off"
                                    wire:model="phone_no">
                                    @error('phone_no')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="hr-text">Item Details</div>

                            <div class="form-group row mt-1">
                                <label class="col-2 col-form-label required @error('item_no') text-danger @enderror">Item no</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter item no"
                                    wire:model="item_no">
                                    @error('item_no')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label class="col-2 col-form-label required @error('description') text-danger @enderror">Description</label>
                                <div class="col">
                                    <textarea class="form-control form-control-flush mt-1" data-bs-toggle="autosize" placeholder="Enter item description" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"
                                    wire:model="description"></textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-2">
                                    <label class="col-12 col-form-label @error('mfr_serial_no') text-danger @enderror">MFR serial no.</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter MFR"
                                        wire:model="mfr_serial_no">
                                    @error('mfr_serial_no')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label @error('serial_no') text-danger @enderror">Serial no</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter serial no"
                                        wire:model="serial_no">
                                    @error('serial_no')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="hr-text">Service Details</div>

                            <div class="form-group row mt-1">
                                <label class="col-2 col-form-label required @error('subject') text-danger @enderror">Subject</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter subject"
                                    wire:model="subject">
                                    @error('subject')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-2">
                                    <label class="col-12 col-form-label required @error('origin') text-danger @enderror">Origin</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter Origin"
                                        wire:model="origin">
                                    @error('origin')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label required @error('problem_type') text-danger @enderror">Problem type</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter problem type"
                                        wire:model="problem_type">
                                    @error('problem_type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label required @error('assigned_to') text-danger @enderror">Assigned to</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Assigned person"
                                        wire:model="assigned_to">
                                    @error('assigned_to')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-2">
                                    <label class="col-12 col-form-label required @error('priority') text-danger @enderror">Priority</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="High, Medium, Low"
                                        wire:model="priority">
                                    @error('priority')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label @error('call_type') text-danger @enderror">Call type</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter call type"
                                        wire:model="call_type">
                                    @error('call_type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label @error('technician') text-danger @enderror">Technician</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Technician name"
                                        wire:model="technician">
                                    @error('technician')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="hr-text"></div>

                            <div class="form-group row mt-1">
                                <label class="col-2 col-form-label @error('remarks') text-danger @enderror">Remarks</label>
                                <div class="col">
                                    <textarea class="form-control form-control-flush mt-1" data-bs-toggle="autosize" placeholder="Enter service call remarks or leave it blank" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"
                                    wire:model="remarks"></textarea>
                                    @error('remarks')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label class="col-2 col-form-label @error('resolution') text-danger @enderror">Resolution</label>
                                <div class="col">
                                    <textarea class="form-control form-control-flush mt-1" data-bs-toggle="autosize" placeholder="Enter service call resolution or leave it blank" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"
                                    wire:model="resolution"></textarea>
                                    @error('resolution')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <x-form-create-authorized-signatories/>

                            {{-- <div class="hr-text">Authorized Signatories</div>
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-3">
                                        <label
                                            class="form-label required @error('prepared_by') text-danger @enderror">Prepared
                                            by</label>
                                        <div>
                                            <input type="text" class="form-control form-control-flush"
                                                wire:model="prepared_by" placeholder="Name of the person" required>
                                        </div>
                                        @error('prepared_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <label
                                            class="form-label required @error('checked_by') text-danger @enderror">Checked
                                            by</label>
                                        <div>
                                            <input type="text" class="form-control form-control-flush"
                                                wire:model="checked_by" placeholder="Name of the person" required>
                                        </div>
                                        @error('checked_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <label
                                            class="form-label required @error('noted_by') text-danger @enderror">Noted
                                            by</label>
                                        <div>
                                            <input type="text" class="form-control form-control-flush"
                                                wire:model="noted_by" placeholder="Name of the person" required>
                                        </div>
                                        @error('noted_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-3">
                                        <label
                                            class="form-label required @error('approved_by') text-danger @enderror">Approved
                                            by</label>
                                        <div>
                                            <input type="text" class="form-control form-control-flush"
                                                wire:model="approved_by" placeholder="Name of the person" required>
                                        </div>
                                        @error('approved_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row g-2 text-center">
                                    <div class="col-6">
                                        <label class="form-label required @error('released_by') text-danger @enderror">Released by</label>
                                        <div>
                                            <input type="text" class="form-control form-control-flush text-center"
                                                wire:model="released_by" placeholder="Name of the person" required>
                                        </div>
                                        @error('released_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label required @error('received_by') text-danger @enderror">Received by</label>
                                        <div>
                                            <input type="text" class="form-control form-control-flush text-center"
                                                wire:model="received_by" placeholder="Name of the person" required>
                                        </div>
                                        @error('received_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-footer">
                                <button type="button"
                                    onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
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
    </div>
</div>
