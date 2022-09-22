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
                            permission="create fa"
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

                    <div class="hr-text">Form Information</div>

                    <div class="datagrid">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Department</div>
                            <div class="datagrid-content">{!! $data->department !!}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Memorandum No.</div>
                            <div class="datagrid-content">{!! $data->mr_no !!}</div>
                        </div>
                    </div>

                    <x-signatory-authority :data="$data" />
                    <x-form-item-information :items="$data->items" type="serial_no"/>
                </div>
            </div>

            <x-form-show-approval-department :department="!$approvalDepartments->isEmpty()" :approval="$approvalDepartments" :status="$data->status" :series="$data->document_series_no"/>
        </div>
    </div>
</div>
