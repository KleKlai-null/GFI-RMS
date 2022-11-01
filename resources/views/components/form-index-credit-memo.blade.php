@props([
    'permission_to_create'      => $permission,
    'new'                       => $new,
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
</div>
