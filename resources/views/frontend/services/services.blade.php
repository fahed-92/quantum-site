@extends('frontend.layouts.master')
@section('title', 'خدمات المركز |')
@section('content')
<!-- Start Breadcrumb
    ============================================= -->
<div class="breadcrumb-area gradient-bg text-light text-center">
    <!-- Fixed BG -->
    <div class="fixed-bg" style="background-image: url({{ asset('frontend') }}/assets/img/shape/1.png);"></div>
    <!-- Fixed BG -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{ __( 'messages.Center services') }}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('messages.Home') }}</a></li>
                    {{-- <li><a href="#">Pages</a></li> --}}
                    <li class="active">{{ __('messages.Center services') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services
    ============================================= -->
<div class="services-area text-center carousel-shadow wavesshape-bottom default-padding-top">
    <div class="container">
        <div class="service-items">
            <div class="row">
                <div class="feature-box text-left col-lg-12">
                    <div class="row">
                        @foreach ($rows as $row)
                        <div class="col-lg-4">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="image-service mb-3" style="width: 100%; height: 200px;">
                                    <img src="{{ $row->image }}" class="img-fluid" style="object-fit: cover; height: 100%;" alt="{{ $row->title }}">
                                </div>
                                <div class="info">
                                    <h4>{{ $row->title }}</h4>
                                    <p>{!! Str::limit(strip_tags($row->description), 155, '...') !!}</p>
                                </div>
                                <div class="bottom">
                                    <a class="btn circle btn-sm btn-gradient"
                                        href="{{ route('service', [$row->id, $row->slug]) }}">{{ __('messages.read more') }} <i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="waveshape">
        <img src="{{ asset('frontend') }}/assets/img/shape/2.svg" alt="Shape">
    </div>
</div>
<!-- End Services -->

@endsection
