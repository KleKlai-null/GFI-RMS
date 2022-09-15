<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Profile
                    </h2>
                </div>
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <div class="btn-list btn-primary flex-nowrap">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle align-text-top" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <button class="dropdown-item" type="button" onclick="javascript:window.print();">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-a-b-2" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M16 21h3c.81 0 1.48 -.67 1.48 -1.48l.02 -.02c0 -.82 -.69 -1.5 -1.5 -1.5h-3v3z">
                                            </path>
                                            <path d="M16 15h2.5c.84 -.01 1.5 .66 1.5 1.5s-.66 1.5 -1.5 1.5h-2.5v-3z"></path>
                                            <path d="M4 9v-4c0 -1.036 .895 -2 2 -2s2 .964 2 2v4"></path>
                                            <path d="M2.99 11.98a9 9 0 0 0 9 9m9 -9a9 9 0 0 0 -9 -9"></path>
                                            <path d="M8 7h-4"></path>
                                        </svg>
                                        Reset password
                                    </button>
                                    <a class="dropdown-item" href="{{ route('user.disable-account', $data) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler me-2 icon-tabler-circle-off" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M20.042 16.045a9 9 0 0 0 -12.087 -12.087m-2.318 1.677a9 9 0 1 0 12.725 12.73">
                                            </path>
                                            <path d="M3 3l18 18"></path>
                                        </svg>
                                        {{ ($data->status) ? "Disable account" : 'Enable account' }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('user.role', $data) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-a-b-2" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M16 21h3c.81 0 1.48 -.67 1.48 -1.48l.02 -.02c0 -.82 -.69 -1.5 -1.5 -1.5h-3v3z">
                                            </path>
                                            <path d="M16 15h2.5c.84 -.01 1.5 .66 1.5 1.5s-.66 1.5 -1.5 1.5h-2.5v-3z"></path>
                                            <path d="M4 9v-4c0 -1.036 .895 -2 2 -2s2 .964 2 2v4"></path>
                                            <path d="M2.99 11.98a9 9 0 0 0 9 9m9 -9a9 9 0 0 0 -9 -9"></path>
                                            <path d="M8 7h-4"></path>
                                        </svg>
                                        Change role
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">

                <div class="col-md-6 col-lg-4">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Basic info</div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-user"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                        </svg>
                                        Name: <strong>{{ $data->name }}</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                            <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" />
                                            <line x1="3" y1="6" x2="3" y2="19" />
                                            <line x1="12" y1="6" x2="12" y2="19" />
                                            <line x1="21" y1="6" x2="21" y2="19" />
                                        </svg>
                                        Went to: <strong>Notre Dame of Dadiangas University</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                        Lives in: <strong>South Cotabato, Philippines</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/clock -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="9" />
                                            <polyline points="12 7 12 12 15 15" />
                                        </svg>
                                        Time zone: <strong>Asia/Manila</strong>
                                    </div>
                                    <div class="card-title">User info</div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-at"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                                        </svg>
                                        Email: <strong>{{ $data->email }}</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-at"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="4"></circle>
                                            <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                                        </svg>
                                        Email Verified: <strong>{{ $data->email_verified_at?->diffForHumans() ?? 'Unverified' }}</strong>
                                    </div>
                                    <div class="mb-2">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                        </svg>
                                        Last password update: <strong>{{ $data->last_password_change_at?->diffForHumans() ?? '' }}</strong>
                                    </div>

                                    <div class="card-title">Last Login</div>
                                    <dl class="row">
                                        <dt class="col-5">Date:</dt>
                                        <dd class="col-7">2020-01-05 16:42:29 UTC</dd>
                                        <dt class="col-5">Location:</dt>
                                        <dd class="col-7"><span class="flag flag-country-ph"></span>
                                            Philippines</dd>
                                        <dt class="col-5">IP Address:</dt>
                                        <dd class="col-7">46.113.11.3</dd>
                                        <dt class="col-5">Operating system:</dt>
                                        <dd class="col-7">Windows 10 64-bit</dd>
                                        <dt class="col-5">Browser:</dt>
                                        <dd class="col-7">Chrome</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Roles</div>
                            <dl class="row">
                                @foreach ($data->getRoleNames() as $role)
                                    <dd class="col-7">{{ ucwords($role) }}</dd>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Permissions</div>
                            <dl class="row">
                                @foreach ($data->getAllPermissions() as $permission)
                                    <dd class="col-7">{{ ucwords($permission->name) }}</dd>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
