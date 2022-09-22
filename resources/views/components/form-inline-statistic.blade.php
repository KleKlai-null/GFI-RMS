<div class="col-sm-6 col-lg-3">
    <div class="card card-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-auto">
                    <span class="bg-primary text-white avatar">
                        <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-book-upload"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 20h-8a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12v5"></path>
                            <path d="M11 16h-5a2 2 0 0 0 -2 2"></path>
                            <path d="M15 16l3 -3l3 3"></path>
                            <path d="M18 13v9"></path>
                        </svg>
                    </span>
                </div>
                <div class="col">
                    <div class="font-weight-medium">
                        {{ $statistic['total'] }} Created
                    </div>
                    <div class="text-muted">
                        {{ $statistic['total_today'] }} today
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="card card-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a wire:click.prevent="status('Open')" class="btn btn-green w-100 btn-icon" aria-label="Closed">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-book" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                            <line x1="3" y1="6" x2="3" y2="19">
                            </line>
                            <line x1="12" y1="6" x2="12" y2="19">
                            </line>
                            <line x1="21" y1="6" x2="21" y2="19">
                            </line>
                        </svg>
                    </a>
                </div>
                <div class="col">
                    <div class="font-weight-medium">
                        {{ $statistic['open'] }} Open
                    </div>
                    <div class="text-muted">
                        {{ $statistic['open_today'] }} today
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="card card-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a wire:click.prevent="status('Closed')" class="btn btn-twitter w-100 btn-icon" aria-label="Closed">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-book-2" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M19 4v16h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12z">
                            </path>
                            <path d="M19 16h-12a2 2 0 0 0 -2 2"></path>
                            <path d="M9 8h6"></path>
                        </svg>
                    </a>
                </div>
                <div class="col">
                    <div class="font-weight-medium">
                        {{ $statistic['close'] }} Closed
                    </div>
                    <div class="text-muted">
                        {{ $statistic['close_today'] }} today
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-6 col-lg-3">
    <div class="card card-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-auto">
                    <a wire:click.prevent="status('Archived')" class="btn btn-facebook w-100 btn-icon" aria-label="Archive">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="3" y="4" width="18" height="4" rx="2">
                            </rect>
                            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                            <line x1="10" y1="12" x2="14" y2="12"></line>
                        </svg>
                    </a>
                </div>
                <div class="col">
                    <div class="font-weight-medium">
                        {{ $statistic['archive'] }} Archived
                    </div>
                    <div class="text-muted">
                        {{ $statistic['archive_today'] }} today
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>