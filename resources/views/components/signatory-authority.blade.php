<div>

    <div class="hr-text">Authorized Signatories</div>

    <div class="datagrid text-center">
        <div class="datagrid-item">
            <div class="datagrid-title">Prepared by</div>
            <div class="datagrid-content">{!! $data->prepared_by !!}</div>
            <div class="datagrid-content text-muted">{{ $data->prepared_by_position }}</div>

        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Checked by</div>
            <div class="datagrid-content">{!! $data->checked_by !!}</div>
            <div class="datagrid-content text-muted">{{ $data->checked_by_position }}</div>

        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Noted by</div>
            <div class="datagrid-content">{!! $data->noted_by !!}</div>
            <div class="datagrid-content text-muted">{{ $data->noted_by_position }}</div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Approved by</div>
            <div class="datagrid-content">{!! $data->approved_by !!}</div>
            <div class="datagrid-content text-muted">{{ $data->approved_by_position }}</div>
        </div>
    </div>

    <div class="datagrid text-center mt-4">
        <div class="datagrid-item">
            <div class="datagrid-title">Requested by</div>
            <div class="datagrid-content">{!! $data->requested_by !!}</div>
            <div class="datagrid-content text-muted">{{ $data->requested_by_position }}</div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Released by</div>
            <div class="datagrid-content">{!! $data->released_by !!}</div>
            <div class="datagrid-content text-muted">{{ $data->released_by_position }}</div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Received by</div>
            <div class="datagrid-content">{!! $data->received_by !!}</div>
            <div class="datagrid-content text-muted">{{ $data->received_by_position }}</div>
        </div>
    </div>
    
</div>
