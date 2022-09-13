<div>
    <div class="col-12 col-md-auto ms-auto d-print-none">
        <div class="btn-list">
            @if ($approval)
                <span class="d-none d-sm-inline">
                    <a class="btn btn-white" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button"
                        aria-controls="offcanvasStart">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-report" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h5.697"></path>
                            <path d="M18 14v4h4"></path>
                            <path d="M18 11v-4a2 2 0 0 0 -2 -2h-2"></path>
                            <rect x="8" y="3" width="6" height="4" rx="2">
                            </rect>
                            <circle cx="18" cy="18" r="4"></circle>
                            <path d="M8 11h4"></path>
                            <path d="M8 15h3"></path>
                        </svg>
                        New approval department
                    </a>
                </span>
            @endif
            <div class="btn-list btn-primary flex-nowrap">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle align-text-top" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" style="">
                        @if ($archive)
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon me-2 icon-tabler icon-tabler-archive" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="4" width="18" height="4" rx="2">
                                    </rect>
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                                    <line x1="10" y1="12" x2="14" y2="12"></line>
                                </svg>
                                Archive
                            </a>
                        @endif
                        <button class="dropdown-item" type="button" onclick="javascript:window.print();">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                <rect x="7" y="13" width="10" height="8" rx="2" />
                            </svg>
                            Print
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($approval)
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasStartLabel">Approval Department</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="mb-3">
                    @forelse ($departments as $department)
                        <label class="form-check mb-2">
                            <input class="form-check-input" type="checkbox"
                                wire:model.defer="registerdepartments" value="{{ $department->name }}">
                            <span class="form-check-label">
                                {{ $department->name }}
                            </span>
                            <span class="form-check-description">
                                {{ $department->description }}
                            </span>
                        </label>
                    @empty
                    @endforelse
                </div>
            </div>
            {{-- Alphine Js method use here --}}
            <div class="mt-3" x-data="{ open: false }">
                <div x-show="!open">
                    <button class="btn btn-outline-success w-100" @click="open = ! open">
                        Apply
                    </button>
                </div>
                <div x-show="open" class="text-center" wire:loading.remove>
                    <small>Are you sure you want to make this changes? This cannot be undone.</small>
                    <button class="btn btn-outline-success w-100 mt-3" wire:click.prefetch="save_department('{{ $redirect }}')" >
                        Confirm
                    </button>
                </div>
                <div wire:loading wire:target="save_department" class="text-center">
                    Processing Data...
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
