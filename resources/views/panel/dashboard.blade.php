@extends('panel.layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-3">

                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <i class="ki-duotone ki-chart-simple text-primary fs-2x ms-n1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span></i>

                            <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">
                                @php
                                    $total = '';
                                    if ($user->hasrole('customer')) {
                                        $total = $post->where('user_id', $user->id)->count();
                                    } else {
                                        $total = $post->count();
                                    }
                                @endphp
                                {{ $total }}
                            </div>

                            <div class="fw-semibold text-gray-400">
                                Total Ad Post</div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-3">

                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <i class="ki-duotone ki-cheque text-gray-100 fs-2x ms-n1"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span><span class="path7"></span></i>

                            <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">
                                @php
                                    $total = '';
                                    if ($user->hasrole('customer')) {
                                        $total = $post
                                            ->where('user_id', $user->id)
                                            ->where('status', 'active')
                                            ->count();
                                    } else {
                                        $total = $post->where('status', 'active')->count();
                                    }
                                @endphp
                                {{ $total }}
                            </div>

                            <div class="fw-semibold text-gray-100">
                                Total Active Ads </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-3">

                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <i class="ki-duotone ki-briefcase text-white fs-2x ms-n1"><span class="path1"></span><span
                                    class="path2"></span></i>

                            <div class="text-white fw-bold fs-2 mb-2 mt-5">
                                @php
                                    $total = '';
                                    if ($user->hasrole('customer')) {
                                        $total = $post
                                            ->where('user_id', $user->id)
                                            ->where('status', 'unactive')
                                            ->count();
                                    } else {
                                        $total = $post->where('status', 'unactive')->count();
                                    }
                                @endphp
                                {{ $total }}
                            </div>

                            <div class="fw-semibold text-white">
                                Total Unactive Ads </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-3">

                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <i class="ki-duotone ki-chart-pie-simple text-white fs-2x ms-n1"><span
                                    class="path1"></span><span class="path2"></span></i>

                            <div class="text-white fw-bold fs-2 mb-2 mt-5">
                                @php
                                    $total = '';
                                    if ($user->hasrole('customer')) {
                                        $total = $post
                                            ->where('user_id', $user->id)
                                            ->where('admin_apporval', 'pending')
                                            ->count();
                                    } else {
                                        $total = $post->where('admin_apporval', 'pending')->count();
                                    }
                                @endphp
                                {{ $total }}
                            </div>

                            <div class="fw-semibold text-white">
                                Total Pending Ads </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="g-5 gx-xxl-8">
                <!--begin::Tables Widget 10-->
                <div class="card">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder fs-3 mb-1">Recent Posted Ads</span>
                        </h3>
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <a href="{{ ($user->hasrole('customer')) ? route('ad-post') : route('adpost.admin') }}" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000"
                                                opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000"
                                                opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000"
                                                opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            @php
                                $total = '';
                                if ($user->hasrole('customer')) {
                                    $total = $latestpost->where('user_id', $user->id);
                                } else {
                                    $total = $latestpost;
                                }
                            @endphp
                            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="border-0">
                                        <th class="p-0"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-200px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-100px text-end"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($total as $data)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-45px me-5">
                                                        <img alt="Pic"
                                                            src="{{ asset('public/adpost/features/image/' . $data->feature_image) }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="#"
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $data->title }}</a>
                                                        <a href="#"
                                                            class="text-muted text-hover-primary fw-bold text-muted d-block fs-7">
                                                            <span class="text-dark">Description</span>: {{ implode(' ', array_slice(str_word_count($data->description, 1), 0, 10)) }}</a>
                                                    </div>
                                                    <!--end::Name-->
                                                </div>
                                            </td>
                                            <td class="text-muted fw-bold text-end">{{ $data->price_per_day.' /per day' }} <br>
                                                {{ $data->price_per_week.' /per week' }} <br>
                                                {{ $data->price_per_month.' /per month' }}</td>
                                            <td class="text-muted fw-bold text-end">{{ ucwords($data->type->name) }}, {{ ucwords($data->category->name) }}</td>
                                            <td class="text-end">
                                                @if ($data->status == 'active')
                                                    <span class="badge badge-light-success">Active</span>
                                                    @elseif($data->status == 'unactive')
                                                    <span class="badge badge-light-danger">Unactive</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg')}}-->
                                                    <i class="fas fa-eye"></i>

                                                    <!--end::Svg Icon-->
                                                </a>
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
                <!--end::Tables Widget 10-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection
