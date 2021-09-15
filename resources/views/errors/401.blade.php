@extends('layouts.auth')

@section('content')
    @php
    if (Request::is('sikaruApanel/*')) {
        $route = 'login.admin';
        $title = 'Admin Panel Dashboard';
    } elseif (Request::is('employer/*')) {
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
                        <h4 class="text-center text-white">Sorry, {{ $exception->getMessage() }}</h4>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
