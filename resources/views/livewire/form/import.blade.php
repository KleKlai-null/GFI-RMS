<div>
    <!-- Modal -->
    <div class="modal modal-blur fade" id="import-data" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">
                        File will be processed on the background a notication will be prompt once the file successfully
                    processed.
                    </p>

                    <form class="dropzone" method="POST" action="#">
                        <div class="fallback">
                            <input wire:model="file" type="file"  class="form-control @error('file')
                            is-invalid
                            @enderror"/>
                        </div>
                        @error('file')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" wire:click="Upload">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
