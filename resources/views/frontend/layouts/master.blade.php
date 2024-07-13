@include('frontend.layouts.header')

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    @include('frontend.layouts.alerts')
    <!-- Start Header Top
    ============================================= -->

    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header id="home">

        @include('frontend.layouts.navbar')

    </header>
    <!-- End Header -->
    @yield('content')

    @include('frontend.layouts.footer')

</body>

</html>
