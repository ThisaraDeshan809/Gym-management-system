@extends('layouts.usersite.app2')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .equipment-section {
            background: #f8f9fa;
            padding: 80px 0;
        }

        .equipment-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            height: 100%;
        }

        .equipment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .equipment-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .equipment-content {
            padding: 25px;
        }

        .equipment-name {
            font-family: 'Oswald', sans-serif;
            font-weight: 600;
            color: #1d2a3b;
            margin-bottom: 10px;
        }

        .equipment-quantity {
            background: #3a7cbd;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
        }

        .equipment-description {
            color: #6c757d;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .btn-reserve {
            background: #3a7cbd;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-reserve:hover {
            background: #2c6195;
            transform: translateY(-2px);
        }

        .btn-pricing {
            background: #d63384;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
            width: 100%;
            text-align: center;
            text-decoration: none;
            display: block;
        }

        .btn-pricing:hover {
            background: #b02a6b;
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }

        .membership-required {
            position: relative;
        }

        .membership-required::before {
            content: "🔒";
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
        }

        .modal-content {
            border-radius: 15px;
            border: none;
        }

        .modal-header {
            background: #3a7cbd;
            color: white;
            border-bottom: none;
            border-radius: 15px 15px 0 0;
        }

        .modal-title {
            font-family: 'Oswald', sans-serif;
            font-weight: 600;
        }

        .close {
            color: white;
            opacity: 1;
        }

        .form-control:focus {
            border-color: #3a7cbd;
            box-shadow: 0 0 0 0.2rem rgba(58, 124, 189, 0.25);
        }

        .btn-modal {
            background: #3a7cbd;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-modal:hover {
            background: #2c6195;
        }

        .btn-close-modal {
            background: #6c757d;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-close-modal:hover {
            background: #5a6268;
        }

        .section-title {
            position: relative;
            margin-bottom: 60px;
        }

        .section-title h5 {
            color: #3a7cbd;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .section-title h1 {
            font-family: 'Oswald', sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            color: #1d2a3b;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background: #3a7cbd;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .access-note {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 40px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .access-note h4 {
            font-family: 'Oswald', sans-serif;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .access-note p {
            margin-bottom: 0;
            font-size: 1.1rem;
        }

        .icon-lg {
            font-size: 2rem;
            margin-bottom: 15px;
        }
    </style>

    <!-- Equipment Section Start -->
    <div class="equipment-section">
        <div class="container">
            <div class="text-center section-title">
                <h5>Our Equipment</h5>
                <h1 class="display-3 text-uppercase mb-0">Premium Fitness Equipment</h1>
            </div>

            @if(Auth::user() && Auth::user()->is_registered == 0)
                <!-- Membership Required Notice for Non-Registered Users -->
                <div class="access-note">
                    <div class="icon-lg">🔒</div>
                    <h4>Membership Required</h4>
                    <p>You need an active membership to reserve our premium equipment. Choose a plan that fits your fitness goals and get access to all our state-of-the-art equipment.</p>
                    <a href="{{ route('pricing') }}" class="btn btn-pricing mt-3" style="display: inline-block; width: auto;">
                        <i class="fas fa-crown me-2"></i>View Membership Plans
                    </a>
                </div>
            @else
                <!-- Welcome Message for Registered Users -->
                <div class="access-note" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
                    <div class="icon-lg">✅</div>
                    <h4>Welcome, Premium Member!</h4>
                    <p>You have full access to reserve any of our premium equipment. Book your preferred time slot and start your fitness journey!</p>
                </div>
            @endif

            <div class="row">
                @foreach ($equipments as $equipment)
                    <div class="col-lg-4 col-md-6 mb-5" data-aos="fade-up">
                        <div class="equipment-card">
                            <img src="{{ Storage::url('public/assets/images/equipments/' . $equipment->image) }}"
                                alt="{{ $equipment->name }}" class="equipment-img">
                            <div class="equipment-content">
                                <h4 class="equipment-name">{{ $equipment->name }}</h4>
                                <div class="equipment-quantity">Available: {{ $equipment->quantity }}</div>
                                <p class="equipment-description">{{ $equipment->description }}</p>

                                @if(Auth::user() && Auth::user()->is_registered == 0)
                                    <!-- Show pricing page redirect for non-registered users -->
                                    <a href="{{ route('pricing') }}" class="btn btn-pricing membership-required">
                                        Get Membership to Reserve
                                    </a>
                                @else
                                    <!-- Show reservation button for registered users -->
                                    <button type="button" class="btn btn-reserve" data-bs-toggle="modal"
                                        data-bs-target="#equipment_reserve" data-id="{{ $equipment->id }}">
                                        Reserve Now
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Equipment Section End -->

    @if(Auth::user() && Auth::user()->is_registered == 1)
        <!-- Reservation Modal - Only show if user is registered -->
        <div class="modal fade" id="equipment_reserve" tabindex="-1" aria-labelledby="equipment_reserve_label"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="equipment_reserve_label">Reserve Equipment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="reservation-form">
                            @csrf
                            <input type="hidden" name="equipment_id" id="equipment_id">

                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="time_in" class="form-label">Time In</label>
                                    <input type="time" class="form-control" id="time_in" name="time_in" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="time_out" class="form-label">Time Out</label>
                                    <input type="time" class="form-control" id="time_out" name="time_out" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close-modal" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-modal" id="reserve_equipment_btn">Reserve</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if(Auth::user() && Auth::user()->is_registered == 1)
    <script>
        $(document).ready(function() {
            // Set up modal with equipment ID
            $('#equipment_reserve').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var equipmentId = button.data('id');
                $('#equipment_id').val(equipmentId);
            });

            // Handle reservation submission
            $('#reserve_equipment_btn').click(function() {
                var time_in = $('#time_in').val();
                var time_out = $('#time_out').val();
                var equipment_id = $('#equipment_id').val();
                var date = $('#date').val();
                var _token = $('input[name="_token"]').val();

                // Basic validation
                if (!time_in || !time_out || !date) {
                    toastr.error('Please fill in all fields');
                    return;
                }

                // Check if time out is after time in
                if (time_out <= time_in) {
                    toastr.error('Time out must be after time in');
                    return;
                }

                // Check if date is not in the past
                var today = new Date().toISOString().split('T')[0];
                if (date < today) {
                    toastr.error('Please select a future date');
                    return;
                }

                $.ajax({
                    url: "{{ route('add_equipment_reservation') }}",
                    type: "POST",
                    data: {
                        time_in: time_in,
                        time_out: time_out,
                        equipment_id: equipment_id,
                        _token: _token,
                        date: date
                    },
                    success: function(response) {
                        if (response.success == true) {
                            toastr.success(response.message);
                            $('#equipment_reserve').modal('hide');
                            // Reset form
                            $('#reservation-form')[0].reset();
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
    @endif
@endsection
