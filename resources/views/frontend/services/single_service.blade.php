@extends('frontend.layouts.master')
@section('title', $row->title.' |')
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
                <h1>{{ $row->title }}</h1>
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> {{ __('messages.Home') }}</a></li>
                    <li><a href="{{ route('services') }}">{{ __('messages.Center services') }}</a></li>
                    <li class="active">{{ $row->title }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->
<!-- Start Our About ============================================= -->
<div class="about-area bg-gray overflow-hidden default-padding">
    <div class="container">
        <div class="about-items choseus-items left-thumb">
            <div class="row align-center">
                <div class="col-lg-6">
                    <div class="thumb wow fadeInUp" data-wow-delay="0.5s">
                        {{-- <img src="{{ asset('frontend') }}/assets/img/illustration/5.png" alt="Thumb"> --}}
                        <img src="{{ $row->image }}" class="img-fluid" alt="{{ $row->title }}">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info wow fadeInRight">
                        <small>{{ __('messages.Center services') }}</small>
                        <h2>{{ $row->title }}</h2>
                        <div>{!! $row->description !!}</div>
                        <button type="button" class="btn btn-primary mt-3"> <a href="https://wa.me/message/F5R4BY3V7AD4L1">{{ __('messages.Contact Us') }}</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Our About -->

@include('frontend.layouts.modal')

@endsection
