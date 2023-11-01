@extends('auth.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-1000px positon-xl-relative" style="background-image: url('panel/assets/images/bg.jpeg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
                <!--begin::Wrapper-->
                {{-- <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px">
                </div> --}}
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        {{-- id="kt_sign_in_form" --}}
                        <form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">
                                    <!--begin::Logo-->
                                    <a href="../../demo6/dist/index.html" class="py-9 mb-5">
                                        <img alt="Logo" src="{{ asset('home/assets/images/logo.png') }}" class="h-100px" />
                                    </a>
                                    <!--end::Logo-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus />

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
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    @if (Route::has('password.request'))
                                        <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password ?') }}
                                        </a>
                                    @endif
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"ss type="password"
                                     name="password" required
                                    autocomplete="current-password" />

                                @error('password')
                                    <!--begin::Alert-->
                                    <div
                                        class="alert alert-dismissible bg-light-danger d-flex flex-column flex-sm-row p-5 mt-4 mb-10">

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column pe-0 pe-sm-10">
                                            <h5 class="fw-bold text-danger" style="line-height: 40px;">Error!
                                                {{ $message }}</h5>
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
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                {{-- id="kt_sign_in_submit" --}}
                                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Sign In</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                                <!--begin::Separator-->
                                <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                                <!--end::Separator-->
                                <a href="{{ route('register') }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <i class="fa fa-envelope fa-3" style="font-size:20px !important; color:#ffb000 !important;"></i>Continue with Mail
                                </a>
                                <!--end::Email link-->
                                <!--begin::Google link-->
                                <a href="{{ route('redirect.google') }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo"
                                        src="{{ asset('panel/assets/media/svg/brand-logos/google-icon.svg') }}"
                                        class="h-20px me-3" />Continue with Google</a>
                                <!--end::Google link-->
                                <!--begin::Google link-->
                                <a href="{{ route('redirect.facebook') }}" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo"
                                        src="{{ asset('panel/assets/media/svg/brand-logos/facebook-4.svg') }}"
                                        class="h-20px me-3" />Continue with Facebook</a>
                                <!--end::Google link-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
@endsection
