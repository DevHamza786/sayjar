@extends('auth.layouts.app')

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-1000px positon-xl-relative"
                style="background-image: url('panel/assets/images/bg.jpeg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
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
                        <form class="form w-100" novalidate="novalidate" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">
                                    <!--begin::Logo-->
                                    <a href="../../demo6/dist/index.html" class="py-9 mb-5">
                                        <img alt="Logo" src="{{ asset('home/assets/images/logo.png') }}"
                                            class="h-100px" />
                                    </a>
                                    <!--end::Logo-->
                                </h1>
                                <!--end::Title-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
                                <!--begin::Label-->
                                <label class="form-label fs-6">Before proceeding, please check your email for a verification link.If you did not receive the email</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                {{-- id="kt_sign_in_submit" --}}
                                <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Click here to request another</span>
                                </button>
                                <!--end::Submit button-->
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
        </div>''
        <!--end::Authentication - Sign-in-->
    </div>
@endsection
