@extends('admin.layouts.app')


@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div class="d-flex align-items-center me-3">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{__('site.Recommendations')}}
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
                <span class="card-label fw-bolder fs-3 mb-1">{{__('site.Recommendations')}}</span>
            </h3>

            <div class="card-toolbar">
            <a href="{{route('recommendation.create')}}" class="btn btn-sm btn-light-primary">
            <!--begin::Svg Icon | path: icons/stockholm/Communication/Add-user.svg-->
            <span class="svg-icon svg-icon-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                </svg>
            </span>
            <!--end::Svg Icon-->{{__('Add')}}{{__('site.Recommendations')}}+</a>
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
                            <th class="ps-2 min-w-125px rounded-start">{{__('title')}}</th>
                            <th class="ps-2 min-w-125px rounded-start">{{__('Description EN')}}</th>
                            <!--<th class="ps-2 min-w-125px rounded-start">{{__('Description AR')}}</th>-->
                            <th class="ps-2 min-w-125px rounded-start">@lang('site.Price')</th>
                            <th class="ps-2 min-w-125px rounded-start">@lang('site.Price')  @lang('site.Coins')</th>
                            <th class="ps-2 min-w-125px rounded-start">{{__('Active')}}</th>
                            <th class="ps-2 min-w-125px rounded-start">@lang('site.show')  @lang('site.free')</th>

                            <th class="min-w-125px rounded-end">{{__('Action')}}</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>
                        @foreach ($recommendations as $c)
                            <tr class="text-center border-3 m-auto">

                            <td class="px-3">
                            <div class="d-flex align-items-center">
                                {{-- <div class="symbol symbol-50px me-5">
                                    <img src="{{ $c-> image }}" class="" alt="" />
                                </div> --}}
                                <div class="d-flex flex-column">
                                    <a href="{{ route('recommendation.edit', $c->id) }}" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{$c->title_en}}</a>
                                </div>
                            </div>
                        </td>
                                 <td class="px-3">
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $c->des_en }}</a>
                                    </div>
                                </td>

                                <!--<td class="px-3">-->
                                <!--    <div class="d-flex flex-column">-->
                                <!--        <a href="#"-->
                                <!--            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $c->des_ar }}</a>-->
                                <!--    </div>-->
                                <!--</td>-->

                                <td class="px-3">
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $c->price }}</a>
                                    </div>
                                </td>
                                <td class="px-3">
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $c->price_coins }}</a>
                                    </div>
                                </td>

                                <td class="px-3">
                                    <div class="d-flex flex-column">
                                        @if($c->status == 'Active')
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                            @else
                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Close.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                        <rect x="0" y="7" width="16" height="2" rx="1"/>
                                                        <rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) " x="0" y="7" width="16" height="2" rx="1"/>
                                                    </g>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-3">
                                    <div class="d-flex flex-column">
                                        @if($c->show == 1)
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                            @else
                                            <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo1/dist/../src/media/svg/icons/Navigation/Close.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                                        <rect x="0" y="7" width="16" height="2" rx="1"/>
                                                        <rect opacity="0.3" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) " x="0" y="7" width="16" height="2" rx="1"/>
                                                    </g>
                                                </g>
                                            </svg><!--end::Svg Icon--></span>
                                        @endif
                                    </div>
                                </td>


                                 <td class="px-3">

                                 <a href="{{ route('recommendation.edit', $c->id) }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                <!--begin::Svg Icon | path: icons/stockholm/Communication/Write.svg-->
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>

                                    <form action="{{ route('recommendation.destroy', $c->id) }}" method="post" id='delform'
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
{!! $recommendations->render() !!}

@endsection



<!--begin::Tables Widget 11-->
