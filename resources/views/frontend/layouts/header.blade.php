<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>@yield('title') {{ setting()->title ?? '' }}</title>
    <meta name="description" content="{{ setting()->description ?? '' }}">
    <meta name="keywords" content="{{ setting()->keywords ?? '' }}">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Arabic">
    <meta name="revisit-after" content="10 days">
    <meta name="author" content="MediaNature">
    <link rel="icon" type="image/x-icon" href="frontend\assets\img\logo.jpeg">

    <!-- Facebook Meta Tags -->
    {{-- <meta property="og:url" content="{{ env('APP_URL') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title') {{ setting()->title ?? '' }}">
    <meta property="og:description" content="{{ setting()->description ?? '' }}">
    <meta property="og:image" content="{{ asset('frontend/assets/img/og.png') }}"> --}}

{{--    <!-- Twitter Meta Tags -->--}}
{{--    <meta name="twitter:card" content="summary_large_image">--}}
{{--    <meta property="twitter:domain" content="">--}}
{{--    <meta property="twitter:url" content="{{ env('APP_URL') }}">--}}
{{--    <meta name="twitter:title" content="@yield('title') {{ setting()->title ?? '' }}">--}}
{{--    <meta name="twitter:description" content="{{ setting()->description ?? '' }}">--}}
{{--    <meta name="twitter:image" content="{{ asset('frontend/assets/img/og.png') }}">--}}

    <!-- ========== Favicon Icon ========== -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('frontend/assets/img/favicon.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">

    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{ asset('frontend') }}/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="{{ asset('frontend') }}/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{ asset('frontend') }}/assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    @stack('styles')
</head>
