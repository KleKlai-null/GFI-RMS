<div>
    @if($department)
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Approval Departments <span
                        class="badge badge-sm bg-green text-uppercase ms-2">{{ $approval->count() }}</span></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="list-group list-group-flush overflow-auto" style="max-height: 35rem">
                            @forelse ($approval as $department)
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col text-truncate">
                                            <p class="text-body d-block">{{ $department->department }}</p>
                                            @if(!empty($department->handed_person) && !empty($department->receive_person))
                                                <small class="text-muted">Accomplish</small>
                                            @endif
                                        </div>
                                        @if(empty($department->handed_person) && empty($department->receive_person))
                                            <div class="col-auto align-self-center">
                                                <span class="status-indicator status-green status-indicator-animated">
                                                    <span class="status-indicator-circle"></span>
                                                    <span class="status-indicator-circle"></span>
                                                    <span class="status-indicator-circle"></span>
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @empty
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col text-truncate">
                                            <p class="text-body d-block">Insufficient Data</p>
                                            <div class="text-muted text-truncate mt-n1"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="divide-y">
                            @if(Str::lower($status) == 'closed')
                                <div>
                                    <div class="row  mt-4">
                                        <div class="col">
                                            <div class="text-truncate">
                                                {{ $series }} has been closed.
                                            </div>
                                            <div class="text-muted">System</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @forelse ($approval as $department)
                                @if(!empty($department->handed_person) && !empty($department->receive_person))
                                    <div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-truncate">
                                                    <strong>{{ $department->receive_person }}</strong> acknowledge document handed by <strong>{{ $department->handed_person }}</strong>
                                                </div>
                                                <div class="text-muted"><strong>{{ $department->department }}</strong> - <small>{{ $department->created_at->format('M d, Y h:m A') }}</small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="text-truncate">
                                                    <strong>{{ $department->handed_person }}</strong> handed document to <strong>{{ $department->receive_person }}</strong>
                                                </div>
                                                <div class="text-muted"><strong>{{ $department->department }}</strong> - <small>{{ $department->created_at->format('M d, Y h:m A') }}</small></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @empty
                                
                            @endforelse
                            <div>
                                <div class="row">
                                    <div class="col">
                                        <div class="text-truncate">
                                            Approval departments has been created for {{ $series }}
                                        </div>
                                        <div class="text-muted">System</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
