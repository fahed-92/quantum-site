@extends('dashboard.layouts.app')
@section('title', 'إضافة خدمة')
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ __('messages.dashboard') }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">{{ __('messages.Home') }}</a></li>
                    <li class="breadcrumb-item active">{{ __('messages.add item') }}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <!-- DataTales Example -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('messages.Product\'s features') }}</h4>
                    <p class="card-title-desc">{{ __('messages.Add New Product\'s feature') }}</p>
                    <form class="form row" method="POST" enctype="multipart/form-data" action="{{ route('dashboard.'.$module_name_plural.'.store') }}">
                        @method('POST')
                        @include('dashboard.'.$module_name_plural.'.form')
                        <div class="col-md-12">
                            <div class="form-group mt-2">
                                <button class="btn btn-primary waves-effect btn-label waves-light" style="background-color: #175f3f;"><i class="bx bx-plus label-icon"></i>{{ __('messages.add') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
