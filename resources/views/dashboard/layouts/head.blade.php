<head>

    <title>@yield('title')</title>
    @include('dashboard.layouts.metatags')

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/main-custom.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')
</head>
