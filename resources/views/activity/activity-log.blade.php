<x-tabler-layout>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Log
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

                <a href="{{ url('server/system-log') }}" target="_blank" class="btn btn-green">System Log</a>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Currently up for</div>
                            <div class="h3 m-0">14 days 2 hours 54 mins 34 seconds</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="subheader">Last checked at</div>
                            <div class="h3 m-0">27 seconds ago</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-2 align-items-center">
                                <div class="col-auto">
                                    <span class="status-indicator status-green status-indicator-animated">
                                        <span class="status-indicator-circle"></span>
                                        <span class="status-indicator-circle"></span>
                                        <span class="status-indicator-circle"></span>
                                    </span>
                                </div>
                                <div class="col">
                                    <h2 class="page-title">
                                        FTP 142.362.286.31
                                    </h2>
                                    <div class="text-muted">
                                        <ul class="list-inline list-inline-dots mb-0">
                                            <li class="list-inline-item"><span class="text-green">Up</span></li>
                                            <li class="list-inline-item">Checked every 3 minutes</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="table-responsive">
                            <livewire:log.activity.index/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <livewire:log.activity.event/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-tabler-layout>
