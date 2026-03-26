<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DentCare - Dental Clinic Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('asset/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <!-- Libraies Stylesheet --
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('blog/css/style.css')}}" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('asset/lib/twentytwenty/twentytwenty.css')}}" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    
    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>abduraximsharifjonov466@gmail.com</p>
                       </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+998 99 461-22-45</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i> @lang('word.logo')</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 ">
                    <a href="{{ route('index')}}" class="nav-item nav-link active">@lang('word.home')</a>
                    <a href="{{ route('about')}}" class="nav-item nav-link">@lang('word.about')</a>
                    <a href="{{route('service')}}" class="nav-item nav-link">@lang('word.service')</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">@lang('word.pages')</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('price')}}" class="dropdown-item">@lang('word.price')</a>
                            <a href="{{route('team')}}" class="dropdown-item">@lang('word.team')</a>
                            <a href="{{route('testiominal')}}" class="dropdown-item">@lang('word.testiominal')</a>
                            <a href="{{route('appointment')}}" class="dropdown-item">@lang('word.appointment')</a>
                        </div>
                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">@lang('word.contact')</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">@lang('word.lang')</a>
                        <div class="dropdown-menu m-0">
                            <a href="/lang/uz" class="dropdown-item">O'zbek</a>
                            <a href="/lang/ru" class="dropdown-item">Russ</a>
                            <a href="/lang/en" class="dropdown-item">Engilish</a>
                        </div>
                    </div>
                </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa-solid fa-search"></i></button>
            <a href="{{ route('login')}}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center"">
                   <form action="{{ url('search')}}" method="GET">
                        <div class="input-group" style="max-width: 800px;">
                            <input type="search" name="q" autocomplete="off" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                            <button class="btn btn-primary px-4"><i class="fa fa-search"></i></button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    @if (Session::has('message'))
        <p class="alert alert-danger">{{ Session::get('message') }}</p>
    @endif



          @yield('content')

    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
            @if($mess = Session::get('email'))
            <p class="alert alert-success">{{ $mess}}</p>
            @endif
                <form action="{{route('mail.post')}}" method="POST" class="mx-auto" style="max-width: 600px;">
                @csrf
                    <div class="input-group">
                        <input type="text" name="email" class="form-control border-white p-3" placeholder="@lang('word.footer_select_email')">
                        <button class="btn btn-dark px-4">@lang('word.footer_select_btn')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">@lang('word.quick_links')</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_home')</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_about')</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_service')</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_blog')</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_contact')</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">@lang('word.popular_links')</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_home')</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_about')</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_service')</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_blog')</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>@lang('word.footer_contact')</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">@lang('word.get_in_touch')</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>11 Street, Uzbekistan, Tashkent</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>abduraxim466@gmail.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+998994612245</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">@lang('word.follow')</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('asset/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('asset/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('asset/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('asset/lib/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('asset/lib/twentytwenty/jquery.twentytwenty.js')}}"></script>
    <!-- JavaScript Libraries -->
    <script src="{{ asset('blog/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('blog/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('blog/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('blog/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('blog/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('blog/lib/lightbox/js/lightbox.min.js')}}"></script>
    <!-- Contact Javascript File -->
    <script src="{{asset('blog/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('blog/mail/contact.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('blog/js/main.js')}}"></script>
    <!-- end blog -->
    <!-- Template Javascript -->
    <script src="{{asset('asset/js/main.js')}}"></script>

    <script>

    </script>
</body>

</html>