@extends('auth.layouts.header')

@section('content')
    <div class="row g-0 flex-fill vh-100">
        <!-- Left Column -->
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="{{ url('admin') }}" class="navbar-brand">
                        <img class="dark-mode-item navbar-brand-item" src="{{ asset('assets/images/logo-light.svg') }}"
                            alt="logo">                        
                        </a>
                </div>

                <form method="POST" action="#" id="login-form" class="js-base-form dirty-check">
                    @csrf

                    <h2 class="h3 text-center mb-3">{{ __('Sign In Below') }}</h2>
                        
                    <div class="mb-3">
                        <label for="email" class="form-label required">{{ __('Email') }}</label>
                        <input class="form-control" name="email" id="email"
                            placeholder="Enter your email address" required value="{{ old('email','') }}"
                            tabindex="1">
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label required">
                            {{ __('Password') }}
                            <span class="form-label-description">
                                <a href="#" tabindex="5">Lost your password?</a>
                            </span>
                        </label>
                        <input class="form-control" type="password" name="password" id="password"
                            placeholder="Enter your password" required tabindex="2">
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check">
                        <input type="checkbox" id="remember" name="remember" class="form-check-input" value="1"
                            checked tabindex="3">
                        <span class="form-check-label">Remember me</span>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-footer">
                        <button class="btn btn-primary  w-full" type="submit">
                            <svg class="icon icon-left svg-icon-ti-ti-login-2" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                <path d="M3 12h13l-3 -3" />
                                <path d="M13 15l3 -3" />
                            </svg>
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Column -->
        <div class="position-relative col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover bg-white h-100 min-vh-100"
                style="background-image: url({{ asset('vendor/core/core/acl/images/backgrounds/2.jpg') }});"></div>
            <div class="end-0 bottom-0 position-absolute">
                <div class="text-white me-5 mb-4">
                    <h1 class="mb-1">
                        <img class="dark-mode-item navbar-brand-item ml-5" style="margin-left: -23px;"
                            src="{{ asset('assets/images/logo-light.svg') }}" alt="logo">
                    </h1>
                    <p>{{ __('Copyright :year © WeGeni. :version', ['year' => date('Y'), 'version' => 'All Rights Reserved']) }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendor/core/core/base/js/core-ui.js') }}"></script>
    <script src="{{ asset('vendor/core/core/base/libraries/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('vendor/core/core/base/js/core.js') }}"></script>
    <script src="{{ asset('vendor/core/core/base/libraries/mcustom-scrollbar/jquery.mCustomScrollbar.js') }}"></script>
    <script src="{{ asset('vendor/core/core/base/libraries/fslightbox.js') }}"></script>
    <script src="{{ asset('vendor/core/core/js-validation/js/js-validation.js') }}"></script>
    <script src="{{ asset('vendor/core/core/base/libraries/jquery.are-you-sure/jquery.are-you-sure.js') }}"></script>
    <script src="{{ asset('vendor/core/plugins/language/js/language-global.js') }}"></script>
    <script src="{{ asset('vendor/core/packages/slug/js/slug.js') }}"></script>
    <div id="stack-footer">

        <script>
            jQuery(document).ready(function () {
                'use strict';
        
                // Apply validation to the login form
                $("#login-form").validate({
                    errorElement: 'div',
                    errorClass: 'invalid-feedback',
        
                    errorPlacement: function (error, element) {
                        if (element.closest('[data-bb-toggle="tree-checkboxes"]').length) {
                            error.insertAfter(element.closest('[data-bb-toggle="tree-checkboxes"]'));
                        } else if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                            error.insertAfter(element.parent());
                        } else if ($(element).data('select2')) {
                            error.insertAfter(element.next('span'));
                        } else {
                            error.insertAfter(element);
                        }
                    },
        
                    highlight: function (element) {
                        $(element).closest('.form-control').removeClass('is-valid').addClass('is-invalid');
                    },
        
                    unhighlight: function (element) {
                        $(element).closest('.form-control').removeClass('is-invalid').addClass('is-valid');
                    },
        
                    success: function (label) {
                        label.closest('.form-control').removeClass('is-invalid').addClass('is-valid');
                    },
        
                    focusInvalid: true,
        
                    rules: {
                        email: {
                            required: true,
                            email: true,
                            minlength: 6,
                            maxlength: 255
                        },
                        password: {
                            required: true,
                            minlength: 6,
                            maxlength: 60
                        }
                    },
                    messages: {
                        email: {
                            required: "The email address field is required.",
                            email: "Please enter a valid email address.",
                            minlength: "The password must be at least 6 characters.",
                            maxlength: "The email address must not be greater than 255 characters."
                        },
                        password: {
                            required: "The password field is required.",
                            minlength: "The password must be at least 6 characters.",
                            maxlength: "The password must not be greater than 60 characters."
                        }
                    }
                });
            });
        </script>
        


    </div>
@endsection
