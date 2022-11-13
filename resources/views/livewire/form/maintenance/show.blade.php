<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        @if(!empty($data->cm_document_series_no))
                            {{ $data->cm_document_series_no }}
                        @else 
                            {{ $data->document_series_no }}
                        @endif
                    </h2>
                </div>
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <x-form-show-header :approval="$approvalDepartments->isEmpty()" 
                            :archive="Str::lower($data->status) != 'archive'" 
                            :departments="$listDepartments"
                            :redirect="$redirect"
                            permission="create mro"
                            :data="$data"
                            />
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Base info</h3>
                    <div class="card-actions">
                        <span class="status status-{{ $data->status == 'Open' ? 'green' : 'red' }}">
                            {{ $data->status }}
                        </span>
                    </div>
                </div>
                <div class="card-body mb-3">

                    <div class="hr-text">Form Information</div>

                    <div class="datagrid">
                        <div class="datagrid-item">
                            <div class="datagrid-title">Profit Center</div>
                            <div class="datagrid-content">{{ $data->profit_center }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Sub Profit Center</div>
                            <div class="datagrid-content">{{ $data->sub_profit_center }}</div>
                        </div>
                        <div class="datagrid-item">
                            <div class="datagrid-title">Cost Center</div>
                            <div class="datagrid-content">{{ $data->cost_center }}</div>
                        </div>
                    </div>

                    <x-form-item-information :items="$data->items" type="uom" />

                    <x-signatory-authority :data="$data" />

                    <x-form-user-details :user="$data->user" :created="$data->created_at" :updated="$data->updated_at" :status="$data->status" />
                        
                </div>
            </div>

            <x-form-show-approval-department :department="!$approvalDepartments->isEmpty()" :approval="$approvalDepartments" :status="$data->status" :series="$data->document_series_no"/>
        </div>
    </div>
</div>
