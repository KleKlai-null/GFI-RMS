<div>
    <div class="col-12">
        <div class="row row-cards">
            <div class="card">
                <div class="card-body mb-4">
                    @if (!empty($datas))
                        <div id="table-default" class="table-responsive">
                            <table class="table" style="min-height: 350px">
                                <thead>
                                    <tr>
                                        <th>Document Series No</th>
                                        <th>Customer Name</th>
                                        <th>Prepared by</th>
                                        <th>Approved</th>
                                        <th>Released by</th>
                                        <th>Approval Department</th>
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
                                                <td class="sort-progress" data-progress="30">
                                                    <div class="row align-items-center">
                                                        <div class="col-12 col-lg-auto">30%</div>
                                                        <div class="col">
                                                            <div class="progress" style="width: 5rem">
                                                                <div class="progress-bar" style="width: 30%"
                                                                    role="progressbar" aria-valuenow="30"
                                                                    aria-valuemin="0" aria-valuemax="100"
                                                                    aria-label="30% Complete">
                                                                    <span class="visually-hidden">30%
                                                                        Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-list btn-ghost-primary flex-nowrap">
                                                      <div class="dropdown">
                                                        <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown" aria-expanded="false">
                                                          Actions
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end" style="">
                                                          <a class="dropdown-item" href="{{ route('mi.show', $data->id) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler icon-tabler-file-description" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                                <path d="M9 17h6"></path>
                                                                <path d="M9 13h6"></path>
                                                             </svg>
                                                            Details
                                                          </a>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </td>
                                            </a>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">
                                                <x-form-index-search-empty route="{{ route('fg.create') }}" buttonText="Add finished goods record" />
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
                                    <a href="{{ route('mi.create') }}" class="btn btn-primary">
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
                                        Add merchandise record
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
                    <li class="page-item {{ $datas->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $datas->previousPageUrl() }}">
                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                            prev
                        </a>
                    </li>

                    <li class="page-item {{ $datas->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $datas->nextPageUrl() }}">
                            next
                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="9 6 15 12 9 18" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</div>
