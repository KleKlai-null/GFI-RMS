@props([
    'display_cm'                => (isset($disablecreditmemo)) ? false : true,
    'permission_to_create'      => $permission,
    'new'                       => $new,
    'credit_memo_route'         => (isset($creditMemo)) ? $creditMemo : '',
])

<div>
    @can($permission_to_create)
        <span class="d-none d-sm-inline">
            <a href="{{ $new }}" class="btn btn-white">
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
    @endcan
    @if($display_cm)
        @can('create cm')
            @if(!Request::is('returnitem'))
                <span class="d-none d-sm-inline">
                    <a href="{{ $credit_memo_route }}" class="btn btn-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt-refund" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2"></path>
                            <path d="M15 14v-2a2 2 0 0 0 -2 -2h-4l2 -2m0 4l-2 -2"></path>
                        </svg>
                        Credit memo
                    </a>
                </span>
            @endif
        @endcan
    @endif
    @isset($import)
        <button type="button" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
            data-bs-target="#import-data">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
            Import Data
        </button>
    @endisset
</div>
