<div>
    <div class="card mt-2">
        <div class="card-body">
          <h3 class="card-title text-center">AUTHORIZED SIGNATORIES</h3>
          
          <div class="row g-2 text-center">
                <div class="col-3">
                    <label class="form-label @error('prepared_by') text-danger @enderror">Prepared
                        by</label>
                    <div>
                        <input type="text" class="form-control form-control-flush text-center" wire:model="prepared_by"
                            placeholder="Name of the person" onkeyup="this.value = this.value.toUpperCase();">
                        <input type="text" class="form-control form-control-flush text-center" wire:model="prepared_by_position"
                            placeholder="Position of the person" onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                    @error('prepared_by')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-3">
                    <label class="form-label @error('checked_by') text-danger @enderror">Checked
                        by</label>
                    <div>
                        <input type="text" class="form-control form-control-flush text-center" wire:model="checked_by"
                            placeholder="Name of the person" onkeyup="this.value = this.value.toUpperCase();">
                        <input type="text" class="form-control form-control-flush text-center" wire:model="checked_by_position"
                            placeholder="Position of the person" onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                    @error('checked_by')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-3">
                    <label class="form-label @error('noted_by') text-danger @enderror">Noted
                        by</label>
                    <div>
                        <input type="text" class="form-control form-control-flush text-center" wire:model="noted_by"
                            placeholder="Name of the person" onkeyup="this.value = this.value.toUpperCase();">
                        <input type="text" class="form-control form-control-flush text-center" wire:model="noted_by_position"
                            placeholder="Position of the person" onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                    @error('noted_by')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-3">
                    <label class="form-label @error('approved_by') text-danger @enderror">Approved
                        by</label>
                    <div>
                        <input type="text" class="form-control form-control-flush text-center" wire:model="approved_by"
                            placeholder="Name of the person" onkeyup="this.value = this.value.toUpperCase();">
                        <input type="text" class="form-control form-control-flush text-center" wire:model="approved_by_position"
                            placeholder="Position of the person" onkeyup="this.value = this.value.toUpperCase();">
                    </div>
                    @error('approved_by')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-2">
        <div class="card-body">
          <h3 class="card-title text-center">WAREHOUSE SIGNATORIES</h3>
          
            <div class="mb-3">
                <div class="row g-2 text-center">
                    <div class="col-4">
                        <label class="form-label @error('requested_by') text-danger @enderror">Requested by</label>
                        <div>
                            <input type="text" class="form-control form-control-flush text-center" wire:model="requested_by"
                                placeholder="Name of the person" onkeyup="this.value = this.value.toUpperCase();">
                            <input type="text" class="form-control form-control-flush text-center" wire:model="requested_by_position"
                                placeholder="Position of the person" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                        @error('released_by')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label class="form-label @error('released_by') text-danger @enderror">Released by</label>
                        <div>
                            <input type="text" class="form-control form-control-flush text-center" wire:model="released_by"
                                placeholder="Name of the person" onkeyup="this.value = this.value.toUpperCase();">
                            <input type="text" class="form-control form-control-flush text-center" wire:model="released_by_position"
                                placeholder="Position of the person" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                        @error('released_by')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label class="form-label @error('received_by') text-danger @enderror">Received by</label>
                        <div>
                            <input type="text" class="form-control form-control-flush text-center" wire:model="received_by"
                                placeholder="Name of the person" onkeyup="this.value = this.value.toUpperCase();">
                            <input type="text" class="form-control form-control-flush text-center" wire:model="received_by_position"
                                placeholder="Position of the person" onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                        @error('received_by')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

