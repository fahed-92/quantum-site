@extends('frontend.layouts.master')
@section('title')
@section('content')
    <!--Header section  -->
    <div id="home">
        <div class="container" >
            <div class="row ">
                <div class="col-md-9 col-sm-9">
                    <h1 class="head-main" style="color: black">{{ setting()->title ?? '' }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!--End Header section  -->
    <!--Products Section-->
    <section  id="products">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>{{__('messages.Our Products')}}</h2>
                </div>
            </div>
            <div class="row text-center space-pad">
                <div class="col-md-12 col-sm-12">
                    <div>
                        <p>
                            @foreach($services as $service)
                              <h3 class="font-weight-bold">{{$service->title}}:</h3>
                                <br>
                        <h4>{!!$service->description !!}</h4>
                                <br>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Products Section-->
    <!--Services Section-->
    <section  id="services">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>{{__('messages.Our Services')}}</h2>

                </div>

            </div>

            <div class="row text-center space-pad">
                <div class="col-md-3 col-sm-3">
                    <div>
                        <i class="fa fa-unlock fa-4x main-color"></i>
                        <h3>{{__('messages.IT Infrastructure & Networking')}}</h3>

                    </div>

                </div>
                <div class="col-md-3 col-sm-3">

                    <div>
                        <i class="fa fa-code fa-4x main-color"></i>
                        <h3>{{__('messages.Web Design & Development')}}</h3>
                    </div>

                </div>
                <div class="col-md-3 col-sm-3">

                    <div>
                        <i class="fa fa-dashboard fa-4x main-color"></i>
                        <h3>{{__('messages.ERP Development & Customization')}} </h3>
                    </div>

                </div>
                <div class="col-md-3 col-sm-3">
                    <div>
                        <i class="fa fa-adjust fa-4x main-color"></i>
                        <h3>{{__('messages.CRM Development & Customization')}}</h3>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Services Section-->
    <!--AboutUs Section-->
    <section  id="aboutus">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>{{__('messages.About US')}}</h2>
                </div>
            </div>
            <div class="row text-center space-pad">
                <div class="col-md-12 col-sm-12">
                    <div>
                        <img src="{{asset('frontend\assets\img\logo.jpeg')}}" style="opacity: 0.8; border-radius: 25%" class="img-fluid" height="200">
                            <h2>{{ aboutUs()->title_aboutus }}</h2>
                            <p>{!! aboutUs()->desc_aboutus !!}</p>
                        <p>
                            <h2>{{ aboutUs()->title_our_mission }}</h2>
                            <p>{!! aboutUs()->desc_our_mission !!}</p>
                        </p>
                        <p>
                            <h2>{{ aboutUs()->title_admin_word }}</h2>
                        <p>{!! aboutUs()->desc_admin_word !!}</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End AboutUs Section-->
    <!--parallax one-->
    <section  id="Parallax-one">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                </div>
            </div>
        </div>
    </section>
    <!--./parallax one-->
    {{--<!-- Pricing Section -->--}}
    <section  id="clients">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>{{__('messages.Our Clients')}}</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 ">
                    @foreach($clients as $client)
                        <div class="col-md-3 col-sm-6">
                            <img src="{{asset('frontend/assets/img/folder/' . $client->image)}}" class="img-fluid" height="200">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{--<!--End Pricing Section -->--}}
    {{--<!--parallax two-->--}}
    <section  id="Parallax-two">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                </div>
            </div>
        </div>
    </section>
    <!--./parallax two-->
    <!-- Contact Section -->
    <section  id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="social-icon">
                        <strong> {{__('messages.Address')}}:</strong> {{setting()->address_center}}
                        <a href="{{setting()->facebook_link}}"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="{{setting()->instagram_link}}"><i class="fa fa-instagram fa-2x"></i></a>
                        <a href="{{setting()->twitter_link}}"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="{{setting()->linkedin_link}}"><i class="fa fa-linkedin fa-2x"></i></a>
                        <a href="{{setting()->youtube_link}}"><i class="fa fa-youtube fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section -->
@endsection
