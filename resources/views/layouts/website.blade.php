<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Intern System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- <link href="{{ asset('frontend/assets/css/now-ui-kit.css?v=1.2.0') }}" rel="stylesheet" /> -->
    <link href="{{ asset('frontend/assets/css/soft-design-system.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.css') }}">

    <!-- <link href="{{ asset('frontend/assets/css/navbar.css') }}" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/navbar.css') }}"> -->

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="{{ asset('frontend/assets/demo/demo.css') }}" rel="stylesheet" /> -->
</head>

<body>
    <div class="main home">

        <div class="top">
            <div class="container">
                <div class="menu-left">
                    <ul class="menu-items">
                        {{-- <li class="menu-item"><a href="" class="menu-link">test</a></li>
                        <li class="menu-item"><a href="" class="menu-link">test</a></li>
                        <li class="menu-item"><a href="" class="menu-link">test</a></li>
                        <li class="menu-item"><a href="" class="menu-link">test</a></li> --}}
                        <li class="menu-item"><a class="menu-link" href="{{ route('register.admin') }}"> Admin Register </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('login.admin') }}"> Admin Login </a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('login.employer') }}"> Employer Login </a></li>

                    </ul>
                </div>
            </div>

        </div>
        <div class="navigation  sticky-top">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container">
                    <a class="navbar-brand" href="#"><img src="{{ asset('frontend/assets/img/sikaru blue.png') }}"
                            alt="" class="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
                        onclick="console.log('test')">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <!-- <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown link
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                  </ul> -->
                    </div>
                </div>
            </nav>
        </div>
        {{-- main content goes here --}}

        @yield('content')

        {{-- main content ends here --}}
    </div>
    <section class="login-div ">
        <span class="">Search, Apply & Get Job: FREE</span>
        <a href="{{ route('register.user') }}"><button class="btn btn-success register my-auto">Register</button></a>
        <a href="{{ route('login.user') }}"><button class="btn btn-danger login my-auto">Login</button></a>
        <i class="fas fa-building"></i><a href="{{ route('register.employer') }}" class="employer"> Are You an Employer?</a>
    </section>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <img src="{{ asset('frontend/assets/img/sikaru white.png') }}" alt="footer_logo"
                                class="img-fluid">
                        </a>
                        <p class="footer-info-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et aliquid temporibus, voluptatum
                            omnis nobis quisquam.
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                    <div class="footer-quote">
                        <!-- <img src="../assets/img/sikaru white.png" style="" alt=""> -->
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Lalitpur, Nepal</h3>
                                    <p>Lagankhel</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>9849111111</h3>
                                    <p>Give us a call</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Team</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="#">Faq</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Subscribe</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos labore ducimus laborum,
                                    facilis officia doloremque?</p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2021, Samundra Raj Bajracharya</span>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Terms</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
        <!-- End Back to top -->
    </footer>

    <script src="{{ asset('frontend/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('frontend/assets/js/plugins/bootstrap-switch.js') }}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('frontend/assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker --><script src="{{ asset('frontend/assets/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->


    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('frontend/assets/js/now-ui-kit.js?v=1.2.0') }}" type="text/javascript"></script>
    <!-- <script src="{{ asset('frontend/assets/js/soft-design-system.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('frontend/assets/js/carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            console.log($(".footer-form button").height());
            $(".footer-quote").css('margin-top', $(".footer-box-info").height() + 20);

            $(".footer-form button").css("height", $(".footer-form .form-control").outerHeight());
            // $(".footer-form .form-control").css("margin-top","2px");
            $('#pills-tab a').on('click', function(e) {
                e.preventDefault()
                $(this).tab('show')
            })
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,
                nav: false,
                autoplay: true,
                autoplaySpeed: 9000,
                autoplayTimeout: 3000,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 5
                    },
                    1000: {
                        items: 9
                    }
                }
            })



        })
    </script>

</body>

</html>
