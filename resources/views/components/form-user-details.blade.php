<div>
    <div class="datagrid">
        <div class="datagrid-item">
            <div class="datagrid-title">Creator</div>
            <div class="datagrid-content">
                <div class="d-flex align-items-center">
                    <span class="avatar avatar-xs me-2 avatar-rounded"
                        style="background-image: url({{ $user->avatarUrl() }})"></span>
                    {!! $user->name !!}
                </div>
            </div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Date</div>
            <div class="datagrid-content">{{ $created->format('F d, Y h:i:s A') }}</div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Last Update</div>
            <div class="datagrid-content">{{ $updated->format('F d, Y h:i:s A') }}</div>
        </div>
        <div class="datagrid-item">
            <div class="datagrid-title">Status</div>
            <div class="datagrid-content">
                <span class="status status-{{ $status == 'Open' ? 'green' : 'red' }}">
                    {{ $status }}
                </span>
            </div>
        </div>
    </div>
</div>
