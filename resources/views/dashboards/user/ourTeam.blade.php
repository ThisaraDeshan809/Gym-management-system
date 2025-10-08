@extends('layouts.usersite.app2')

@section('content')
    <!-- Trainers Header Section -->
    <section class="container-fluid bg-dark py-5">
        <div class="container py-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h5 class="text-primary text-uppercase mb-3">Expert Team</h5>
                    <h1 class="display-3 text-uppercase text-white mb-4">Meet Our Trainers</h1>
                    <p class="text-light mb-0">Our certified trainers are here to dedicate the time and effort you need
                        to
                        get in the best shape of your life.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trainers Section -->
    <section class="container-fluid py-5 bg-secondary">
        <div class="container py-5">
            @if (Auth::user() && Auth::user()->is_registered == 0)
                <!-- Membership Required Notice -->
                <div class="alert alert-warning text-center mb-5">
                    <h4 class="alert-heading">🔒 Membership Required</h4>
                    <p class="mb-3">You need an active membership to reserve personal training sessions.</p>
                    <a href="{{ route('pricing') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-crown me-2"></i>View Membership Plans
                    </a>
                </div>
            @else
                <!-- Welcome Message for Members -->
                <div class="alert alert-success text-center mb-5">
                    <h4 class="alert-heading">✅ Welcome, Premium Member!</h4>
                    <p class="mb-0">You can now reserve personal training sessions with our expert trainers.</p>
                </div>
            @endif

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
                                    <div class="d-flex align-items-center justify-content-center h-100">
                                        @if (Auth::user() && Auth::user()->is_registered == 0)
                                            <!-- Redirect to pricing page for non-registered users -->
                                            <a href="{{ route('pricing') }}" class="btn btn-warning">
                                                <i class="fas fa-lock me-2"></i>Get Membership
                                            </a>
                                        @else
                                            <!-- Show reservation button for registered users -->
                                            <button type="button" class="btn btn-primary btn-reserve"
                                                data-bs-toggle="modal" data-bs-target="#trainer_reserve"
                                                data-trainer-id="{{ $trainer->id }}">
                                                Reserve Now
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="bg-dark text-center p-4">
                                <h5 class="text-uppercase text-white mb-2">{{ $trainer->name }}</h5>
                                <p class="text-primary mb-3">Certified Fitness Trainer</p>
                                <p class="text-light small">{{ $trainer->email }}</p>
                                <div class="d-flex justify-content-center">
                                    <a class="btn btn-primary btn-square rounded-circle mx-1" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-primary btn-square rounded-circle mx-1" href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-primary btn-square rounded-circle mx-1" href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if (Auth::user() && Auth::user()->is_registered == 1)
        <!-- Reserve Trainer Modal - Only for registered users -->
        <div class="modal fade" id="trainer_reserve" tabindex="-1" aria-labelledby="trainerReserveLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark text-light">
                    <div class="modal-header border-0">
                        <h5 class="modal-title text-uppercase" id="trainerReserveLabel">Reserve Trainer</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="reservation-form">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="trainer_id" id="trainer_id">

                            <div class="mb-3">
                                <label for="training_type" class="form-label">Training Type</label>
                                <select class="form-select bg-secondary text-light border-0" id="training_type"
                                    name="training_type" required>
                                    <option value="">Select Training Type</option>
                                    <option value="Power Lifting">Power Lifting</option>
                                    <option value="Body Building">Body Building</option>
                                    <option value="Cardio Program">Cardio Program</option>
                                    <option value="Strength Training">Strength Training</option>
                                    <option value="Weight Loss">Weight Loss</option>
                                    <option value="Muscle Gain">Muscle Gain</option>
                                    <option value="Functional Training">Functional Training</option>
                                    <option value="Sports Specific">Sports Specific</option>
                                    <option value="Rehabilitation">Rehabilitation</option>
                                    <option value="General Fitness">General Fitness</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control bg-secondary text-light border-0" id="date"
                                    name="date" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="time_in" class="form-label">Time In</label>
                                        <input type="time" class="form-control bg-secondary text-light border-0"
                                            id="time_in" name="time_in" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="time_out" class="form-label">Time Out</label>
                                        <input type="time" class="form-control bg-secondary text-light border-0"
                                            id="time_out" name="time_out" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="reserve_trainer_btn">Reserve Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    <style>
        .bg-secondary {
            background-color: #1a1d23 !important;
        }

        .team-item {
            transition: transform 0.3s ease;
        }

        .team-item:hover {
            transform: translateY(-10px);
        }

        .team-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(214, 51, 132, 0.8);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .team-item:hover .team-overlay {
            opacity: 1;
        }

        .btn-reserve {
            padding: 10px 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-square {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            border-radius: 15px;
        }

        .form-control {
            border: none;
            padding: 12px 15px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(214, 51, 132, 0.25);
            border-color: #d63384;
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .alert-warning {
            background: linear-gradient(135deg, #fff3cd, #ffecb5);
            color: #856404;
        }

        .alert-success {
            background: linear-gradient(135deg, #d1edff, #b3e0ff);
            color: #155724;
        }
    </style>
@endsection

@section('scripts')
    @if (Auth::user() && Auth::user()->is_registered == 1)
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Set up reservation modal
                const reserveModal = document.getElementById('trainer_reserve');
                const trainerIdInput = document.getElementById('trainer_id');
                const dateInput = document.getElementById('date');

                // Set minimum date to today
                const today = new Date().toISOString().split('T')[0];
                dateInput.min = today;

                // When reserve button is clicked
                document.querySelectorAll('.btn-reserve').forEach(button => {
                    button.addEventListener('click', function() {
                        const trainerId = this.getAttribute('data-trainer-id');
                        trainerIdInput.value = trainerId;

                        // Reset form
                        document.getElementById('reservation-form').reset();
                        dateInput.min = today;
                    });
                });

                // Handle form submission
                document.getElementById('reservation-form').addEventListener('submit', function(e) {
                    e.preventDefault();

                    const submitBtn = document.getElementById('reserve_trainer_btn');
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Reserving...';

                    const formData = new FormData(this);

                    fetch("{{ route('trainer.reserve') }}", {
                            method: "POST",
                            body: formData,
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content'),
                                'Accept': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                toastr.success(data.message);
                                const modal = bootstrap.Modal.getInstance(reserveModal);
                                modal.hide();
                                this.reset();
                            } else {
                                toastr.error(data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            toastr.error('An error occurred. Please try again.');
                        })
                        .finally(() => {
                            submitBtn.disabled = false;
                            submitBtn.innerHTML = 'Reserve Now';
                        });
                });

                // Time validation
                document.getElementById('time_out').addEventListener('change', function() {
                    const timeIn = document.getElementById('time_in').value;
                    const timeOut = this.value;

                    if (timeIn && timeOut && timeOut <= timeIn) {
                        toastr.warning('Time Out must be after Time In');
                        this.value = '';
                    }
                });

                // Initialize Bootstrap modal
                const modal = new bootstrap.Modal(reserveModal);
            });
        </script>
    @endif
@endsection
