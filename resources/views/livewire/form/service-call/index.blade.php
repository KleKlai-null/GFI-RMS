<div>
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
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">   
                    <div class="btn-list">
                        <span class="d-none d-sm-inline">
                            <input type="search" class="form-control d-inline-block w-9 me-3 {{ empty($datas) ? 'd-none' : '' }}"
                                wire:model="search" placeholder="Search document series..." />
                        </span>
                        <x-form-index-header new="{{ route('sc.create') }}" disablecreditmemo="true" permission="create sc"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">

            <div class="col-12">
                <div class="row row-cards">
                    @if (!empty($datas))
                        <x-form-inline-statistic :statistic="$statistic" />
                    @endif

                    <div class="card">
                        <div class="card-body mb-4">
                            @if (!empty($datas))
                                <div id="table-default" class="table-responsive">
                                    <table class="table" style="min-height: 350px">
                                        <thead>
                                            <tr>
                                                <th><button class="table-sort" data-sort="sort-series">Document Series
                                                        No</button></th>
                                                <th><button class="table-sort" data-sort="sort-city">Customer name</button></th>
                                                <th><button class="table-sort" data-sort="sort-score">Prepared
                                                        by</button>
                                                </th>
                                                <th><button class="table-sort" data-sort="sort-date">Approved
                                                        by</button>
                                                </th>
                                                <th><button class="table-sort" data-sort="sort-quantity">Released
                                                        by</button></th>
                                                <th class="w-1"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-tbody">
                                            @forelse($datas as $data)
                                                <tr>
                                                    <a href="google.com">
                                                        <td class="sort-series">{{ $data->document_series_no }}</td>
                                                        <td class="sort-city">{{ ucwords($data->customer_name) }}</td>
                                                        <td class="sort-score">{{ $data->prepared_by }}</td>
                                                        <td class="sort-date" data-date="1628071164">
                                                            {{ $data->approved_by }}
                                                        </td>
                                                        <td class="sort-quantity">{{ $data->released_by }}</td>
                                                        <td>
                                                            <div class="btn-list btn-ghost-primary flex-nowrap">
                                                              <div class="dropdown">
                                                                <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown" aria-expanded="false">
                                                                  Actions
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end" style="">
                                                                  <a class="dropdown-item" href="{{ route('sc.show', $data->id) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler icon-tabler-file-description" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                                        <path d="M9 17h6"></path>
                                                                        <path d="M9 13h6"></path>
                                                                     </svg>
                                                                    Details
                                                                  </a>
                                                                  @can('archive sc')
                                                                    <button class="dropdown-item" type="button" wire:click="archive({{ $data->id }})">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler icon-tabler-archive" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                            <rect x="3" y="4" width="18" height="4" rx="2"></rect>
                                                                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                                                                            <line x1="10" y1="12" x2="14" y2="12"></line>
                                                                        </svg>
                                                                        Archive
                                                                    </button>
                                                                  @endcan
                                                                  @can('delete sc')
                                                                    <button class="dropdown-item" type="button" wire:click="delete({{ $data->id }})">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler icon-tabler-file-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                                            <path d="M10 12l4 4m0 -4l-4 4"></path>
                                                                        </svg>
                                                                        Delete
                                                                    </button>
                                                                  @endcan
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </td>
                                                    </a>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="7">
                                                        <x-form-index-search-empty route="{{ route('sc.create') }}" buttonText="Add service call record" permission="create sc"/>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                            @if (empty($datas))
                                <div class="container-xl d-flex flex-column justify-content-center">
                                    <div class="empty">
                                        <div class="empty-img"><img
                                                src="{{ asset('asset/custom/static/illustrations/undraw_posting_photo_v65l.svg') }}"
                                                height="128" alt="">
                                        </div>
                                        <p class="empty-title">Insufficient Data</p>
                                        <p class="empty-subtitle text-muted">
                                            It looks like you don't have any record yet. Let's create your first
                                            merchandise record
                                        </p>
                                        <div class="empty-action">
                                            <a href="{{ route('sc.create') }}" class="btn btn-primary">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="12" y1="5" x2="12"
                                                        y2="19" />
                                                    <line x1="5" y1="12" x2="19"
                                                        y2="12" />
                                                </svg>
                                                Add service call record
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                @if (!empty($datas))
                    <div class="d-flex mt-4">
                        <ul class="pagination ms-auto">
                            {{ $datas->withQueryString()->links()}}
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
