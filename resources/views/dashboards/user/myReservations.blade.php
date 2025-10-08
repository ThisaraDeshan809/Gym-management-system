@extends('layouts.usersite.app2')

@section('content')
    <!-- Reservations Header Section -->
    <section class="container-fluid bg-dark py-5">
        <div class="container py-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h5 class="text-primary text-uppercase mb-3">Your Bookings</h5>
                    <h1 class="display-3 text-uppercase text-white mb-4">My Reservations</h1>
                    <p class="text-light mb-0">Manage your trainer and equipment reservations in one place.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Reservations Content Section -->
    <section class="container-fluid py-5 bg-secondary">
        <div class="container py-5">
            <!-- Trainer Reservations -->
            <div class="row mb-5">
                <div class="col-12">
                    <h2 class="text-uppercase text-white mb-4">My Trainer Reservations</h2>
                    @if ($trainer_reservations->count() > 0)
                        <div class="row g-4">
                            @foreach ($trainer_reservations as $trainer_reservation)
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="reservation-card bg-dark rounded p-4 h-100">
                                        <div class="text-center mb-4">
                                            <img src="{{ $trainer_reservation->trainer_image
                                                ? asset('storage/' . $trainer_reservation->trainer_image)
                                                : asset('user_site/img/team-2.jpg') }}"
                                                alt="{{ $trainer_reservation->trainer_name }}"
                                                class="rounded-circle mx-auto"
                                                style="width: 120px; height: 120px; object-fit: cover;">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-white mb-2">{{ $trainer_reservation->trainer_name }}</h5>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-light">Date:</span>
                                                <span
                                                    class="text-primary">{{ \Carbon\Carbon::parse($trainer_reservation->date)->format('M d, Y') }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-light">Time:</span>
                                                <span class="text-primary">{{ $trainer_reservation->time_in }} -
                                                    {{ $trainer_reservation->time_out }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="text-light">Status:</span>
                                                <span
                                                    class="badge
                                        @if ($trainer_reservation->status == 'completed') bg-success
                                        @elseif($trainer_reservation->status == 'reserved') bg-warning
                                        @elseif($trainer_reservation->status == 'cancelled') bg-danger
                                        @else bg-secondary @endif">
                                                    {{ ucfirst($trainer_reservation->status) }}
                                                </span>
                                            </div>
                                            @if ($trainer_reservation->status == 'pending')
                                                <button class="btn btn-outline-danger btn-sm">Cancel Reservation</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-calendar-times text-primary mb-3" style="font-size: 4rem;"></i>
                            <h4 class="text-white mb-3">No Trainer Reservations</h4>
                            <p class="text-light">You haven't made any trainer reservations yet.</p>
                            <a href="{{ route('ourTeam') }}" class="btn btn-primary">Book a Trainer</a>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Equipment Reservations -->
            <div class="row">
                <div class="col-12">
                    <h2 class="text-uppercase text-white mb-4">My Equipment Reservations</h2>
                    @if ($equipment_reservations->count() > 0)
                        <div class="row g-4">
                            @foreach ($equipment_reservations as $equipment_reservation)
                                <div class="col-lg-4 col-md-6 mt-4">
                                    <div class="reservation-card bg-dark rounded p-4 h-100">
                                        <div class="text-center mb-4">
                                            <img src="{{ Storage::url('public/assets/images/equipments/' . $equipment_reservation->equipment_image) }}"
                                                alt="{{ $equipment_reservation->equipment_name }}" class="rounded mx-auto"
                                                style="width: 120px; height: 120px; object-fit: cover;">
                                        </div>
                                        <div class="text-center">
                                            <h5 class="text-white mb-2">{{ $equipment_reservation->equipment_name }}</h5>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-light">Date:</span>
                                                <span
                                                    class="text-primary">{{ \Carbon\Carbon::parse($equipment_reservation->date)->format('M d, Y') }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="text-light">Time:</span>
                                                <span class="text-primary">{{ $equipment_reservation->time_in }} -
                                                    {{ $equipment_reservation->time_out }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="text-light">Status:</span>
                                                <span
                                                    class="badge
                                        @if ($equipment_reservation->status == 'completed') bg-success
                                        @elseif($equipment_reservation->status == 'reserved') bg-warning
                                        @elseif($equipment_reservation->status == 'cancelled') bg-danger
                                        @else bg-secondary @endif">
                                                    {{ ucfirst($equipment_reservation->status) }}
                                                </span>
                                            </div>
                                            @if ($equipment_reservation->status == 'pending')
                                                <button class="btn btn-outline-danger btn-sm">Cancel Reservation</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-dumbbell text-primary mb-3" style="font-size: 4rem;"></i>
                            <h4 class="text-white mb-3">No Equipment Reservations</h4>
                            <p class="text-light">You haven't made any equipment reservations yet.</p>
                            <a href="{{ route('user_equipments_page') }}" class="btn btn-primary">Reserve Equipment</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <style>
        .bg-secondary {
            background-color: #1a1d23 !important;
        }

        .reservation-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .reservation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        .badge {
            font-size: 0.8rem;
            padding: 0.4rem 0.8rem;
        }

        .btn-outline-danger {
            border-color: #dc3545;
            color: #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            color: white;
        }
    </style>

    <!-- Equipment Reservation Modal -->
    <div class="modal fade" id="equipment_reserve" tabindex="-1" aria-labelledby="equipmentReserveLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-uppercase" id="equipmentReserveLabel">Reserve Equipment</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="reservation-form">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="equipment_id" id="equipment_id">

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
                        <button type="submit" class="btn btn-primary" id="reserve_equipment_btn">Reserve Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script>
        $(document).ready(function() {
            // Handle equipment reservation
            $('#btn_reserve_equipment').click(function() {
                var equipment_id = $(this).data('id');
                $('#equipment_id').val(equipment_id);
            });

            $('#reserve_equipment_btn').click(function() {
                var time_in = $('#time_in').val();
                var time_out = $('#time_out').val();
                var equipment_id = $('#equipment_id').val();
                var date = $('#date').val();
                var _token = $('input[name="_token"]').val();

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
                            // Refresh the page to show the new reservation
                            setTimeout(function() {
                                location.reload();
                            }, 1500);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        toastr.error('An error occurred. Please try again.');
                    }
                });
            });

            // Cancel reservation functionality (you would need to implement this on the backend)
            $('.btn-outline-danger').click(function() {
                var reservationId = $(this).data('id');
                var reservationType = $(this).data('type');

                if (confirm('Are you sure you want to cancel this reservation?')) {
                    // Here you would make an AJAX call to cancel the reservation
                    // This is just a placeholder - you need to implement the actual cancellation logic
                    toastr.info('Cancellation feature would be implemented here');
                }
            });
        });
    </script>
@endsection
@endsection
