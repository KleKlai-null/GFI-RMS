<div>
    <div class="container-xl">
        <!-- Page title -->
        <div class="text-center" wire:offline>
            You are now offline.
        </div>
        <div class="page-header d-print-none">
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
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <fieldset class="form-fieldset">
                            <div class="mb-3">
                                <div class="row g-2">
                                    <div class="col-3">
                                        <label class="form-label required">Employee ID</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('employee_id') is-invalid @enderror"
                                                wire:model="employee_id">
                                        </div>
                                        @error('employee_id')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label required">First name</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                wire:model="first_name">
                                        </div>
                                        @error('first_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label required">Last name</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                wire:model="last_name">
                                        </div>
                                        @error('last_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Middle name</label>
                                        <div>
                                            <input type="text"
                                                class="form-control @error('middle_name') is-invalid @enderror"
                                                wire:model="middle_name">
                                        </div>
                                        @error('middle_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-info" type="submit" wire:click="save">Save</button>
                            </div>
                        </fieldset>
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table table-striped">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Full Name</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($departments as $department)
                                        <tr>
                                            <td>{!! $department->employee_id !!}</td>
                                            <td>{!! $department->fullName() !!}</td>
                                            <td>
                                                <div x-data="{ open: false }">
                                                    <div x-show="!open">
                                                        <a href="javascript:void();" @click.prevent="open = ! open">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-trash-x"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                stroke-width="2" stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path d="M4 7h16"></path>
                                                                <path
                                                                    d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12">
                                                                </path>
                                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3">
                                                                </path>
                                                                <path d="M10 12l4 4m0 -4l-4 4"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div x-show="open">
                                                        <a href="javascript:void();"
                                                            wire:click.prevent="delete({{ $department->id }})"
                                                            @click.prevent="open = ! open">
                                                            Confirm
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">
                                                <div class="container-xl d-flex flex-column justify-content-center">
                                                    <div class="empty">
                                                        <div class="empty-img"><img
                                                                src="{{ asset('asset/images/People.svg') }}" height="128"
                                                                alt="">
                                                        </div>
                                                        <p class="empty-subtitle text-muted">
                                                            Let's start adding your people by filling up the form above.
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
