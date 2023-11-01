@extends('auth.layouts.app')
@section('content')
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - New password -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="{{ route('home') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset('panel/assets/media/logos/logo-1.svg') }}" class="h-40px" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-550px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100" action="{{ route('password.update') }}" method="POST" novalidate="novalidate">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Setup New Password</h1>
                            <!--end::Title-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-10">
                            <input type="hidden" name="token" value="{{ $token }}">
                            <label class="form-label fw-bolder text-dark fs-6">Email</label>
                            <input
                                class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocuz
                                type="email" id="email" autocomplete="off" />

                            @error('email')
                                <!--begin::Alert-->
                                <div
                                    class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mt-4 mb-10">

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column">
                                        <h6 class="fw-bold text-danger" style="line-height: 40px;">
                                            {{ $message }}</h6>
                                        <!--begin::Title-->
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Close-->
                                    <button type="button"
                                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                                        data-bs-dismiss="alert">
                                        <span class="svg-icon svg-icon-1 svg-icon-danger text-danger"> X </span>
                                    </button>
                                    <!--end::Close-->
                                </div>
                                <!--end::Alert-->
                            @enderror
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" type="password" placeholder=""
                                        autocomplete="off" />
                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <!--end::Input wrapper-->
                            </div>

                            @error('password')
                                <!--begin::Alert-->
                                <div
                                    class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mt-4 mb-10">

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column">
                                        <h6 class="fw-bold text-danger" style="line-height: 40px;">
                                            {{ $message }}</h6>
                                        <!--begin::Title-->
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Close-->
                                    <button type="button"
                                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                                        data-bs-dismiss="alert">
                                        <span class="svg-icon svg-icon-1 svg-icon-danger text-danger"> X </span>
                                    </button>
                                    <!--end::Close-->
                                </div>
                                <!--end::Alert-->
                            @enderror

                            <!--end::Wrapper-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="password_confirmation" autocomplete="off" />
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Action-->
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-primary fw-bolder">
                                <span class="indicator-label">Submit</span>
                            </button>
                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - New password-->
    </div>
    <!--end::Main-->
@endsection
