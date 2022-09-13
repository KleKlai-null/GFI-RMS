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
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <label class="form-label required">Department</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('department') is-invalid @enderror"
                                                wire:model="department">
                                        </div>
                                        @error('department')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label required">Memorandum no.</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('memorandum_no') is-invalid @enderror"
                                                wire:model="memorandum_no">
                                        </div>
                                        @error('memorandum_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label required mb-2">Withdrawal slip no</label>
                                        <div>
                                            <input type="text" class="form-control @error('withdrawal_slip_no') is-invalid @enderror" autocomplete="off"
                                                wire:model="withdrawal_slip_no" oninput="this.value = this.value.toUpperCase()">
                                        </div>
                                        @error('withdrawal_slip_no')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="hr-text">Items</div>

                                <div class="mb-3">
                                    <div class="row g-2 text-center">
                                        <div class="col-1">
                                            <label class="form-label">Code</label>
                                        </div>
                                        <div class="col-5">
                                            <label class="form-label">Description</label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-label">Qty</label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-label">Uom</label>
                                        </div>
                                        <div class="col-3">
                                            <label class="form-label">Reason</label>
                                        </div>
                                    </div>
                                    @foreach ($inputs as $key => $value)
                                        <div class="row g-2 mb-2">
                                            <div class="col-1">
                                                <input type="text"
                                                    class="form-control  @error('code.' . $value) is-invalid @enderror"
                                                    placeholder="Code" wire:model="code.{{ $value }}">
                                                @error('code.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-5">
                                                <input type="text"
                                                    class="form-control @error('description.' . $value) is-invalid @enderror"
                                                    placeholder="Description of the product/item"
                                                    wire:model="description.{{ $value }}">
                                                @error('description.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-1">
                                                <input type="number" step="0.0001"
                                                    class="form-control @error('qty.' . $value) is-invalid @enderror"
                                                    placeholder="Qty" wire:model="qty.{{ $value }}">
                                                @error('qty.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-1">
                                                <input type="text"
                                                    class="form-control @error('uom.' . $value) is-invalid @enderror"
                                                    placeholder="Uom" wire:model="uom.{{ $value }}">
                                                @error('uom.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-3">
                                                <input type="text"
                                                    class="form-control @error('reason.' . $value) is-invalid @enderror"
                                                    placeholder="Reason for returning the given items"
                                                    wire:model="reason.{{ $value }}">
                                                @error('reason.' . $value)
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-1">
                                                <button class="btn btn-icon"
                                                    wire:click.prevent="remove({{ $key }})">
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
                                                wire:click.prevent="add({{ $i }})"><svg
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
                            </div>
                            <div class="hr-text">Signatory Authority</div>
                            <div class="mb-3">
                                <div class="row g-2">
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
                            </div>
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


