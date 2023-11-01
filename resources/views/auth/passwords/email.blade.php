@extends('auth.layouts.app')
@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Password reset -->
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
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100" action="{{ route('password.email') }}" method="POST" novalidate="novalidate">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Forgot Password ?</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            @if (session('status'))
                                <div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row p-5 mt-4 mb-10" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <label class="form-label fw-bolder text-gray-900 fs-6">Email</label>
                            <input class="form-control form-control-solid @error('email') is-invalid @enderror"
                                id="email" type="email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus />

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
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                            <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">
                                <span class="indicator-label">Send Password Reset Link</span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Password reset-->
    </div>
@endsection
