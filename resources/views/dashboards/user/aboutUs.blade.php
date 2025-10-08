@extends('layouts.usersite.app2')

@section('content')
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
@endsection
