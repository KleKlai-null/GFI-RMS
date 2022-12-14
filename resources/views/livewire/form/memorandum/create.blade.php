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

                            <div class="hr-text">Employee Details</div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label required @error('id_no') text-danger @enderror">Id no</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter employee id no"
                                    wire:model="id_no" onkeyup="this.value = this.value.toUpperCase();">
                                    @error('id_no')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label required @error('name_of_employee') text-danger @enderror">Name of employee</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter employee full name"
                                    wire:model="name_of_employee" onkeyup="this.value = this.value.toUpperCase();">
                                    @error('name_of_employee')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label required @error('department') text-danger @enderror">Department</label>
                                <div class="col">
                                    <input type="text" name="input-mask" class="form-control form-control-flush mt-1" placeholder="Enter department" autocomplete="off"
                                    wire:model="department" onkeyup="this.value = this.value.toUpperCase();">
                                    @error('department')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label required @error('section') text-danger @enderror">Section</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter section"
                                    wire:model="section" onkeyup="this.value = this.value.toUpperCase();">
                                    @error('section')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="hr-text">Asset Details</div>

                            <div class="row g-2">
                                <div class="col-2">
                                    <label class="col-12 col-form-label @error('asset_serial_no') text-danger @enderror">Code</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter code"
                                    wire:model="asset_code" onkeyup="this.value = this.value.toUpperCase();">
                                    @error('asset_code')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label @error('asset_type') text-danger @enderror">Type</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter Fixed/Minor"
                                    wire:model="asset_type">
                                    @error('asset_type')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-2">
                                    <label class="col-12 col-form-label @error('asset_serial_no') text-danger @enderror">Serial no.</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter serial no"
                                        wire:model="asset_serial_no" onkeyup="this.value = this.value.toUpperCase();">
                                    @error('asset_serial_no')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label @error('asset_value') text-danger @enderror">Value</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Enter value"
                                        wire:model="asset_value" onkeyup="this.value = this.value.toUpperCase();">
                                    @error('asset_value')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label class="col-2 col-form-label required @error('asset_description') text-danger @enderror">Description</label>
                                <div class="col">
                                    <textarea class="form-control form-control-flush mt-1" data-bs-toggle="autosize" placeholder="Enter item description" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 56px;"
                                    wire:model="asset_description" onkeyup="this.value = this.value.toUpperCase();"></textarea>
                                    @error('asset_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="hr-text d-print-none">ACKNOWLEGMENT STATEMENT</div>
                            <p class="m-3 text-justify d-print-none">This is to acknowledge that I am accountable of the above stated item(s). By signing and dating this document, I full understood that I will pay or replace the same item(s) in case of loss or damage due to my negligence or recklessness. I am aware that the listed item(s) is/are owned and a property of the above stated company (Business Unit), which in the event of my resgination, separation, or transfer, I will voluntarily turnover it to the company.</p>
                            
                            <div class="row g-2 text-center">
                                <div class="col-12">
                                    <div>
                                        <input type="text" class="form-control form-control-flush text-center" wire:model="accountable_person"
                                            placeholder="Name of the person" onkeyup="this.value = this.value.toUpperCase();">
                                        <input type="text" class="form-control form-control-flush text-center" wire:model="accountable_person_position"
                                            placeholder="Position of the person" onkeyup="this.value = this.value.toUpperCase();">
                                    </div>
                                    @error('accountable_person')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <x-form-create-authorized-signatories/>
                            
                            {{-- <div class="hr-text">Authorized Signatories</div>
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-2">
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
                                    <div class="col-2">
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
                                    <div class="col-2">
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
                                    <div class="col-2">
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
                                    <div class="col-2">
                                        <label
                                            class="form-label required @error('released_by') text-danger @enderror">Released
                                            by</label>
                                        <div>
                                            <input type="text" class="form-control form-control-flush"
                                                wire:model="released_by" placeholder="Name of the person" required>
                                        </div>
                                        @error('released_by')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-2">
                                        <label
                                            class="form-label required @error('received_by') text-danger @enderror">Received
                                            by</label>
                                        <div>
                                            <input type="text" class="form-control form-control-flush"
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
