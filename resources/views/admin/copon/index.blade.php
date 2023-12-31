@extends('admin.layouts.app')


@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">@lang('site.coupons')
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1"></small>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->
    </div>
@endsection

@section('content')

    <div class="card rounded mb-5 mb-xl-8 shadow-lg">
        <!--begin::Header-->
        <div class="card-header rounded border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">@lang('site.All') @lang('site.coupons')</span>
            </h3>

            <div class="card-toolbar">
            <a href="{{route('copon.create')}}" class="btn btn-sm btn-light-primary">
            <!--begin::Svg Icon | path: icons/stockholm/Communication/Add-user.svg-->
            <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                </svg>
            </span>
            <!--end::Svg Icon-->@lang('site.add') @lang('site.coupons') +</a>
        </div>

        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Table container-->
            <div class="table-responsive rounded">
                <!--begin::Table-->
                <table class="table table-hover align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="text-center border-3 fw-bolder text-muted bg-light">
                            <th class="ps-2 min-w-125px rounded-start">@lang('site.coupon')</th>
                            <th class="ps-2 min-w-125px rounded-start">@lang('site.percentage')</th>

                            <!-- <th class="min-w-125px">@lang('site.product')</th> -->
                            <th class="min-w-125px">@lang('site.Expire At')</th>
                            <!-- <th class="min-w-150px">Status</th> -->
                            <th class="min-w-125px rounded-end">@lang('site.actions')</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($copons as $c)
                            <tr class="text-center border-3 m-auto">

                                 <td class="px-3">
                                    <div class="d-flex align-items-center">

                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $c->code }}</a>
                                        </div>


                                    </div>


                                </td>
                                 <td class="px-3">
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $c->data->get('discount') }} %</a>
                                    </div>
                                </td>

                                 <!-- <td class="px-3">
                                    <div class="d-flex align-items-center">

                                        <div class="d-flex flex-column">
                                            <a href="#"
                                                class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $c->product->name_en ?? '' }}</a>
                                        </div>
                                    </div>
                                </td> -->
                                 <td class="px-3">
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $c->expires_at->format('Y-m-d') }}</a>
                                    </div>
                                </td>

                                 <td class="px-3">


                                    <form action="{{ route('copon.destroy', $c->id) }}" method="post" id='delform'
                                        style="display: inline-block">
                                        @csrf
                                        @method('delete')


                                        <button type="submit" class="btn btn-defult btn-xs delete" style='width:20px'><i
                                                class="fa fa-trash"></i> </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 11-->
@endsection



<!--begin::Tables Widget 11-->
