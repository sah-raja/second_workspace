@extends('layouts.auth')

@section('content')
    @php
    if (Request::is('sikaruApanel/*') || Request::is('sikaruApanel')) {
        $route = 'login.admin';
        $title = 'Admin Panel Dashboard';
    }elseif (Request::is('employer/*')) {
        $route = 'login.employer';
        $title = 'Employer Dashboard';
    } elseif (Request::is('user/*')) {
        $route = 'login.user';
        $title = '';
    }
    @endphp

    <div class="banner page-header relative">
        <div class="container">
            <form class="card card-sm">
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto logo">
                        <img src="{{ asset('frontend/assets/img/sikaru white.png') }}" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="col posting">
                        <h3>{{ $title.' '.__('Login') }}</h3>
                        {{-- <p>Login to start your new journey</p> --}}
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="register-section">

        <!-- Registeration Form -->
        <div class="register-form">

            <form method="POST" action="{{ route($route) }}">
                @csrf
                <div class="row">

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
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <button type="submit" class="btn btn-blue btn-block py-2">
                            <span class="font-weight-bold">LOGIN</span>
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Already Registered -->
                    <div class="text-center w-100">
                        <p class="text-muted font-weight-bold">Not Registered? <a href="login.html"
                                class="text-blue ml-2">Register Now</a></p>
                    </div>

                </div>
            </form>
        </div>

    </div>

@endsection
