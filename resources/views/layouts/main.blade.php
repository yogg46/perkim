<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="{{ Auth::user()->dark == 0 ? 'light' : 'dark' }}">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="description"
        content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE"> --}}
    <title>PERKIM</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="/dist/datatables.css" />
    <link rel="stylesheet" href="/dist/css/app.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">

    @livewireStyles
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main">
    <!-- BEGIN: Mobile Menu -->


    @include('sweetalert::alert')

    @include('layouts.top-menu')
    <!-- END: Top Bar -->
    <div class="wrapper">

        <div class="wrapper-box">

            <!-- BEGIN: Side Menu -->
            @include('layouts.side-menu')
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                @if (session()->has('message'))
                    <div class="alert alert-success-soft alert-dismissible mt-3 show flex items-center mb-2"
                        role="alert"> <i data-lucide="alert-triangle" class="w-6 h-6 mr-2"></i>
                        {{ session('message') }} <button type="button" class="btn-close" data-tw-dismiss="alert"
                            aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i>
                        </button> </div>
                @endif
                @yield('isi')

                <!-- END: Content -->
            </div>
        </div>


        {{-- @if (session()->has('message')) --}}
        {{-- <div id="success-notification-content" class="toastify-content hidden flex"> <i class="text-success"
                data-lucide="check-circle"></i>
            <div class="ml-4 mr-4">
                <div class="font-medium"> berhasil</div>
                <div class="text-slate-500 mt-1">The message will be sent in 5 minutes.</div>
            </div>
        </div> --}}
        {{-- @endif --}}


        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="/dark-mode-switcher/{{ Auth::user()->id }}"
            class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div
                class="dark-mode-switcher__toggle {{ Auth::user()->dark == 1 ? 'dark-mode-switcher__toggle--active' : '' }} border">
            </div>
        </div>
        <!-- END: Dark Mode Switcher-->

        <!-- BEGIN: JS Assets-->
        @livewireScripts

        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>
        <script src="/dist/js/app.js"></script>
        <script src="/dist/datatables.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script type="text/javascript">
        
            $('.show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
            //  Success notification
            $("#success-notification-toggle").on("click", function() {
                Toastify({
                    node: $("#success-notification-content").clone().removeClass("hidden")[0],
                    duration: -1,
                    newWindow: true,
                    close: true,
                    gravity: "top",
                    position: "right",
                    stopOnFocus: true,
                }).showToast();
            });
        </script>
        <!-- END: JS Assets-->
</body>

</html>
