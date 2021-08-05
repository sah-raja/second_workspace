@extends('layouts.website')
@section('content')

<div class="banner page-header relative">
    <div class="container">
        <form class="card card-sm">
            <div class="card-body row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="fas fa-search h4 text-body"></i>
                </div>
                <div class="col-auto">
                    <select name="" id="" class="form-control">
                        <option value="">IT</option>
                        <option value="">Accounting</option>
                    </select>
                </div>
                <!--end of col-->
                <div class="col">
                    <input class="form-control form-control-borderless src_fild" type="search"
                        placeholder="Search topics or keywords">
                </div>
                <!--end of col-->
                <div class="col-auto">
                    <button class="btn btn-lg btn-success src_btn" type="submit">Search</button>
                </div>
                <!--end of col-->
            </div>
        </form>
        <img class="intern" src="{{ asset('frontend/assets/img/intern.png') }}" alt="">

    </div>
    <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </path>
            </defs>
            <g class="moving-waves">
                <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40"></use>
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95"></use>
            </g>
        </svg>
    </div>
</div>

<div class="content jobs">
    <div class="container">
        <div class="row">
            <div class="col-md-3 carousel-container">
                <h3>Hot Posts</h3>
                <ul class="carousel container">
                    <li><a href="">Test1</a> </li>
                    <li><a href="">Test2</a> </li>
                    <li><a href="">Test3</a> </li>
                    <li><a href="">Test4</a> </li>
                    <li><a href="">Test5</a> </li>
                    <li><a href="">Test6</a> </li>
                    <li><a href="">Test7</a> </li>
                    <li><a href="">Test8</a> </li>
                    <li><a href="">Test9</a> </li>

                </ul>
            </div>
            <div class="col-md-8 topjobs-container">
                <h3>Top Jobs</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                            <i class="fab fa-facebook" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                          </button>
                          <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                            <i class="fab fa-github" aria-hidden="true"></i>
                          </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="card">
                            <div class="row">
                                <div class="col-sm-4 card-logo">
                                    <a href="">
                                        <img class="w-100 rounded-1 "
                                            src="{{ asset('frontend/assets/img/sikaru blue.png') }}">

                                    </a>
                                </div>
                                <div class="col-sm-8 card-details">
                                    <div class="card-body text-left">
                                        <div class="p-md-0 pt-3">
                                            <h5 class="font-weight-bolder mb-0">Sikaru Nepal</h5>
                                            <p class="text-uppercase text-sm font-weight-bold mb-2">Customer
                                                Support</p>
                                        </div>
                                        <p class="time-remaining"> 14 days, 6 hours left</p>
                                        <!-- <button type="button" class="btn btn-facebook btn-simple btn-lg mb-0 pe-3 ps-2">
                          <i class="fab fa-facebook" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-twitter btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-twitter" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn btn-github btn-simple btn-lg mb-0 px-2">
                          <i class="fab fa-github" aria-hidden="true"></i>
                        </button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row browseby" style="margin-left:0;margin-right:0">
    <h3>Browse by Category</h3>
    <ul class="nav nav-pills mb-3 nav-fill p-1" id="pills-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="pills-skill-tab" data-toggle="pill" href="#pills-skill" role="tab"
                aria-controls="pills-skill" aria-selected="true">Skills</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-company-tab" data-toggle="pill" href="#pills-company" role="tab"
                aria-controls="pills-company" aria-selected="false">Company</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pills-location-tab" data-toggle="pill" href="#pills-location" role="tab"
                aria-controls="pills-location" aria-selected="false">Location</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
            <div class="container">
                <ul class="tab-list">
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-company" role="tabpanel" aria-labelledby="pills-company-tab">
            <div class="container">
                <ul class="tab-list">
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-location-tab">
            <div class="container">
                <ul class="tab-list">
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                    <li class="tab-list-item"><a href="">test</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row logo-carousel" style="margin-left:0;margin-right:0" id="logo-carousel">
    <div class="owl-carousel owl-theme">
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>
        <div class="item"><a href=""><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}" alt=""></a></div>

    </div>
</div>

@endsection
