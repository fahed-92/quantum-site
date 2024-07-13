<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box" style="background-color: #175f3f">
                <a href="{{ route('dashboard.index') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="frontend\assets\img\logo.jpeg"  style="opacity: 0.7; border-radius: 20%" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="frontend\assets\img\logo.jpeg"  style="opacity: 0.7; border-radius: 20%" alt="" height="50">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="frontend\assets\img\logo.jpeg"  style="opacity: 0.7; border-radius: 20%" alt="" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('frontend') }}/assets/img/logo.jpeg" alt="" height="50">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <div class="dropdown m-auto">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #175f3f">
                    {{ __('messages.lang') }}
                </a>
                <ul class="dropdown-menu text-center">
                    @foreach( LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a style="color: #175f3f" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                        src="{{ asset('backend') }}/assets/images/users/avatar-2.jpg" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ auth()->user()->full_name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item text-danger" href="{{ route('dashboard.logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                        <span key="t-logout">{{ __('messages.logout') }}</span></a>

                    <form id="logout-form" action="{{ route('dashboard.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>
        </div>


    </div>
</header>
