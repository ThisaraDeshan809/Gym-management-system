@extends('layouts.publicsite.app2')

@section('content')
    <style>
        /* Session Card Styles */
        .session-card {
            background: linear-gradient(135deg, #2a2e35 0%, #1a1d23 100%);
            border: 1px solid #343a40;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .session-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(214, 51, 132, 0.3);
            border-color: #d63384;
        }

        .session-card:hover .session-overlay {
            opacity: 1;
            background: rgba(214, 51, 132, 0.9);
        }

        .session-overlay {
            opacity: 0;
            transition: all 0.3s ease;
            background: rgba(214, 51, 132, 0);
        }

        .session-time-badge {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .training-type-badge {
            position: absolute;
            bottom: 15px;
            left: 15px;
        }

        /* Nav Pills Customization */
        .nav-pills .nav-link {
            transition: all 0.3s ease;
            margin: 0 2px;
        }

        .nav-pills .nav-link.active {
            background: linear-gradient(135deg, #d63384, #6f42c1);
            box-shadow: 0 4px 15px rgba(214, 51, 132, 0.4);
        }

        .nav-pills .nav-link:not(.active):hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        /* Empty State */
        .empty-state-icon {
            opacity: 0.7;
        }

        /* Trainer Avatar */
        .trainer-avatar img {
            object-fit: cover;
            border: 2px solid #d63384;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-pills .nav-link {
                font-size: 0.8rem;
                padding: 8px 12px;
            }

            .session-card {
                margin-bottom: 1rem;
            }
        }

        /* Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .tab-pane.active .session-card {
            animation: fadeIn 0.6s ease;
        }

        /* Badge Styles */
        .badge {
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .bg-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        /* Statistics Cards */
        .text-center .rounded-circle {
            transition: transform 0.3s ease;
        }

        .text-center:hover .rounded-circle {
            transform: scale(1.1);
        }
    </style>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Gym Center</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Build Your Body Strong With Fitness Hub
                            </h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Gym Center</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Grow Your Strength With Our Trainers
                            </h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="{{ asset('img/about.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase">About Us</h5>
                    <h1 class="display-3 text-uppercase mb-0">Your Journey to Fitness Starts Here</h1>
                </div>
                <h4 class="text-body mb-4">
                    At <span class="text-primary">Fitness Hub</span>, we believe fitness is more than just exercise – it’s a
                    lifestyle.
                    Our mission is to help you become the strongest, healthiest, and happiest version of yourself.
                </h4>
                <p class="mb-4">
                    From state-of-the-art equipment to professional trainers and tailored programs, we provide everything
                    you need to achieve your goals. Whether you’re here to build strength, lose weight, or simply live
                    a healthier life, Fitness Hub is the community that supports you every step of the way.
                </p>
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 active" data-bs-toggle="pill"
                                href="#pills-1">About Us</a>
                        </li>
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100" data-bs-toggle="pill" href="#pills-2">
                                Why Choose Us
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- About Us Tab -->
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0">
                                Established with a passion for health and wellness, Fitness Hub has grown into one of the
                                most
                                trusted fitness communities. We offer a variety of classes, personalized training sessions,
                                and
                                a supportive environment where beginners and athletes alike can thrive.
                                <br><br>
                                Our philosophy is simple: fitness should be accessible, enjoyable, and sustainable.
                                That’s why we combine expert guidance with modern facilities and a welcoming atmosphere.
                            </p>
                        </div>
                        <!-- Why Choose Us Tab -->
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0">
                                Choosing Fitness Hub means choosing a healthier future. Here’s why our members love us:
                            <ul class="mt-3 text-secondary">
                                <li>✅ Certified and experienced personal trainers</li>
                                <li>✅ Flexible membership plans for every lifestyle</li>
                                <li>✅ Latest gym equipment and spacious workout areas</li>
                                <li>✅ A variety of group classes – yoga, Zumba, HIIT, strength training & more</li>
                                <li>✅ Friendly, motivating community to keep you inspired</li>
                            </ul>
                            <br>
                            With us, you’re not just joining a gym – you’re joining a family that pushes you to
                            achieve your best, both physically and mentally.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">

            <!-- Body Building -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-six-pack display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Body Building</h3>
                    <p>
                        Build strength and shape your dream physique with our professional body building programs.
                        Designed for all levels, we focus on muscle growth, endurance, and proper techniques.
                    </p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Weight Lifting -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-barbell display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Weight Lifting</h3>
                    <p>
                        Train like a pro with our guided weight lifting sessions. Improve your strength, stamina,
                        and performance with customized routines designed to suit your fitness journey.
                    </p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Muscle Building -->
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-bodybuilding display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Muscle Building</h3>
                    <p>
                        Our muscle-building plans combine advanced training methods with expert nutrition guidance.
                        Gain lean mass, boost strength, and achieve a powerful and defined body.
                    </p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <!-- Discount Banner -->
            <div class="col-lg-12 col-md-6 text-center">
                <h1 class="text-uppercase text-light mb-4">🔥 30% Discount This Summer 🔥</h1>
                <p class="text-light mb-3">
                    Don’t miss our limited-time summer offer! Sign up now and enjoy professional training,
                    modern equipment, and personalized fitness plans at unbeatable prices.
                </p>
                <a href="" class="btn btn-primary py-3 px-5">Become A Member</a>
            </div>
        </div>
    </div>
    <!-- Programe Start -->


    <!-- Class Timetable Start -->
    <div class="container-fluid p-5 bg-dark">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Live Schedule</h5>
            <h1 class="display-3 text-uppercase text-white mb-0">Training Sessions</h1>
            <p class="text-light mt-3">View all reserved personal training sessions. Book your slot with our expert
                trainers.</p>
        </div>

        <!-- Week Navigation -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="bg-secondary rounded-pill p-3">
                    <ul class="nav nav-pills d-inline-flex justify-content-center w-100 text-uppercase" id="weekTabs">
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#monday">
                                <small>Mon</small>
                            </a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tuesday">
                                <small>Tue</small>
                            </a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#wednesday">
                                <small>Wed</small>
                            </a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#thursday">
                                <small>Thu</small>
                            </a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#friday">
                                <small>Fri</small>
                            </a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#saturday">
                                <small>Sat</small>
                            </a>
                        </li>
                        <li class="nav-item flex-fill text-center">
                            <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#sunday">
                                <small>Sun</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sessions Content -->
        <div class="tab-content">
            @php
                $days = [
                    'monday' => 'Monday',
                    'tuesday' => 'Tuesday',
                    'wednesday' => 'Wednesday',
                    'thursday' => 'Thursday',
                    'friday' => 'Friday',
                    'saturday' => 'Saturday',
                    'sunday' => 'Sunday',
                ];
            @endphp

            @foreach ($days as $key => $dayName)
                <div id="{{ $key }}" class="tab-pane fade show {{ $loop->first ? 'active' : '' }}">
                    <div class="row g-4">
                        @if (isset($reservedSessions[$dayName]) && count($reservedSessions[$dayName]) > 0)
                            @foreach ($reservedSessions[$dayName] as $session)
                                <div class="col-xl-3 col-lg-4 col-md-6">
                                    <div
                                        class="session-card bg-gradient rounded-3 p-4 h-100 position-relative overflow-hidden">
                                        <div class="session-time-badge">
                                            <span class="badge bg-primary rounded-pill px-3 py-2">
                                                <i class="fas fa-clock me-2"></i>
                                                {{ \Carbon\Carbon::parse($session->time_in)->format('g:i A') }} -
                                                {{ \Carbon\Carbon::parse($session->time_out)->format('g:i A') }}
                                            </span>
                                        </div>

                                        <div class="session-content mt-4">
                                            <h5 class="text-uppercase text-white mb-3">
                                                {{ $session->type ?? 'Personal Training' }}
                                            </h5>

                                            <div class="trainer-info d-flex align-items-center mb-3">
                                                <div class="trainer-avatar me-3">
                                                    @if ($session->trainer->profile_photo_path)
                                                        <img src="{{ asset('storage/' . $session->trainer->profile_photo_path) }}"
                                                            class="rounded-circle" width="40" height="40"
                                                            alt="{{ $session->trainer->name }}">
                                                    @else
                                                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                                            style="width: 40px; height: 40px;">
                                                            <i class="fas fa-user text-white"></i>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div>
                                                    <h6 class="text-light mb-0">{{ $session->trainer->name }}</h6>
                                                    <small class="text-primary">Certified Trainer</small>
                                                </div>
                                            </div>

                                            <div class="session-meta">
                                                <div
                                                    class="d-flex justify-content-between align-items-center text-light mb-2">
                                                    <small>
                                                        <i class="fas fa-user me-2 text-primary"></i>
                                                        {{ $session->user->name }}
                                                    </small>
                                                    <small>
                                                        <i class="fas fa-calendar me-2 text-primary"></i>
                                                        {{ \Carbon\Carbon::parse($session->date)->format('M d') }}
                                                    </small>
                                                </div>
                                            </div>

                                            @if ($session->type)
                                                <div class="training-type-badge mt-3">
                                                    <span class="badge bg-success rounded-pill px-3">
                                                        <i class="fas fa-dumbbell me-2"></i>
                                                        {{ $session->type }}
                                                    </span>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Hover Effect -->
                                        <div
                                            class="session-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                            <div class="text-center">
                                                <span class="badge bg-warning text-dark px-3 py-2 mb-2">
                                                    <i class="fas fa-star me-2"></i>
                                                    Reserved
                                                </span>
                                                <br>
                                                <small class="text-light">Click to view details</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-12">
                                <div class="text-center py-5">
                                    <div class="empty-state-icon mb-4">
                                        <i class="fas fa-calendar-times fa-3x text-secondary"></i>
                                    </div>
                                    <h4 class="text-light mb-3">No Sessions Scheduled</h4>
                                    <p class="text-muted mb-4">There are no training sessions reserved for
                                        {{ $dayName }}.</p>
                                    @if (Auth::check() && Auth::user()->is_registered == 1)
                                        <a href="{{ route('ourTeam') }}" class="btn btn-primary btn-lg">
                                            <i class="fas fa-plus me-2"></i>
                                            Book a Session
                                        </a>
                                    @else
                                        <a href="{{ route('pricing') }}" class="btn btn-outline-primary btn-lg">
                                            <i class="fas fa-crown me-2"></i>
                                            Get Membership to Book
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Quick Stats -->
        <div class="row mt-5">
            <div class="col-md-3 col-6">
                <div class="text-center">
                    <div class="bg-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                        style="width: 70px; height: 70px;">
                        <i class="fas fa-dumbbell fa-2x text-white"></i>
                    </div>
                    <h3 class="text-white mb-1">
                        {{ $reservedSessions->flatten()->count() }}
                    </h3>
                    <p class="text-primary mb-0">Total Sessions</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center">
                    <div class="bg-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                        style="width: 70px; height: 70px;">
                        <i class="fas fa-users fa-2x text-white"></i>
                    </div>
                    <h3 class="text-white mb-1">
                        {{ $trainers->count() }}
                    </h3>
                    <p class="text-success mb-0">Expert Trainers</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center">
                    <div class="bg-warning rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                        style="width: 70px; height: 70px;">
                        <i class="fas fa-clock fa-2x text-white"></i>
                    </div>
                    <h3 class="text-white mb-1">24/7</h3>
                    <p class="text-warning mb-0">Available</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="text-center">
                    <div class="bg-info rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                        style="width: 70px; height: 70px;">
                        <i class="fas fa-star fa-2x text-white"></i>
                    </div>
                    <h3 class="text-white mb-1">100%</h3>
                    <p class="text-info mb-0">Satisfaction</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Class Timetable End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-dark facts p-5 my-5">
        <div class="row gx-5 gy-4 py-5">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-star fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Experience</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">1000</h1><span>+</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-users fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Our Trainers</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">25</h1><span>+</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-check fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Complete Project</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">100</h1><span>+</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3"
                        style="width: 60px; height: 60px;">
                        <i class="fa fa-mug-hot fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Happy Clients</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">500</h1><span>+</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="container-fluid p-5 my-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">The Team</h5>
            <h1 class="display-3 text-uppercase mb-0">Expert Trainers</h1>
        </div>
        <div class="row g-5">
            @foreach ($trainers as $trainer)
                <div class="col-lg-4 col-md-6">
                    <div class="team-item position-relative">
                        <div class="position-relative overflow-hidden rounded">
                            <img class="img-fluid w-100"
                                src="{{ $trainer->profile_photo_path
                                    ? asset('storage/' . $trainer->profile_photo_path)
                                    : asset('user_site/img/team-2.jpg') }}"
                                alt="{{ $trainer->name }}">
                            <div class="team-overlay">
                                <div class="d-flex align-items-center justify-content-start">
                                    <a class="btn btn-light" href="{{ route('ourTeam') }}">Reserve</a>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4"
                            style="background: rgba(34, 36, 41, .9);">
                            <h5 class="text-uppercase text-light">{{ $trainer->name }}</h5>
                            <p class="text-uppercase text-secondary m-0">TRAINER</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-fluid p-5 my-5">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/testimonial.jpg') }}"
                        style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 bg-dark p-5">
                <div class="mb-5">
                    <h5 class="text-primary text-uppercase">Testimonials</h5>
                    <h1 class="display-3 text-uppercase text-light mb-0">What Our Clients Say</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4">
                            <i class="fa fa-quote-left text-primary me-3"></i>
                            “Joining this fitness center completely changed my lifestyle. The trainers here are
                            supportive and push you to give your best every session. I’ve gained both strength and
                            confidence since I started.”
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="{{ asset('img/testimonial-1.jpg') }}"
                                alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Tharindu Perera</h5>
                                <span class="text-uppercase text-secondary">Software Engineer</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4">
                            <i class="fa fa-quote-left text-primary me-3"></i>
                            “The personalized training programs helped me achieve results much faster than I expected.
                            The atmosphere is motivating, and the staff truly care about your progress.”
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="{{ asset('img/testimonial-2.jpg') }}"
                                alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Hasini Perera</h5>
                                <span class="text-uppercase text-secondary">UI Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4">
                            <i class="fa fa-quote-left text-primary me-3"></i>
                            “From day one, I felt welcomed and motivated. The variety of programs keeps me excited,
                            and I’ve seen huge improvements in my energy levels and overall health.”
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="{{ asset('img/testimonial-3.jpg') }}"
                                alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Samantha Silva</h5>
                                <span class="text-uppercase text-secondary">Marketing Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Session card click handlers
            document.querySelectorAll('.session-card').forEach(card => {
                card.addEventListener('click', function() {
                    const trainerName = this.querySelector('h6').textContent;
                    const sessionTime = this.querySelector('.session-time-badge').textContent;
                    const trainingType = this.querySelector('.training-type-badge')?.textContent ||
                        'Personal Training';

                    // You can show a modal with session details here
                    showSessionDetails({
                        trainer: trainerName,
                        time: sessionTime,
                        type: trainingType
                    });
                });
            });

            // Tab activation animation
            const weekTabs = document.getElementById('weekTabs');
            if (weekTabs) {
                weekTabs.addEventListener('show.bs.tab', function(e) {
                    const target = e.target;
                    // Add active state animation
                    target.classList.add('active-tab');
                });
            }

            // Auto-refresh sessions every 30 seconds (optional)
            setInterval(() => {
                // You can add AJAX call here to refresh sessions
                console.log('Auto-refreshing sessions...');
            }, 30000);

            // Session details modal function
            function showSessionDetails(session) {
                // Create and show a modal with session details
                const modalHtml = `
            <div class="modal fade" id="sessionModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content bg-dark text-light">
                        <div class="modal-header border-0">
                            <h5 class="modal-title text-uppercase">
                                <i class="fas fa-info-circle me-2 text-primary"></i>
                                Session Details
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-12">
                                    <h6 class="text-primary mb-2">Trainer</h6>
                                    <p class="text-light">${session.trainer}</p>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-primary mb-2">Time Slot</h6>
                                    <p class="text-light">${session.time}</p>
                                </div>
                                <div class="col-12">
                                    <h6 class="text-primary mb-2">Training Type</h6>
                                    <p class="text-light">${session.type}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            @if (Auth::check() && Auth::user()->is_registered == 1)
                                <a href="{{ route('ourTeam') }}" class="btn btn-primary">
                                    <i class="fas fa-calendar-plus me-2"></i>
                                    Book Similar Session
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        `;

                // Remove existing modal if any
                const existingModal = document.getElementById('sessionModal');
                if (existingModal) {
                    existingModal.remove();
                }

                // Add new modal to body
                document.body.insertAdjacentHTML('beforeend', modalHtml);

                // Show the modal
                const sessionModal = new bootstrap.Modal(document.getElementById('sessionModal'));
                sessionModal.show();
            }

            // Add loading animation
            function showLoading() {
                const loadingHtml = `
            <div class="text-center py-5">
                <div class="spinner-border text-primary mb-3" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="text-light">Loading sessions...</p>
            </div>
        `;
                return loadingHtml;
            }
        });
    </script>
@endsection
