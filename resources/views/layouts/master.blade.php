<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light"
    data-menu-styles="dark">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bulus Responsive Admin Web Dashboard">
    <meta name="keywords"
        content="admin, admin tailwind, laravel admin template, admin laravel, tailwind laravel, admin dashboard template, laravel tailwind, admin dashboard, admin panel, admin template, laravel admin dashboard, tailwind, laravel dashboard template, admin panel template, laravel admin panel, laravel dashboard">

    <!-- TITLE -->
    <title>Bulus Budget - {{ $title ?? '' }} </title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('jai.png') }}">

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- APP CSS -->
    @vite(['resources/css/app.css'])


    <!-- APP SCSS -->
    @vite(['resources/sass/app.scss'])

    <link rel="stylesheet" href="{{ asset('build/assets/libs/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/libs/animate.css/animate.min.css') }}">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/simplebar/simplebar.min.css') }}">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- MAIN JS -->
    <script src="{{ asset('build/assets/main.js') }}"></script>

    <!-- ANIMATE CSS -->
    @yield('styles')
    @livewireStyles

</head>

<body class="">

    <!-- SWITCHER -->
    @include('layouts.components.switcher')

    <!-- END SWITCHER -->

    <!-- PAGE -->
    <div class="page">

        <!-- SIDEBAR -->
        <livewire:components.sidebar />

        <!-- END SIDEBAR -->

        <!-- HEADER -->
        <livewire:components.topbar />


        <!-- END HEADER -->

        <!-- MAIN-CONTENT -->
        @yield('content')
        <!-- END MAIN-CONTENT -->

        <!-- SEARCH-MODAL -->
        @include('layouts.components.search-modal')

        <!-- END SEARCH-MODAL -->

        <!-- FOOTER -->
        {{-- @include('layouts.components.footer') --}}
        <livewire:components.footer />


        <!-- END FOOTER -->

    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->
    <script src="{{ asset('build/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    @if (Session::has('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "info",
                title: "{{ Session::get('success') }}",
            });
        </script>
    @endif
    @include('layouts.components.scripts')

    <!-- STICKY JS -->
    <script src="{{ asset('build/assets/sticky.js') }}"></script>

    <!-- SWITCH JS -->
    @vite('resources/assets/js/switch.js')


    <!-- APP JS -->
    @vite('resources/js/app.js')


    <!-- END SCRIPTS -->
    @livewireScripts
    <!-- SWEETALERT JS -->

</body>

</html>
