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
                        <x-form-show-header :approval="false" 
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

                        <div class="hr-text">Form Information</div>

                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Department</div>
                                <div class="datagrid-content">{!! $data->department !!}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Memorandum no.</div>
                                <div class="datagrid-content">{!! $data->mr_no !!}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Form Type</div>
                                <div class="datagrid-content">{!! $data->withdrawal_form !!}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Withdrawal slip no</div>
                                <div class="datagrid-content">{!! $data->withdrawal_slip_no !!}</div>
                            </div>
                        </div>

                        <div class="hr-text">Signatory Authority</div>

                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">Noted by</div>
                                <div class="datagrid-content">{!! $data->noted_by !!}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Prepared by</div>
                                <div class="datagrid-content">{!! $data->prepared_by !!}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Approved by</div>
                                <div class="datagrid-content">{!! $data->approved_by !!}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Checked by</div>
                                <div class="datagrid-content">{!! $data->checked_by !!}</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Released by</div>
                                <div class="datagrid-content">{!! $data->released_by !!}</div>
                            </div>
                            @isset($data->received_by)
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Received by</div>
                                    <div class="datagrid-content">{!! $data->received_by !!}</div>
                                </div>
                            @endif
                        </div>

                        <div class="hr-text">Item's Information</div>

                        <div class="col-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-vcenter card-table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Description</th>
                                                <th>Qty</th>
                                                <th>Uom</th>
                                                <th>Reason</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data->items as $item)
                                                <tr>
                                                    <td>{!! $item->item_code !!}</td>
                                                    <td class="text-muted">{!! $item->item_description !!}</td>
                                                    <td class="text-muted">{!! $item->qty !!}</td>
                                                    <td class="text-muted">{{ $item->uom }}</td>
                                                    <td>{{ $item->reason }}</td>
                                                </tr>
                                            @empty
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                            
                </div>
            </div>

            <x-form-show-approval-department :department="!$approvalDepartments->isEmpty()" :approval="$approvalDepartments" :status="$data->status" :series="$data->document_series_no"/>
        </div>
    </div>
</div>
