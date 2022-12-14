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
                            <input type="search"
                                class="form-control d-inline-block w-9 me-3 {{ empty($datas) ? 'd-none' : '' }}"
                                wire:model="search" placeholder="Search document series..." />
                        </span>
                        <span class="d-none d-sm-inline">
                            <a href="{{ route('item.create') }}" class="btn btn-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-playlist-add" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19 8h-14"></path>
                                    <path d="M5 12h9"></path>
                                    <path d="M11 16h-6"></path>
                                    <path d="M15 16h6"></path>
                                    <path d="M18 13v6"></path>
                                </svg>
                                New
                            </a>
                        </span>
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
                                <div id="table-default" class="table-responsive" style="min-height: 350px">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th><button class="table-sort" data-sort="sort-city">Document Series Number</button></th>
                                                <th><button class="table-sort" data-sort="sort-score">Revision Number</button></th>
                                                <th><button class="table-sort" data-sort="sort-score">Date Processed</button></th>                                          
                                                <th><button class="table-sort" data-sort="sort-score">Status</button></th>
                                                <th class="w-1"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-tbody">
                                            @forelse($datas as $data)
                                                <tr>
                                                    <a href="google.com">
                                                        <td class="sort-city">{{ ucwords($data->document_series_no) }}</td>
                                                        <td class="sort-score">{{ $data->revision }}</td>
                                                        <td class="sort-score">{{ $data->date_processed }}</td>
                                                        <td class="sort-score">{{ $data->status }}</td>
                                                        <td>
                                                            <div class="btn-list btn-ghost-primary flex-nowrap">
                                                                <div class="dropdown">
                                                                    <button class="btn dropdown-toggle align-text-top"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu dropdown-menu-end"
                                                                        style="">                                                            
                                                                            <a class="dropdown-item"
                                                                                href="{{ route('item.show', $data) }}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="icon me-2 icon-tabler icon-tabler-file-description"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" stroke-width="2"
                                                                                    stroke="currentColor" fill="none"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round">
                                                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                                                        fill="none"></path>
                                                                                    <path d="M14 3v4a1 1 0 0 0 1 1h4">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                                                                    </path>
                                                                                    <path d="M9 17h6"></path>
                                                                                    <path d="M9 13h6"></path>
                                                                                </svg>
                                                                                Details
                                                                            </a>       
                                                                            @can('edit IS')
                                                                                <a class="dropdown-item" type="button"
                                                                                href="{{ route('item.edit', $data) }}">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                                                                        <line x1="13.5" y1="6.5" x2="17.5" y2="10.5"></line>
                                                                                    </svg>
                                                                                    Edit
                                                                                </a>   
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
                                                        @if ($datas->isEmpty())
                                                        <tr class="common" align="center" style="height: 100px;">
                                                            <td colspan="8">  
                                                                <div class="empty-img"><img
                                                                src="{{ asset('asset/custom/static/illustrations/undraw_posting_photo_v65l.svg') }}"
                                                                height="128" alt=""></div>
                                                                <p class="empty-title">No results found</p>
                                                                    <p class="empty-subtitle text-muted">
                                                                        Try adjusting your search or filter to find what you're looking for.
                                                                    </p>
                                                                    <div class="empty-action">
                                                                        <a href="{{ route('item.create') }}" class="btn btn-primary">
                                              
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                                <line x1="12" y1="5" x2="12" y2="19" />
                                                                                <line x1="5" y1="12" x2="19" y2="12" />
                                                                            </svg>
                                                                            Add Items Record
                                                                        </a>
                                                                    </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>                
                <div class="d-flex align-items-center ms-auto">
                    <ul class="pagination mt-3 de-flex ms-auto">
                        {{ $datas->withQueryString()->links()}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>