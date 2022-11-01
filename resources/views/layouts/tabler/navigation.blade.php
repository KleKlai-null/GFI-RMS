<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    @can('view dashboard')
                        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                    @endcan
                    <li
                        class="nav-item dropdown {{ Request::is('merchandise', 'maintenance', 'directmaterial', 'finishedgoods', 'fixedasset', 'minorasset', 'servicecall', 'returnitem') ? 'active' : '' }}">
                        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-address-book" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                                    </path>
                                    <path d="M10 16h6"></path>
                                    <circle cx="13" cy="11" r="2"></circle>
                                    <path d="M4 8h3"></path>
                                    <path d="M4 12h3"></path>
                                    <path d="M4 16h3"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Forms
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    @canany(['create mi', 'view mi', 'delete mi', 'archive mi'])
                                    <div class="dropend">
                                        <a class="dropdown-item dropdown-toggle show" href="#sidebar-cards"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                            aria-expanded="true">
                                            Merchandise
                                        </a>
                                        <div class="dropdown-menu show" data-bs-popper="static">
                                            <a href="{{ route('mi') }}" class="dropdown-item">
                                                List
                                            </a>
                                            <a href="{{ route('mi.index-credit-memo') }}" class="dropdown-item">
                                                Credit Memo
                                            </a>
                                        </div>
                                    </div>
                                    @endcanany
                                    @canany(['create mro', 'view mro', 'delete mro', 'archive mro'])
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle show" href="#sidebar-cards"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                                aria-expanded="true">
                                                Maintence, Repairs, Operations
                                            </a>
                                            <div class="dropdown-menu show" data-bs-popper="static">
                                                <a href="{{ route('mro') }}" class="dropdown-item">
                                                    List
                                                </a>
                                                <a href="{{ route('mro.index-credit-memo') }}" class="dropdown-item">
                                                    Credit Memo
                                                </a>
                                            </div>
                                        </div>
                                    @endcanany
                                    @canany(['create dm', 'view dm', 'delete dm', 'archive dm'])
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle show" href="#sidebar-cards"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                                aria-expanded="true">
                                                Direct Material
                                            </a>
                                            <div class="dropdown-menu show" data-bs-popper="static">
                                                <a href="{{ route('dm') }}" class="dropdown-item">
                                                    List
                                                </a>
                                                <a href="{{ route('dm.index-credit-memo') }}" class="dropdown-item">
                                                    Credit Memo
                                                </a>
                                            </div>
                                        </div>
                                    @endcanany
                                    @canany(['create fg', 'view fg', 'delete fg', 'archive fg'])
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle show" href="#sidebar-cards"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                                aria-expanded="true">
                                                Finished Goods
                                            </a>
                                            <div class="dropdown-menu show" data-bs-popper="static">
                                                <a href="{{ route('fg') }}" class="dropdown-item">
                                                    List
                                                </a>
                                                <a href="{{ route('fg.index-credit-memo') }}" class="dropdown-item">
                                                    Credit Memo
                                                </a>
                                            </div>
                                        </div>
                                    @endcanany
                                    @canany(['create fa', 'view fa', 'delete fa', 'archive fa'])
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle show" href="#sidebar-cards"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                                aria-expanded="true">
                                                Fixed Asset
                                            </a>
                                            <div class="dropdown-menu show" data-bs-popper="static">
                                                <a href="{{ route('fa') }}" class="dropdown-item">
                                                    List
                                                </a>
                                                <a href="{{ route('fa.index-credit-memo') }}" class="dropdown-item">
                                                    Credit Memo
                                                </a>
                                            </div>
                                        </div>
                                    @endcanany
                                    @canany(['create ma', 'view ma', 'delete ma', 'archive ma'])
                                        <div class="dropend">
                                            <a class="dropdown-item dropdown-toggle show" href="#sidebar-cards"
                                                data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button"
                                                aria-expanded="true">
                                                Minor Asset
                                            </a>
                                            <div class="dropdown-menu show" data-bs-popper="static">
                                                <a href="{{ route('ma') }}" class="dropdown-item">
                                                    List
                                                </a>
                                                <a href="{{ route('ma.index-credit-memo') }}" class="dropdown-item">
                                                    Credit Memo
                                                </a>
                                            </div>
                                        </div>
                                    @endcanany
                                    @canany(['create mr', 'view mr', 'delete mr', 'archive mr'])
                                        <a href="{{ route('mr') }}" class="dropdown-item">
                                            Memorandum
                                        </a>
                                    @endcanany
                                    @canany(['create sc', 'view sc', 'delete sc', 'archive sc'])
                                        <a href="{{ route('sc') }}" class="dropdown-item">
                                            Service Call
                                        </a>
                                    @endcanany
                                </div>
                            </div>
                        </div>
                    </li>
                    @canany(['create department', 'delete department', 'create employee', 'delete employee'])
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" role="button" aria-expanded="false">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
                                        <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
                                        <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Utilities
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-columns">
                                    <div class="dropdown-menu-column">
                                        @canany(['create department', 'delete department'])
                                            <a href="{{ route('departments') }}" class="dropdown-item">
                                                Departments
                                            </a>
                                        @endcanany
                                        @canany(['create employee', 'delete employee'])
                                            <a href="{{ route('employees') }}" class="dropdown-item">
                                                Employees
                                            </a>
                                        @endcanany
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endcanany
                    @canany(['create user', 'view user'])
                        <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('users') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    User Management
                                </span>
                            </a>
                        </li>
                    @endcanany
                    @can('view activity log')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('activity.log') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                        </path>
                                        <rect x="9" y="3" width="6" height="4"
                                            rx="2"></rect>
                                    </svg>
                                </span>
                                <span class="nav-link-title">
                                    Log
                                </span>
                            </a>
                        </li>
                    @endcan
                </ul>
                <!--

                    * Search UI
                -->
                {{-- <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                        </span>
                        <input type="text" value="" class="form-control" placeholder="Search…"
                            aria-label="Search in website">
                    </div>
                </div> --}}
                @env('local', 'staging')
                <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <div class="text-warning">
                        @env('local')
                        Local Environment
                        @endenv
                        @env('staging')
                        Staging Environment
                        @endenv
                    </div>
                </div>
                @endenv
            </div>
        </div>
    </div>
</div>
