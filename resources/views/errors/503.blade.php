<x-tabler-guest-layout :code="503">
    <div class="container-tight py-4">
        <div class="empty">
            <div class="empty-header">
                <img src="{{ asset('asset/images/errors/503.svg') }}" height="300"
                    alt=""></div>
            <p class="empty-title">Service Unavailable</p>
            <p class="empty-subtitle text-muted">
                The server is currently unable to handle your request due to a temporary overload or scheduled maintenance.
            </p>
            <p class="empty-subtitle text-muted">
                This error has been logged, but if you experience this problem again, feel free to contact us.
            </p>
        </div>
    </div>
</x-tabler-guest-layout>
