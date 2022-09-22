<div>
    <div class="container-xl">
        <div class="row row-cards">
            @if (session()->has('approvalsubmissionSuccess'))
                <div class="empty">
                    <div class="empty-header">
                        <img src="{{ asset('asset/images/verify/success.svg') }}" height="300"
                            alt="">
                    </div>
                            
                    <h1>{{ session('approvalsubmissionSuccess') }}
                            <lord-icon
                                src="https://cdn.lordicon.com/xxdqfhbi.json"
                                trigger="loop"
                                style="width:50px;height:50px">
                            </lord-icon></h1>
                    
                    <p class="empty-subtitle text-muted mt-5">
                        Thank you for using classify digital document verification.
                    </p>
                </div>
            @endif

            @if (!session()->has('approvalsubmissionSuccess'))
                <div class="col-md-7">
                    <div class="border-0">
                        <img src="{{ asset('asset/images/verify/handover.svg') }}" alt="" srcset=""
                            width="90%">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="pt-5 border-0">

                        <div class="mt-5"
                            x-data="{
                                step: 1,
                            }" x-cloak>

                                <div class="border-0" x-show.transition.in="step === 1" >
                                    <div class="card-body">
                                    <div class="mb-3">
                                        <div class="form-label">Who is the person handed this form?</div>
                                        <div class="row g-2">
                                            <div class="col">
                                                <input type="text" class="form-control @error('sender') is-invalid @enderror" placeholder="Jun Dela Cruz" wire:model="sender">
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="btn btn-white btn-icon" aria-label="Button">
                                                    <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                                        height="24" viewBox="0 0 24 24" stroke-width="2"
                                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <circle cx="10" cy="10" r="7"></circle>
                                                        <line x1="21" y1="21" x2="15" y2="15">
                                                        </line>
                                                    </svg>
                                                </a>
                                            </div>
                                            @error('sender')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mt-2 float-right">
                                        <div class="btn-group">
                                            <button @click="step++" class="btn btn-white btn-icon" aria-label="Button">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-chevron-right"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <polyline points="9 6 15 12 9 18"></polyline>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="border-0" x-show.transition.in="step === 2" x-transition:enter.scale.80>
                                    <div class="card-body">
                                    <div class="mb-3">
                                        <div class="form-label">Let us know your current department</div>
                                        <select class="form-select @error('selectedDepartment') is-invalid @enderror" wire:model="selectedDepartment">
                                            <option value="" selected>Select</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->department }}">{{ $department->department }}</option>
                                            @endforeach
                                        </select>
                                        @error('selectedDepartment')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mt-2 float-right">
                                        <div class="btn-group">
                                            <button @click="step--" class="btn btn-white btn-icon" aria-label="Button">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/bold -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-chevron-left"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <polyline points="15 6 9 12 15 18"></polyline>
                                                </svg>
                                            </button>
                                            <button @click="step++" class="btn btn-white btn-icon" aria-label="Button">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler-chevron-right"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <polyline points="9 6 15 12 9 18"></polyline>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="border-0" x-show.transition.in="step === 3">
                                    <h3 class="card-title">
                                        <button @click="step--" class="btn btn-link text-dark" style="text-decoration: none;">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 icon-tabler-chevron-left" width="48" height="48" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <polyline points="15 6 9 12 15 18"></polyline>
                                            </svg>
                                            Review and Confirm
                                        </button>
                                    </h3>
                                    @if(empty($sender) || empty($selectedDepartment))
                                        <p class="text-danger">It seems you did not answer our questions. Press the return icon and check your response.</p>
                                    @else
                                        <div class="card-body" x-data="{confirm: false}">
                                            <div class="form-group row">
                                                <label class="col-3 col-form-label">From</label>
                                                <div class="col">
                                                    <div class="form-control-plaintext">{{ $sender ?? 'Dont be afraid tell us where did you get this form' }}</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-3 col-form-label">Receiving Department</label>
                                                <div class="col">
                                                    <div class="form-control-plaintext">{{ $selectedDepartment }}</div>
                                                </div>
                                            </div>
                                            <label class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" x-model="confirm">
                                                <span class="form-check-description">
                                                    I confirm that the above information is true and accurate.
                                                </span>
                                            </label>
                                            <div class="mt-2 float-right">
                                                <button class="btn btn-success w-100 mt-3" x-bind:disabled="!confirm" wire:click="save">
                                                    Confirm
                                                </button>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>