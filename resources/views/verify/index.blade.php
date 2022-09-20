<x-tabler-guest-layout bgwhite="bg-white">

    @if($authentic)
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6">
                    <div class="border-0">
                        <img src="{{ asset('asset/images/verify/verify.svg') }}" alt="" srcset="" width="90%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center pt-5 border-0">
                        <div>
                            <h1>{{ $data->document_series_no ?? '' }}</h1>
                            <p>is authentic document</p>
                            <div class="col-md-12 markdown mb-5">
                                <h4>Origin</h4>
                                <p>Gensan Feedmill, Inc.</p>
                                <h4>Date of Issue</h4>
                                <p>{{ $data->created_at->format('F d, Y') }}</p>
                            </div>
                            <a href="{{ route('verify.employee', $data->document_series_no) }}" class="btn btn-ghost-primary active w-50">
                                Action
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if($authentic == false)
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-md-6">
                    <div class="border-0">
                        <img src="{{ asset('asset/images/verify/In_thought.svg') }}" alt="" srcset="" width="90%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center pt-5 border-0">
                        <div>
                            <h1>{{ $document_series_no }}</h1>
                            <p>cannot be verified</p>
                            
                            <div class="col-md-12 markdown mt-5 mb-5">
                                <div>
                                    <p>The document id above does not exist on our record or it has been deleted.</p> 
                                    <p class="mb-5">If you believe this was a mistake please contact us so we can investigate.</p>
                                </div>
                            </div>
        
                            <a href="#" class="btn btn-ghost-primary active w-50">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-tabler-guest-layout>
