@extends('layouts.auth')

@section('content')

    <div class="banner page-header relative">
        <div class="container">
            <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto logo">
                        <img src="{{ asset('frontend/assets/img/sikaru white.png') }}" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="col posting">
                        <h3>{{ __('Register') }}</h3>
                        {{-- <p>Login to start your new journey</p> --}}
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="register-section">

        <!-- Registeration Form -->
        <div class="register-form">
            @php
                if (Request::is('sikaruApanel/*')) {
                    $route = 'register.admin';
                } elseif (Request::is('employer/*')) {
                    $route = 'register.employer';
                } elseif (Request::is('user/*')) {
                    $route = 'register.user';
                }
            @endphp

            <form method="POST" action="{{ route($route) }}">
                @csrf
                <div class="row">

                    <!-- First Name -->
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="name" type="text" placeholder="Full Name"
                            class="form-control bg-white border-left-0 border-md @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- username --}}
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="username" type="text" placeholder="Username"
                            class="form-control bg-white border-left-0 border-md @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="username">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- email --}}
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="email" type="email" placeholder="E-Mail Address"
                            class="form-control bg-white border-left-0 border-md @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- password --}}
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="password" type="password" placeholder="Password"
                            class="form-control bg-white border-left-0 border-md @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- confirm password --}}
                    <div class="input-group col-lg-6 mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                        </div>
                        <input id="password-confirm" type="password" placeholder="Confirm Password"
                            class="form-control bg-white border-left-0 border-md " name="password_confirmation" required
                            autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button type="submit" class="btn btn-blue btn-block py-2">
                            <span class="font-weight-bold">Create your account</span>
                        </button>
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Already Registered? <a href="login.html"
                                class="text-blue ml-2">Login</a></p>
                    </div>

                </div>
            </form>
        </div>

    </div>

@endsection
