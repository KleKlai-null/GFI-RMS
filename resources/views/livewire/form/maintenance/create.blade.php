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
                                <label class="form-label">Document Series No.</label>
                                <input type="text" class="form-control form-control-flush mt-1" name="Form control flush" placeholder="Document series no." wire:model="document_series_no">
                            </div>
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-4">
                                        <label class="form-label required">Profit center</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('profit_center') is-invalid @enderror"
                                                wire:model="profit_center" onkeyup="this.value = this.value.toUpperCase();">
                                        </div>
                                        @error('profit_center')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label required">Sub profit center</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('sub_profit_center') is-invalid @enderror"
                                                wire:model="sub_profit_center" onkeyup="this.value = this.value.toUpperCase();">
                                        </div>
                                        @error('sub_profit_center')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label class="form-label required">Cost center</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('cost_center') is-invalid @enderror"
                                                wire:model="cost_center" onkeyup="this.value = this.value.toUpperCase();">
                                        </div>
                                        @error('cost_center')
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
                                            <label class="form-label">Remarks</label>
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
                                                    class="form-control @error('remarks.' . $value) is-invalid @enderror"
                                                    placeholder="Remarks for the given product/items"
                                                    wire:model="remarks.{{ $value }}">
                                                @error('remarks.' . $value)
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

                            <x-form-create-authorized-signatories/>

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
