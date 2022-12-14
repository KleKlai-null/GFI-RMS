<!doctype html>
<!--
* GFI System - A record keeping for Gensan Feedmill, Inc. and record processing system.
* @version 1.0.0
* @link https://api.gensanfeedmill.com
* Copyright 2022 Tabler
* Developer Maynard Magallen
* Copyright 2022 Gensan Feedmill, Inc.
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ env('APP_NAME') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('asset/images/icon.png') }}">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif !important;
        }
    </style>
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="page">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                        <img src="{{ asset('asset/images/gfi_logo.svg') }}" width="110" height="32" alt="Tabler"
                            class="navbar-brand-image">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                            </svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                            data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="12" r="4" />
                                <path
                                    d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                            </svg>
                        </a>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                            <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                                aria-label="Show notifications">
                                <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                                </svg>
                                <span class="badge bg-red"></span>
                            </a>
                            <livewire:app-notifications />
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
                            aria-label="Open user menu">
                            <span class="avatar avatar-sm"
                                style="background-image: url({{ auth()->user()->avatarUrl() }})"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>{{ auth()->user()->fullName() }}</div>
                                <div class="mt-1 small text-muted">{{ auth()->user()->firstRole() }}</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="{{ route('profile.account') }}" class="dropdown-item">Profile & account</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @include('layouts.tabler.navigation')

        

        <div class="page-wrapper">
            {{ $slot }}
            @include('layouts.tabler.footer')
        </div>
    </div>
    @livewireScripts
    <script>
        //busines partner script for others
        $("#TB_input_others").hide();
        $(document).ready(function () {
            $("input[name=type_of_business]").change(function(){
                if($("#TB_others").is(':checked')){
                    $("#TB_input_others").show();
                    $('#TB_input_others').val('');
                }else{
                    $("#TB_input_others").hide();
                    $('#TB_input_others').val('');
                }
            });
        });
     
        $("#Currency_input_others").hide();
        $(document).ready(function () {
            $("input[name=currency]").change(function(){
                if($("#Currency_others").is(':checked')){
                    $("#Currency_input_others").show();
                    $("#Currency_input_others").val('');
                }else{
                    $("#Currency_input_others").hide();
                    $("#Currency_input_others").val('');
                }
            });
        });

        $("#BP_input_others").hide();
        $(document).ready(function () {
            $("input[name=business_partner_group]").change(function(){
                if($("#BP_others").is(':checked')){
                    $("#BP_input_others").show();
                    $("#BP_input_others").val('');
                }else{
                    $("#BP_input_others").hide();
                    $("#BP_input_others").val('');
                }
            });
        });

        $("#PT_input_DME").hide();$("#PT_label_DME").hide();
        $(document).ready(function () {
            $("input[name=payment_terms_days_month_end]").change(function(){
                if($("#PT_DME").is(':checked')){
                    $("#PT_input_DME").show();
                    $("#PT_label_DME").show();
                    $("#PT_input_DME").val('');
                }else{
                    $("#PT_label_DME").hide();
                    $("#PT_input_DME").hide();
                    $("#PT_input_DME").val('');
                }
            });
        });

        $("#PT_input_DAD").hide();$("#PT_label_DAD").hide();
        $(document).ready(function () {
            $("input[name=payment_terms_days_after_delivery]").change(function(){
                if($("#PT_DAD").is(':checked')){
                    $("#PT_input_DAD").show();
                    $("#PT_label_DAD").show();
                    $("#PT_input_DAD").val('');
                }else{
                    $("#PT_label_DAD").hide();
                    $("#PT_input_DAD").hide();
                    $("#PT_input_DAD").val('');
                }
            });
        });

        $("#PT_input_Others").hide();$("#PT_label_Others").hide();
        $(document).ready(function () {
            $("input[name=payment_terms_others]").change(function(){
                if($("#PT_Others").is(':checked')){
                    $("#PT_input_Others").show();
                    $("#PT_label_Others").show();
                    $("#PT_input_Others").val('');
                }else{
                    $("#PT_label_Others").hide();
                    $("#PT_input_Others").hide();
                    $("#PT_input_Others").val('');
                }
            });
        });

        $("#PM_input_Others").hide();
        $(document).ready(function () {
            $("input[name=payment_methods]").change(function(){
                if($("#PM_Others").is(':checked')){
                    $("#PM_input_Others").show();
                    $("#PM_input_Others").val('');
                }else{
                    $("#PM_input_Others").hide();
                    $("#PM_input_Others").val('');
                }
            });
        });

        $("#TG_input_Others").hide();
        $(document).ready(function () {
            $("input[name=tax_group]").change(function(){
                if($("#TG_Others").is(':checked')){
                    $("#TG_input_Others").show();
                    $("#TG_input_Others").val('');
                }else{
                    $("#TG_input_Others").hide();
                    $("#TG_input_Others").val('');
                }
            });
        });

        //fixed asset script for others
        $("#PVG_input_others").hide();
        $(document).ready(function () {
            $("input[name=PVG_group_exempt]").change(function(){
                if($("#PVG_others").is(':checked')){
                    $("#PVG_input_others").show();
                    $("#PVG_input_others").val('');
                }else{
                    $("#PVG_input_others").hide();
                    $("#PVG_input_others").val('');
                }
            });
        });

        $("#SVG_input_others").hide();
        $(document).ready(function () {
            $("input[name=SVG_group]").change(function(){
                if($("#SVG_others").is(':checked')){
                    $("#SVG_input_others").show();
                    $("#SVG_input_others").val('');
                }else{
                    $("#SVG_input_others").hide();
                    $("#SVG_input_others").val('');
                }
            });
        });

        $("#IG_input_others").hide();
        $(document).ready(function () {
            $("input[name=item_group]").change(function(){
                if($("#IG_others").is(':checked')){
                    $("#IG_input_others").show();
                    $("#IG_input_others").val('');
                }else{
                    $("#IG_input_others").hide();
                    $("#IG_input_others").val('');
                }
            });
        });

        $("#PVG_item_input_others").hide();
        $(document).ready(function () {
            $("input[name=PVG_item_group]").change(function(){
                if($("#PVG_item_others").is(':checked')){
                    $("#PVG_item_input_others").show();
                    $("#PVG_item_input_others").val('');
                }else{
                    $("#PVG_item_input_others").hide();
                    $("#PVG_item_input_others").val('');
                }
            });
        });

        $("#SVG_item_input_others").hide();
        $(document).ready(function () {
            $("input[name=SVG_item_group]").change(function(){
                if($("#SVG_item_others").is(':checked')){
                    $("#SVG_item_input_others").show();
                    $("#SVG_item_input_others").val('');
                }else{
                    $("#SVG_item_input_others").hide();
                    $("#SVG_item_input_others").val('');
                }
            });
        });


        //edit items
        $(document).ready(function () {
            $("input[name=item_group_others]").change(function(){
                if($("#item_group_others").is(':checked')){
                    $("#item_group_others_input").show();

                }else{
                    $("#item_group_others_input").hide();
                    $("#item_group_others_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=PVG_group_others]").change(function(){
                if($("#PVG_group_others").is(':checked')){
                    $("#PVG_group_others_input").show();

                }else{
                    $("#PVG_group_others_input").hide();
                    $("#PVG_group_others_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=SVG_group_others]").change(function(){
                if($("#SVG_group_others").is(':checked')){
                    $("#SVG_group_others_input").show();

                }else{
                    $("#SVG_group_others_input").hide();
                    $("#SVG_group_others_input").val('');
                }
            });
        });

        //edit fa

        $(document).ready(function () {
            $("input[name=PVG_group_others]").change(function(){
                if($("#PVG_group_others_FA").is(':checked')){
                    $("#PVG_group_others_input_FA").show();

                }else{
                    $("#PVG_group_others_input_FA").hide();
                    $("#PVG_group_others_input_FA").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=SVG_group_others]").change(function(){
                if($("#SVG_group_others_FA").is(':checked')){
                    $("#SVG_group_others_input_FA").show();

                }else{
                    $("#SVG_group_others_input_FA").hide();
                    $("#SVG_group_others_input_FA").val('');
                }
            });
        });

        //edit bp
        $(document).ready(function () {
            $("input[name=type_of_business_others]").change(function(){
                if($("#TB_others_edit").is(':checked')){
                    $("#type_of_business_others_input").show();

                }else{
                    $("#type_of_business_others_input").hide();
                    $("#type_of_business_others_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=currency_others]").change(function(){
                if($("#currency_others_edit").is(':checked')){
                    $("#currency_others_edit_input").show();

                }else{
                    $("#currency_others_edit_input").hide();
                    $("#currency_others_edit_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=business_partner_group_others]").change(function(){
                if($("#business_partner_group_others_edit").is(':checked')){
                    $("#business_partner_group_others_edit_input").show();

                }else{
                    $("#business_partner_group_others_edit_input").hide();
                    $("#business_partner_group_others_edit_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=payment_terms_days_month_end]").change(function(){
                if($("#payment_terms_days_month_end_edit").is(':checked')){
                    $("#payment_terms_days_month_end_edit_input").show();

                }else{
                    $("#payment_terms_days_month_end_edit_input").hide();
                    $("#payment_terms_days_month_end_edit_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=payment_terms_days_after_delivery]").change(function(){
                if($("#payment_terms_days_after_delivery_edit").is(':checked')){
                    $("#payment_terms_days_after_delivery_edit_input").show();

                }else{
                    $("#payment_terms_days_after_delivery_edit_input").hide();
                    $("#payment_terms_days_after_delivery_edit_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=payment_terms_others]").change(function(){
                if($("#payment_terms_others_edit").is(':checked')){
                    $("#payment_terms_others_edit_input").show();

                }else{
                    $("#payment_terms_others_edit_input").hide();
                    $("#payment_terms_others_edit_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=payment_methods_others]").change(function(){
                if($("#payment_methods_others_edit").is(':checked')){
                    $("#payment_methods_others_edit_input").show();

                }else{
                    $("#payment_methods_others_edit_input").hide();
                    $("#payment_methods_others_edit_input").val('');
                }
            });
        });

        $(document).ready(function () {
            $("input[name=tax_group_others]").change(function(){
                if($("#tax_group_others_edit").is(':checked')){
                    $("#tax_group_others_edit_input").show();

                }else{
                    $("#tax_group_others_edit_input").hide();
                    $("#tax_group_others_edit_input").val('');
                }
            });
        });


    </script>
    <script src="{{ asset('asset/images/lord-icon/lord-icon-dependency.js') }}"></script>
    <script>
        Livewire.onPageExpired((response, message) => {})
    </script>
    @yield('script')
</body>

</html>
