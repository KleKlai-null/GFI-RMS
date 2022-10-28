<x-tabler-layout>
    <div class="container-xl">
        <!-- Page title -->
        <div class="text-center" wire:offline>
            You are now offline.
        </div>
        <div class="page-header d-print-none">
            <x-account-risk-reminder/>
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl">
        <div class="page-body">

            @if(!$total)
                <div class="container-xl d-flex flex-column justify-content-center">
                    <div class="empty">
                        <div class="empty-img"><img src="./static/illustrations/undraw_printing_invoices_5r4r.svg"
                                height="128" alt="">
                        </div>
                        
                        <p class="empty-title">Insufficient Data</p>
                        <p class="empty-subtitle text-muted">
                            It looks like your dashboard has insufficient data. Let's create your first form
                        </p>
                        <div class="empty-action">
                            @can('create mi')
                                <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle align-text-top show" href="javascript:void();" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <line x1="12" y1="5" x2="12" y2="19" />
                                            <line x1="5" y1="12" x2="19" y2="12" />
                                        </svg>
                                        Add your first form
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" style="">
                                        @can('create mi')
                                            <a class="dropdown-item" href="{{ route('mi.create') }}">{{ __('form-name.mi') }}</a>
                                        @endcan
                                        @can('create mro')
                                            <a class="dropdown-item" href="{{ route('mro.create') }}">{{ __('form-name.mro') }}</a>
                                        @endcan
                                        @can('create dm')
                                            <a class="dropdown-item" href="{{ route('dm.create') }}">{{ __('form-name.dm') }}</a>
                                        @endcan
                                        @can('create fg')
                                            <a class="dropdown-item" href="{{ route('fg.create') }}">{{ __('form-name.fg') }}</a>
                                        @endcan
                                        @can('create fa')
                                            <a class="dropdown-item" href="{{ route('fa.create') }}">{{ __('form-name.fa') }}</a>
                                        @endcan
                                        @can('create ma')
                                            <a class="dropdown-item" href="{{ route('ma.create') }}">{{ __('form-name.ma') }}</a>
                                        @endcan
                                        @can('create mr')
                                            <a class="dropdown-item" href="{{ route('mr.create') }}">{{ __('form-name.mr') }}</a>
                                        @endcan
                                        @can('create sc')
                                            <a class="dropdown-item" href="{{ route('sc.create') }}">{{ __('form-name.sc') }}</a>
                                        @endcan
                                    </div>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12 mb-3">
                    <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Summary</h3>
                        <div id="chart-completion-tasks-9"></div>
                    </div>
                    </div>
                </div>
            @endif

            <div class="empty">
                <p class="empty-subtitle text-muted text-center">{{ (isset($quote[0])) ? $quote[0]['q'] . ' - ' . $quote[0]['a'] : '' }}</p>
            </div>

        </div>
    </div>

    @section('script')
    <!-- Libs JS -->
    <script src="{{ asset('asset/custom/dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            window.ApexCharts && (new ApexCharts(document.getElementById('chart-completion-tasks-9'), {
                chart: {
                    type: "bar",
                    fontFamily: 'inherit',
                    height: 240,
                    parentHeightOffset: 0,
                    toolbar: {
                        show: false,
                    },
                    animations: {
                        enabled: true
                    },
                    stacked: true,
                },
                plotOptions: {
                    bar: {
                        columnWidth: '30%',
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                fill: {
                    opacity: .9,
                },
                series: [{
                    name: "Total",
                    data: {!! json_encode($total) !!}
                },{
                    name: "Open",
                    data: {!! json_encode($open) !!}
                },{
                    name: "Closed",
                    data: {!! json_encode($closed) !!}
                },{
                    name: "Archived",
                    data: {!! json_encode($archived) !!}
                }],
                grid: {
                    padding: {
                        top: -20,
                        right: 0,
                        left: 0,
                        bottom: -4
                    },
                    strokeDashArray: 4,
                },
                xaxis: {
                    labels: {
                        padding: 0,
                    },
                    tooltip: {
                        enabled: false
                    },
                    axisBorder: {
                        show: false,
                    },
                    categories: ['MI', 'MRO', 'DM', 'FG', 'FA', 'MA', 'MR', 'SC'],
                },
                yaxis: {
                    labels: {
                        padding: 5
                    },
                },
                colors: [tabler.getColor("primary"), tabler.getColor("green"), tabler.getColor("danger"), tabler.getColor("warning")],
                legend: {
                    show: false,
                },
            })).render();
        });
        // @formatter:on
    </script>
    @endsection
</x-tabler-layout>
