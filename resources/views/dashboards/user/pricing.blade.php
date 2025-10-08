@extends('layouts.usersite.app2')

@section('content')
    <style>
        .pricing-section {
            background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 100px 0;
            min-height: 100vh;
        }

        .pricing-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .pricing-header h5 {
            color: #d63384;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 15px;
        }

        .pricing-header h1 {
            color: #fff;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-size: 3rem;
        }

        .pricing-header p {
            color: #aaa;
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        /* Active Package Card Styles */
        .active-package-card {
            background: linear-gradient(135deg, rgba(214, 51, 132, 0.1), rgba(34, 36, 41, 0.9));
            border-radius: 20px;
            padding: 50px 40px;
            text-align: center;
            border: 3px solid #d63384;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(214, 51, 132, 0.3);
            margin-bottom: 40px;
        }

        .active-package-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #d63384, #ff6b9d);
        }

                .pricing-card {
            background: rgba(34, 36, 41, 0.9);
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            border-color: #d63384;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        .pricing-card.popular {
            border-color: #d63384;
            transform: scale(1.05);
        }

        .pricing-card.popular::before {
            content: "MOST POPULAR";
            position: absolute;
            top: 20px;
            right: -30px;
            background: #d63384;
            color: white;
            padding: 5px 30px;
            font-size: 12px;
            font-weight: bold;
            transform: rotate(45deg);
        }

        .pricing-card h3 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            font-size: 1.8rem;
        }

        .price {
            font-size: 3.5rem;
            font-weight: 700;
            color: #d63384;
            margin-bottom: 10px;
            line-height: 1;
        }

        .price span {
            font-size: 1rem;
            color: #aaa;
            font-weight: normal;
        }

        .duration {
            color: #d63384;
            font-weight: 600;
            margin: 15px 0;
            font-size: 1.1rem;
        }

        .pricing-features {
            list-style: none;
            padding: 0;
            margin: 30px 0;
            text-align: left;
        }

        .pricing-features li {
            color: #ccc;
            padding: 12px 0;
            border-bottom: 1px solid #444;
            display: flex;
            align-items: center;
        }

        .pricing-features li:last-child {
            border-bottom: none;
        }

        .pricing-features li i {
            color: #d63384;
            margin-right: 15px;
            font-size: 1.2rem;
            width: 20px;
            text-align: center;
        }

        .trainer-info {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #444;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .trainer-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #d63384;
        }

        .trainer-info p {
            margin: 0;
            color: #aaa;
            font-size: 1rem;
        }

        .pricing-card .btn {
            width: 100%;
            padding: 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 1.1rem;
            margin-top: 20px;
            border-radius: 30px;
            transition: all 0.3s;
        }

        .pricing-card .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(214, 51, 132, 0.4);
        }

        .package-description {
            color: #bbb;
            font-style: italic;
            margin: 20px 0;
            min-height: 60px;
        }

        @media (max-width: 768px) {
            .pricing-header h1 {
                font-size: 2.5rem;
            }

            .price {
                font-size: 2.8rem;
            }

            .pricing-card {
                margin-bottom: 30px;
            }
        }

        .status-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .package-title {
            color: #fff;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            font-size: 2.2rem;
            background: linear-gradient(45deg, #d63384, #ff6b9d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .price-display {
            font-size: 3.5rem;
            font-weight: 700;
            color: #d63384;
            margin-bottom: 10px;
            line-height: 1;
        }

        .price-display span {
            font-size: 1rem;
            color: #aaa;
            font-weight: normal;
        }

        .duration-badge {
            background: rgba(214, 51, 132, 0.2);
            color: #d63384;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            margin: 15px 0;
            display: inline-block;
            border: 1px solid #d63384;
        }

        .package-description {
            color: #bbb;
            font-style: italic;
            margin: 25px 0;
            font-size: 1.1rem;
            line-height: 1.6;
        }

        /* Progress Section */
        .progress-section {
            background: rgba(34, 36, 41, 0.8);
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
            border: 1px solid #444;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .progress-header h4 {
            color: #fff;
            margin: 0;
            font-weight: 600;
        }

        .days-remaining {
            background: #d63384;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .progress-bar-container {
            background: #2a2c31;
            border-radius: 10px;
            height: 12px;
            overflow: hidden;
            margin: 15px 0;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, #d63384, #ff6b9d);
            border-radius: 10px;
            transition: width 0.5s ease;
            position: relative;
        }

        .progress-stats {
            display: flex;
            justify-content: space-between;
            color: #aaa;
            font-size: 0.9rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }

        .feature-item {
            background: rgba(34, 36, 41, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #444;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-5px);
            border-color: #d63384;
        }

        .feature-icon {
            font-size: 2rem;
            color: #d63384;
            margin-bottom: 15px;
        }

        .feature-item h5 {
            color: #fff;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .feature-item p {
            color: #aaa;
            margin: 0;
            font-size: 0.9rem;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn-upgrade {
            background: linear-gradient(45deg, #d63384, #ff6b9d);
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .btn-upgrade:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(214, 51, 132, 0.4);
            color: white;
        }

        .btn-extend {
            background: transparent;
            border: 2px solid #d63384;
            padding: 12px 30px;
            border-radius: 30px;
            color: #d63384;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .btn-extend:hover {
            background: #d63384;
            color: white;
            transform: translateY(-3px);
        }

        .trainer-info {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #444;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .trainer-info img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 3px solid #d63384;
        }

        .trainer-details {
            text-align: left;
        }

        .trainer-details p {
            margin: 0;
            color: #aaa;
        }

        .trainer-name {
            color: #fff !important;
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* Renewal Notice */
        .renewal-notice {
            background: rgba(40, 167, 69, 0.1);
            border: 1px solid #28a745;
            border-radius: 10px;
            padding: 20px;
            margin-top: 25px;
            text-align: center;
        }

        .renewal-notice.warning {
            background: rgba(255, 193, 7, 0.1);
            border-color: #ffc107;
        }

        .renewal-notice.danger {
            background: rgba(220, 53, 69, 0.1);
            border-color: #dc3545;
        }

        .renewal-text {
            color: #28a745;
            margin: 0;
            font-weight: 600;
        }

        .renewal-text.warning {
            color: #ffc107;
        }

        .renewal-text.danger {
            color: #dc3545;
        }

        @media (max-width: 768px) {
            .active-package-card {
                padding: 30px 20px;
            }

            .package-title {
                font-size: 1.8rem;
            }

            .price-display {
                font-size: 2.8rem;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn-upgrade,
            .btn-extend {
                width: 100%;
            }
        }
    </style>

    @if (Auth::user() && Auth::user()->is_registered == 0)
        <div class="container-fluid pricing-section">
            <div class="container">
                <div class="pricing-header">
                    <h5>PRICING PLANS</h5>
                    <h1 class="display-3 text-uppercase mb-4">Choose Your Perfect Plan</h1>
                    <p>We offer flexible membership options to suit your fitness goals and budget. All plans include access
                        to
                        our state-of-the-art facilities and equipment.</p>
                </div>

                <div class="row justify-content-center">
                    <!-- Single Package Card -->
                    @foreach ($packages as $package)
                        <div class="col-lg-4 col-md-6">
                            <div class="pricing-card">
                                <h3>{{ $package->package_name }}</h3>
                                <div class="price">${{ number_format($package->price, 2) }}<span>/total</span></div>
                                <div class="duration">{{ $package->duration }} Month Plan</div>

                                <div class="package-description">
                                    {{ $package->package_description }}
                                </div>

                                <!-- Features List - You might want to add this to your database -->
                                <ul class="pricing-features">
                                    <li><i class="fas fa-check"></i> Access to all gym facilities</li>
                                    <li><i class="fas fa-check"></i> State-of-the-art equipment</li>
                                    <li><i class="fas fa-check"></i> Locker room access</li>
                                    <li><i class="fas fa-check"></i> Free fitness assessment</li>
                                    <li><i class="fas fa-check"></i> Nutritional guidance</li>
                                    <li><i class="fas fa-check"></i> Progress tracking</li>
                                </ul>

                                <div class="trainer-info">
                                    @if ($package->trainer_id)
                                        @php
                                            $trainer = DB::table('users')->where('id', $package->trainer_id)->first();
                                        @endphp
                                        @if ($trainer)
                                            <img src="{{ $trainer->profile_photo_path
                                                ? asset('storage/' . $trainer->profile_photo_path)
                                                : asset('user_site/img/team-2.jpg') }}"
                                                alt="Trainer">
                                            <p>Assigned to: {{ $trainer->name }}</p>
                                        @else
                                            <p>Professional trainer assigned</p>
                                        @endif
                                    @else
                                        <p>Professional trainer assigned</p>
                                    @endif
                                </div>

                                <a href="{{ route('checkout', $package->id) }}" class="btn btn-primary">Select Plan</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <p class="text-light">All plans include a 7-day free trial. Cancel anytime during the trial period
                            with
                            no charges.</p>
                        <a href="{{ route('contactUs') }}" class="btn btn-outline-light mt-3">Need Help Choosing? Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    @else
        @php
            // Get user's active payment
            $activePayment = \App\Models\Payment::where('user_id', Auth::id())
                ->where('payment_status', 'paid')
                ->where('is_expired', 0)
                ->with('package')
                ->latest()
                ->first();

            if ($activePayment) {
                $package = $activePayment->package;
                $paymentDate = \Carbon\Carbon::parse($activePayment->payment_date);
                $expiryDate = $paymentDate->addMonths($package->duration);
                $remainingDays = floor(now()->diffInHours($expiryDate, false) / 24);
                $totalDays = $package->duration * 30; // Approximate
                $daysUsed = $totalDays - $remainingDays;
                $progressPercentage = min(100, max(0, ($daysUsed / $totalDays) * 100));

                // Get trainer info
                $trainer = $package->trainer_id ? \App\Models\User::find($package->trainer_id) : null;
            }
        @endphp

        <div class="container-fluid pricing-section">
            <div class="container">
                <div class="pricing-header">
                    <h5>MY ACTIVE PLAN</h5>
                    <h1 class="display-3 text-uppercase mb-4">Your Membership Details</h1>
                    <p>Welcome back! Here's everything you need to know about your current fitness plan.</p>
                </div>

                @if ($activePayment && $package)
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="active-package-card">
                                <div class="status-badge">
                                    <i class="fas fa-check-circle me-2"></i>Active
                                </div>

                                <h2 class="package-title">{{ $package->package_name }}</h2>

                                <div class="price-display">${{ number_format($package->price, 2) }}<span>/total</span></div>

                                <div class="duration-badge">
                                    {{ $package->duration }} Month Plan
                                </div>

                                <div class="package-description">
                                    {{ $package->package_description }}
                                </div>

                                <!-- Progress Section -->
                                <div class="progress-section">
                                    <div class="progress-header">
                                        <h4>Membership Progress</h4>
                                        <div class="days-remaining">
                                            <i class="fas fa-calendar-alt me-2"></i>
                                            {{ $remainingDays }} Days Left
                                        </div>
                                    </div>

                                    <div class="progress-bar-container">
                                        <div class="progress-bar" style="width: {{ $progressPercentage }}%"></div>
                                    </div>

                                    <div class="progress-stats">
                                        <span>Started:
                                            {{ \Carbon\Carbon::parse($activePayment->payment_date)->format('M d, Y') }}</span>
                                        <span>Expires: {{ $expiryDate->format('M d, Y') }}</span>
                                    </div>
                                </div>

                                <!-- Renewal Notice -->
                                @if ($remainingDays <= 7 && $remainingDays > 3)
                                    <div class="renewal-notice warning">
                                        <p class="renewal-text warning">
                                            <i class="fas fa-exclamation-triangle me-2"></i>
                                            Your membership expires in {{ $remainingDays }} days. Renew now to continue
                                            uninterrupted access.
                                        </p>
                                    </div>
                                @elseif($remainingDays <= 3)
                                    <div class="renewal-notice danger">
                                        <p class="renewal-text danger">
                                            <i class="fas fa-exclamation-circle me-2"></i>
                                            Urgent! Your membership expires in {{ $remainingDays }} days. Renew
                                            immediately.
                                        </p>
                                    </div>
                                @else
                                    <div class="renewal-notice">
                                        <p class="renewal-text">
                                            <i class="fas fa-info-circle me-2"></i>
                                            Your membership is active and in good standing.
                                        </p>
                                    </div>
                                @endif

                                <!-- Features Grid -->
                                <div class="features-grid">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-dumbbell"></i>
                                        </div>
                                        <h5>Full Gym Access</h5>
                                        <p>24/7 access to all facilities and equipment</p>
                                    </div>

                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <h5>Personal Training</h5>
                                        <p>Dedicated sessions with professional trainers</p>
                                    </div>

                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                        <h5>Health Monitoring</h5>
                                        <p>Regular fitness assessments and progress tracking</p>
                                    </div>
                                </div>

                                <!-- Trainer Information -->
                                @if ($trainer)
                                    <div class="trainer-info">
                                        <img src="{{ $trainer->profile_photo_path
                                            ? asset('storage/' . $trainer->profile_photo_path)
                                            : asset('user_site/img/team-2.jpg') }}"
                                            alt="Trainer">
                                        <div class="trainer-details">
                                            <p class="trainer-name">Your Personal Trainer</p>
                                            <p>{{ $trainer->name }}</p>
                                        </div>
                                    </div>
                                @endif

                                <!-- Action Buttons -->
                                <div class="action-buttons">
                                    <a href="{{ route('pricing') }}" class="btn btn-upgrade">
                                        <i class="fas fa-star me-2"></i>Upgrade Plan
                                    </a>
                                    <a href="{{ route('pricing') }}" class="btn btn-extend">
                                        <i class="fas fa-redo me-2"></i>Extend Membership
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="active-package-card text-center">
                                <h3 class="package-title">No Active Membership</h3>
                                <p class="text-light mb-4">You don't have an active membership plan.</p>
                                <a href="{{ route('pricing') }}" class="btn btn-upgrade">
                                    <i class="fas fa-plus me-2"></i>Choose a Plan
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif
@endsection
