<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        {{ $data->document_series_no }}
                    </h2>
                </div>
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <x-form-show-header :approval="$approvalDepartments->isEmpty()" 
                            :archive="Str::lower($data->status) != 'archive'" 
                            :departments="$listDepartments"
                            :redirect="$redirect"
                            :data="$data"
                            />
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="card-title">Base info</h3>
                </div>
                <div class="card-body">

                        <div class="hr-text">EMPLOYEE DETAILS</div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">ID Number</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" value="{{ $data->id_no }}">
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Name of Employee</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" value="{{ $data->name_of_employee }}"/>
                                </div>
                            </div>

                            <div class="form-group mb-1 row">
                                <label class="col-2 col-form-label">Department</label>
                                <div class="col">
                                    <input type="text" name="input-mask" class="form-control form-control-flush mt-1" value="{{ $data->department }}"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 col-form-label">Section</label>
                                <div class="col">
                                    <input type="text" class="form-control form-control-flush mt-1" value="{{ $data->section }}"/>
                                </div>
                            </div>

                            <div class="hr-text">ASSET DETAILS</div>

                            <div class="row g-2">
                                <div class="col-2">
                                    <label class="col-12 col-form-label">Code</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" value="{{ $data->asset_code }}"/>
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label">Type</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control form-control-flush mt-1" value="{{ $data->asset_type }}"/>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-2">
                                    <label class="col-12 col-form-label">Serial Number</label>
                                </div>
                                <div class="col-2">
                                    <input type="text" class="form-control form-control-flush mt-1" value="{{ $data->asset_serial_no }}"/>
                                </div>
                                <div class="col-2">
                                    <label class="col-12 col-form-label">Value</label>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control form-control-flush mt-1" value="{{ $data->asset_value }}"/>
                                </div>
                            </div>

                            <div class="form-group row mt-1">
                                <label class="col-2 col-form-label">Description</label>
                                <div class="col">
                                    <p class="mt-2">{{ $data->asset_description }}</p>
                                </div>
                            </div>

                            <x-signatory-authority :data="$data" />
                            


                    <x-form-user-details :user="$data->user" :created="$data->created_at" :updated="$data->updated_at" :status="$data->status" />

                </div>
            </div>

            <x-form-show-approval-department :department="!$approvalDepartments->isEmpty()" :approval="$approvalDepartments" :status="$data->status" :series="$data->document_series_no"/>
        </div>
    </div>
</div>
