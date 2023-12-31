@extends('admin.layouts.app')


@section('toolbar')
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
        <div class="d-flex align-items-center me-3">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">@lang('site.vip')
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
            <!--end::Separator-->
            <!--begin::Description-->
            <small class="text-muted fs-7 fw-bold my-1 ms-1">@lang('site.Edit')</small>
            <!--end::Description--></h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->

    </div>
    <!--end::Container-->
</div>
@endsection

@section('content')

@include('admin.includes.messages')

        <div class="container-fluid page__container p-2">

            <div class="card rounded card-form__body card-body shadow-lg">
                <form method="post" action="{{ route('vip.update', $vip->id) }}" enctype="multipart/form-data">
                    @csrf

                @method('put')
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">@lang('site.Title') @lang('site.in English')</label>
                    <input type='text' name="title_en" class="form-control" value="{{ $vip->title_en }}" />
                </div>
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">@lang('site.Title') @lang('site.in Arabic') </label>
                    <input type='text' name="title_ar" class="form-control" value="{{ $vip->title_ar }}" />
                </div>
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">@lang('site.Description') @lang('site.in English') </label>
                    <textarea name="des_en" class="form-control" >{{ $vip->des_ar }}</textarea>
                </div>
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">@lang('site.Description') @lang('site.in Arabic') </label>
                    <textarea name="des_ar" class="form-control" >{{ $vip->des_en }}</textarea>
                </div>

                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">@lang('site.months_no')</label>
                    <input type='number' name="months_no" class="form-control" value="{{ $vip->months_no }}" />
                </div>
                <div class="form-group mb-10">
                    <label for="exampleFormControlInput1" class="required form-label">@lang('site.Price')</label>
                    <input type='number' name="price" class="form-control" value="{{ $vip->price }}" />
                </div>







                    <div class="text-right mb-5">
                        <input type="submit" name="add" class="btn btn-success" value="@lang('site.Update')">
                    </div>
                </form>
            </div>
        </div>
        <!-- // END drawer-layout__content -->
    </div>
@stop
