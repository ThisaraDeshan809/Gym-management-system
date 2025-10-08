@extends('layouts.usersite.app2')

@section('content')
    <style>
        .form-control,
        .form-select {
            color: #fff !important;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: 0 0 0 0.2rem rgba(214, 51, 132, 0.25);
            border-color: #d63384;
        }

        .form-floating label {
            color: #aaa !important;
        }

        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label,
        .form-floating>.form-select~label {
            color: #d63384 !important;
        }

        .bg-secondary {
            background-color: #1a1d23 !important;
        }

        .btn-dark {
            background-color: #111;
            border-color: #111;
            transition: all 0.3s;
        }

        .btn-dark:hover {
            background-color: #000;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
    </style>

    <!-- Checkout Section Start -->
    <div class="container-fluid bg-dark py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Payment Details Section -->
                <div class="col-lg-8">
                    <div class="bg-secondary rounded p-4 p-lg-5">
                        <h2 class="text-uppercase text-white mb-4">Payment Details</h2>

                        <form id="payment_form">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-dark border-0 text-white"
                                            id="your_name" placeholder="Your Name" required>
                                        <label for="your_name" class="text-gray-400">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-dark border-0 text-white"
                                            id="your_email" placeholder="name@example.com" required>
                                        <label for="your_email" class="text-gray-400">Your Email *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-dark border-0 text-white" id="country" required>
                                            <option value="">Select Country</option>
                                            @php
                                                $countries = [
                                                    'Sri Lanka',
                                                    'India',
                                                    'Australia',
                                                    'Canada',
                                                    'United States',
                                                ];
                                            @endphp
                                            @foreach ($countries as $country)
                                                <option value="{{ $country }}">{{ $country }}</option>
                                            @endforeach
                                        </select>
                                        <label for="country" class="text-gray-400">Country *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-dark border-0 text-white" id="city" required>
                                            <option value="">Select City</option>
                                            @php
                                                $cities = [
                                                    'Sri Lanka' => ['Colombo', 'Kandy', 'Galle', 'Jaffna'],
                                                    'India' => ['Mumbai', 'Delhi', 'Bangalore', 'Chennai'],
                                                    'Australia' => ['Sydney', 'Melbourne', 'Brisbane', 'Perth'],
                                                    'Canada' => ['Toronto', 'Vancouver', 'Montreal', 'Calgary'],
                                                    'United States' => [
                                                        'New York',
                                                        'Los Angeles',
                                                        'Chicago',
                                                        'Houston',
                                                    ],
                                                ];
                                            @endphp
                                            @foreach ($cities as $country => $cityList)
                                                <optgroup label="{{ $country }}">
                                                    @foreach ($cityList as $city)
                                                        <option value="{{ $city }}">{{ $city }}</option>
                                                    @endforeach
                                                </optgroup>
                                            @endforeach
                                        </select>
                                        <label for="city" class="text-gray-400">City *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-dark border-0 text-white"
                                            id="phone-input" placeholder="123-456-7890" required>
                                        <label for="phone-input" class="text-gray-400">Phone Number *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-dark border-0 text-white"
                                            id="email" placeholder="name@example.com" required>
                                        <label for="email" class="text-gray-400">Email</label>
                                    </div>
                                </div>

                                <!-- Payment Method Section -->
                                <div class="col-12 mt-4">
                                    <h3 class="text-uppercase text-white mb-3">Payment Method</h3>
                                    <div class="form-floating">
                                        <select name="payment_method" id="payment_method"
                                            class="form-select bg-dark border-0 text-white" required>
                                            <option value="">Select Payment Method</option>
                                            <option value="cash_payment">Cash Payment</option>
                                            <option value="online_payment">Online Payment</option>
                                        </select>
                                        <label for="payment_method" class="text-gray-400">Payment Method *</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Order Summary Section -->
                <div class="col-lg-4">
                    <div class="bg-primary rounded p-4 p-lg-5 text-center text-white">
                        <h3 class="text-uppercase mb-4">Order Summary</h3>

                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-white-50">Package:</span>
                            <span class="fw-bold">{{ $package->package_name }}</span>
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-white-50">Duration:</span>
                            <span class="fw-bold">{{ $package->duration }} Months</span>
                        </div>

                        <hr class="my-4 border-white">

                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-white-50">Subtotal:</span>
                            <span class="fw-bold">RS {{ number_format($package->price, 2) }}</span>
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <span class="text-white-50">Tax:</span>
                            <span class="fw-bold">RS 0.00</span>
                        </div>

                        <hr class="my-4 border-white">

                        <div class="d-flex justify-content-between mb-4">
                            <span class="h5">Total:</span>
                            <span class="h5">RS {{ number_format($package->price, 2) }}</span>
                        </div>

                        <button type="button" id="btn_save_package_payment"
                            class="btn btn-dark btn-lg w-100 py-3 text-uppercase fw-bold">
                            Proceed to Payment
                        </button>

                        <p class="small mt-3 text-white-50">
                            By completing your purchase, you agree to our Terms of Service
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Section End -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#btn_save_package_payment').on('click', function() {
                var form = $('#payment_form')[0];
                var formData = new FormData(form);
                formData.append('package_id', {{ $package->id }});
                formData.append('user_id', {{ Auth::user()->id }});
                formData.append('package_price', {{ $package->price }});
                formData.append('payment_date', new Date().toISOString().slice(0, 10));
                formData.append('payment_method', $('#payment_method').val());
                formData.append('payment_month', new Date().toISOString().slice(0, 7));
                formData.append('payment_type', 'package');

                $.ajax({
                    type: "POST",
                    url: '{{ route('savePackagePayment') }}',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success == true) {
                            $('#payment_form')[0].reset();
                            toastr.success(response.message);

                            // Optional: Redirect to success page or dashboard
                            setTimeout(function() {
                                window.location.href = '{{ route('userDashboard') }}';
                            }, 2000);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr) {
                        toastr.error('An error occurred. Please try again.');
                    }
                });
            });

            // Country-City dynamic dropdown
            $('#country').change(function() {
                var country = $(this).val();
                var citySelect = $('#city');

                citySelect.empty();
                citySelect.append('<option value="">Select City</option>');

                if (country && window.citiesData && window.citiesData[country]) {
                    $.each(window.citiesData[country], function(index, city) {
                        citySelect.append('<option value="' + city + '">' + city + '</option>');
                    });
                }
            });

            // Initialize cities data for JavaScript
            window.citiesData = @json($cities);
        });
    </script>
@endsection
