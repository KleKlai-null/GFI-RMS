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

                    <x-form-user-details :user="$data->user" :created="$data->created_at" :updated="$data->updated_at" :status="$data->status" />

                        <div class="hr-text">Customer Details</div>

                        <div class="form-group mb-1 row">
                            <label class="col-2 col-form-label">Customer name</label>
                            <div class="col">
                                <div class="form-control-plaintext">{{ $data->customer_name }}</div>
                            </div>
                        </div>

                        <div class="form-group mb-1 row">
                            <label class="col-2 col-form-label">Contact person</label>
                            <div class="col">
                                <div class="form-control-plaintext">{{ $data->contact_person }}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-2 col-form-label">Phone no.</label>
                            <div class="col">
                                <div class="form-control-plaintext">{{ $data->phone_no }}</div>
                            </div>
                        </div>

                        <div class="hr-text">Item Detail</div>

                        <div class="form-group row mt-1">
                            <label class="col-2 col-form-label">Item no</label>
                            <div class="col">
                                <div class="form-control-plaintext">{{ $data->item_no }}</div>
                            </div>
                        </div>

                        <div class="form-group row mt-1">
                            <label class="col-2 col-form-label">Description</label>
                            <div class="col">
                                <div class="form-control-plaintext">{{ $data->description }}</div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-2">
                                <label class="col-12 col-form-label">MFR serial no.</label>
                            </div>
                            <div class="col-2">
                                <div class="form-control-plaintext">{{ $data->mfr_serial_no }}</div>
                            </div>
                            <div class="col-2">
                                <label class="col-12 col-form-label">Serial no</label>
                            </div>
                            <div class="col-4">
                                <div class="form-control-plaintext">{{ $data->serial_no }}</div>
                            </div>
                        </div>

                        <div class="hr-text">Service Detail</div>

                        <div class="form-group row mt-1">
                            <label class="col-2 col-form-label">Subject</label>
                            <div class="col">
                                <div class="form-control-plaintext">{{ $data->subject }}</div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-2">
                                <label class="col-12 col-form-label">Origin</label>
                            </div>
                            <div class="col-2">
                                <div class="form-control-plaintext">{{ $data->origin }}</div>
                            </div>
                            <div class="col-2">
                                <label class="col-12 col-form-label">Problem type</label>
                            </div>
                            <div class="col-2">
                                <div class="form-control-plaintext">{{ $data->problem_type }}</div>
                            </div>
                            <div class="col-2">
                                <label class="col-12 col-form-label">Assigned to</label>
                            </div>
                            <div class="col-2">
                                <div class="form-control-plaintext">{{ $data->assigned_to }}</div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-2">
                                <label class="col-12 col-form-label">Priority</label>
                            </div>
                            <div class="col-2">
                                <div class="form-control-plaintext">{{ $data->priority }}</div>
                            </div>
                            <div class="col-2">
                                <label class="col-12 col-form-label">Call type</label>
                            </div>
                            <div class="col-2">
                                <div class="form-control-plaintext">{{ $data->call_type }}</div>
                            </div>
                            <div class="col-2">
                                <label class="col-12 col-form-label">Technician</label>
                            </div>
                            <div class="col-2">
                                <div class="form-control-plaintext">{{ $data->technician }}</div>
                            </div>
                        </div>

                        <div class="hr-text"></div>

                        <div class="form-group row mt-1">
                            <label class="col-2 col-form-label">Remarks</label>
                            <div class="col">
                                <div class="form-control-plaintext">{{ $data->remarks }}</div>
                            </div>
                        </div>

                        <div class="form-group row mt-1">
                            <label class="col-2 col-form-label">Resolution</label>
                            <div class="col">
                                <div class="form-control-plaintext">{{ $data->resolution }}</div>
                            </div>
                        </div>

                        <x-signatory-authority :data="$data" />

                        {{-- <div class="hr-text">Signatory Authority</div>
                        <div class="mb-3">
                            <div class="row g-2">
                                <div class="col-2">
                                    <label class="form-label">Noted by</label>
                                    <div class="form-control-plaintext">{{ $data->noted_by }}</div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Prepared by</label>
                                    <div class="form-control-plaintext">{{ $data->prepared_by }}</div>
                                </div>
                                <div class="col-3">
                                    <label class="form-label">Approved by</label>
                                    <div class="form-control-plaintext">{{ $data->approved_by }}</div>
                                </div>
                                <div class="col-2">
                                    <label class="form-label">Checked by</label>
                                    <div class="form-control-plaintext">{{ $data->checked_by }}</div>
                                </div>
                                <div class="col-2">
                                    <label class="form-label">Released by</label>
                                    <div class="form-control-plaintext">{{ $data->released_by }}</div>
                                </div>
                            </div>
                        </div> --}}

                </div>
            </div>

            <x-form-show-approval-department :department="!$approvalDepartments->isEmpty()" :approval="$approvalDepartments" :status="$data->status" :series="$data->document_series_no"/>
        </div>
    </div>
</div>
