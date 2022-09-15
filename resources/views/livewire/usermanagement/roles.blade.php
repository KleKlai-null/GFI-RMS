<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        User role
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-3 col-form-label pt-0">Roles</label>
                                
                                <div class="col">
                                    <div>
                                        @foreach ($roles as $role)
                                            <label class="form-check form-check-inline">
                                                {{-- type="checkbox" {{ (in_array($role->name, $data->roles->pluck('name')->toArray())) ? 'checked' : '' }} --}}
                                                <input id="role-{{$loop->index}}" 
                                                class="form-check-input" 
                                                wire:model="selected_roles.{{ $role->name }}" 
                                                value="{{$loop->index}}" 
                                                type="checkbox">
                                                <span class="form-check-label">{{ ucwords($role->name) }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <hr>

                            {{-- <div class="form-group row">
                                <label class="col-3 col-form-label pt-0">Permissions</label>
                                <div class="col">
                                    <div>
                                        <label class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" name="radios-inline">
                                          <span class="form-check-label">Admin</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" name="radios-inline">
                                          <span class="form-check-label">MI</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                          <input class="form-check-input" type="checkbox" name="radios-inline">
                                          <span class="form-check-label">MRO</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="radios-inline">
                                            <span class="form-check-label">DM</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="radios-inline">
                                            <span class="form-check-label">FG</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="radios-inline">
                                            <span class="form-check-label">FA</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="radios-inline">
                                            <span class="form-check-label">MA</span>
                                        </label>
                                        <label class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="radios-inline">
                                            <span class="form-check-label">MR</span>
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary" wire:click.prevent='save'>Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
