        <!-- Start Navigation -->
        <nav class="navbar navbar-default inc-top-bar attr-border navbar-fixed
         {{ Request::is('/', LaravelLocalization::getCurrentLocale()) || Request::is('ar/home1') || Request::is('en/home1') ? 'dark' : 'white' }} no-background bootsnav">
            <!-- Navigation -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-bottom:2px solid #1a202c; padding: 2px">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <img class="mt-1 mb-1" src="{{asset('frontend\assets\img\logo.jpeg')}}" height="55" style="opacity: 0.7; border-radius: 20%">
                        </div>
                        <!-- Collect the nav links for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#home" style="text-transform:uppercase; font-weight: bold">{{__('messages.Home')}}</a>
                                </li>
                                <li><a href="#products" style="text-transform:uppercase; font-weight: bold">{{__('messages.Products')}}</a>
                                </li>
                                <li><a href="#services" style="text-transform:uppercase; font-weight: bold">{{__('messages.Services')}}</a>
                                </li>
                                <li><a href="#aboutus" style="text-transform:uppercase; font-weight: bold">{{__('messages.About US')}}</a>
                                </li>
                                <li><a href="#contact-sec" style="text-transform:uppercase; font-weight: bold">{{__('messages.Contact')}}</a>
                                </li>
                                <li class="dropdown text-black">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform:uppercase; font-weight: bold">{{ __('messages.lang') }}</a>
                                    <ul class="dropdown-menu">
                                        @foreach( LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li class="dropdown-item">
                                                <a style="color: black" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    {{ $properties['native'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                    </div>
                    </div>
                    <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container -->
                </nav>

            <!--End Navigation -->

        </nav>
        <!-- End Navigation -->
