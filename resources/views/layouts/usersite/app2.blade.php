<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fitness Club</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('user_site/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('user_site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('user_site/css/style.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            overflow-x: hidden !important;
        }
    </style>
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.html"
                    class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Fitness Hub</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0" style="color: #cccccc; !important">fitnesshub@gmail.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0" style="color: #cccccc; !important">+012 345 6789</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Fitness Hub</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="@auth {{ route('userDashboard') }} @else {{ route('index') }} @endauth"
                                class="nav-item nav-link {{ request()->routeIs('userDashboard') || request()->routeIs('index') ? 'active' : '' }}">
                                Home
                            </a>

                            <a href="{{ route('aboutUs') }}"
                                class="nav-item nav-link {{ request()->routeIs('aboutUs') ? 'active' : '' }}">
                                About
                            </a>

                            <a href="{{ route('user_equipments_page') }}"
                                class="nav-item nav-link {{ request()->routeIs('user_equipments_page') ? 'active' : '' }}">
                                Equipments
                            </a>

                            <a href="{{ route('pricing') }}"
                                class="nav-item nav-link {{ request()->routeIs('pricing') ? 'active' : '' }}">
                                Pricing
                            </a>

                            <a href="{{ route('contactUs') }}"
                                class="nav-item nav-link {{ request()->routeIs('contactUs') ? 'active' : '' }}">
                                Contact Us
                            </a>

                            @if (Auth::user())
                                <a href="{{ route('ourTeam') }}"
                                    class="nav-item nav-link {{ request()->routeIs('ourTeam') ? 'active' : '' }}">
                                    Trainers
                                </a>

                                <a href="{{ route('my_reseravtions_page') }}"
                                    class="nav-item nav-link {{ request()->routeIs('my_reseravtions_page') ? 'active' : '' }}">
                                    My Reservations
                                </a>
                            @endif
                        </div>
                        @if (Auth::user())

                            <div class="dropdown" style="margin-right: auto;">
                                <a href="#"
                                    class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                    id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <img src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" class="rounded-circle me-2" width="40"
                                            height="40">
                                    @else
                                        <span class="me-2">{{ Auth::user()->name }}</span>
                                        <i class="bi bi-person-circle fs-4"></i>
                                    @endif
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end text-small shadow"
                                    aria-labelledby="userDropdown">
                                    <li class="px-3 py-2">
                                        <div class="fw-bold">{{ Auth::user()->name }}</div>
                                        <div class="text-muted small">{{ Auth::user()->email }}</div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                                            <i class="bi bi-person me-2"></i> My Profile
                                        </a>
                                    </li>
                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <li>
                                            <a class="dropdown-item" href="{{ route('api-tokens.index') }}">
                                                <i class="bi bi-key me-2"></i> API Tokens
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item text-danger" type="submit">
                                                <i class="bi bi-box-arrow-right me-2"></i> Log Out
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a href="{{ url('/user-login') }}"
                                class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Join Us</a>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary mb-2" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                            <a class="text-secondary" href="#"><i
                                    class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div
                    class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                    <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                    <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">Fitness
                            Hub</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('user_site/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('user_site/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('user_site/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('user_site/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('user_site/js/main.js') }}"></script>

    @yield('scripts')
</body>

</html>
