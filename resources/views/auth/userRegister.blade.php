@extends('auth.layouts.app2')

@section('content')
    <style>
        .registration-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('img/carousel-1.jpg') no-repeat center center;
            background-size: cover;
            padding: 100px 0;
        }

        .registration-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .registration-header {
            background: #3A7CBD;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .registration-header h2 {
            font-weight: 700;
            margin-bottom: 5px;
            font-family: 'Oswald', sans-serif;
        }

        .registration-body {
            padding: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #1D2A3B;
            margin-bottom: 8px;
            font-size: 0.9rem;
        }

        .form-control {
            padding: 12px 15px;
            border: 2px solid #e2e8f0;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #3A7CBD;
            box-shadow: 0 0 0 3px rgba(58, 124, 189, 0.2);
        }

        .form-control.is-invalid {
            border-color: #e53e3e;
        }

        .error-message {
            color: #e53e3e;
            font-size: 0.8rem;
            margin-top: 5px;
        }

        .btn-register {
            background: #3A7CBD;
            color: white;
            padding: 12px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            width: 100%;
        }

        .btn-register:hover {
            background: #2c6195;
            transform: translateY(-2px);
        }

        .login-link {
            color: #3A7CBD;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        .password-toggle {
            cursor: pointer;
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
        }

        .password-input-group {
            position: relative;
        }

        @media (max-width: 768px) {
            .registration-section {
                padding: 50px 15px;
            }

            .registration-body {
                padding: 20px;
            }
        }
    </style>

    <!-- Registration Section -->
    <div class="registration-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="registration-card">
                        <div class="registration-header">
                            <h2>CREATE YOUR ACCOUNT</h2>
                            <p>Join our fitness community and start your journey</p>
                        </div>

                        <div class="registration-body">
                            <form role="form text-left" method="POST" action="{{ route('registerUser') }}"
                                id="registrationForm">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="salutation">Salutation <span
                                                class="text-danger">*</span></label>
                                        <select class="form-select form-control" name="salutation" id="salutation" required>
                                            <option value="">Select salutation</option>
                                            <option value="Mr" {{ old('salutation') == 'Mr' ? 'selected' : '' }}>Mr
                                            </option>
                                            <option value="Ms" {{ old('salutation') == 'Ms' ? 'selected' : '' }}>Ms
                                            </option>
                                            <option value="Mrs" {{ old('salutation') == 'Mrs' ? 'selected' : '' }}>Mrs
                                            </option>
                                        </select>
                                        @error('salutation')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="first_name">First Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}" required
                                            class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}"
                                            placeholder="First Name" id="first_name" />
                                        @error('first_name')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="last_name">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" required
                                        class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                                        placeholder="Last Name" id="last_name" />
                                    @error('last_name')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="email">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                                        autocomplete="username"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        placeholder="Email" id="email" />
                                    @error('email')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label class="form-label" for="gender">Gender <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select form-control" name="gender" id="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male" {{ old('gender') == 'Mr' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ old('gender') == 'Ms' ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="Other" {{ old('gender') == 'Mrs' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                    @error('gender')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="height">Height <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="height" value="{{ old('height') }}"
                                        class="form-control {{ $errors->has('height') ? 'is-invalid' : '' }}"
                                        placeholder="Height" id="height" />
                                    @error('height')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="weight">Weight <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="weight" value="{{ old('weight') }}"
                                        class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}"
                                        placeholder="Weight" id="weight" />
                                    @error('weight')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="contact_no">Contact No <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="contact_no" value="{{ old('contact_no') }}" required
                                        class="form-control {{ $errors->has('contact_no') ? 'is-invalid' : '' }}"
                                        placeholder="Contact No" id="contact_no" />
                                    @error('contact_no')
                                        <div class="error-message">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <label class="form-label" for="house_no">House No. <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="house_no" value="{{ old('house_no') }}" required
                                            class="form-control {{ $errors->has('house_no') ? 'is-invalid' : '' }}"
                                            placeholder="House No." id="house_no" />
                                        @error('house_no')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-8 mb-4">
                                        <label class="form-label" for="street">Street <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="street" value="{{ old('street') }}" required
                                            class="form-control {{ $errors->has('street') ? 'is-invalid' : '' }}"
                                            placeholder="Street" id="street" />
                                        @error('street')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="district">District <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="district" value="{{ old('district') }}" required
                                            class="form-control {{ $errors->has('district') ? 'is-invalid' : '' }}"
                                            placeholder="District" id="district" />
                                        @error('district')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="province">Province <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="province" value="{{ old('province') }}" required
                                            class="form-control {{ $errors->has('province') ? 'is-invalid' : '' }}"
                                            placeholder="Province" id="province" />
                                        @error('province')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="password">Password <span
                                                class="text-danger">*</span></label>
                                        <div class="password-input-group">
                                            <input type="password" name="password" required autocomplete="new-password"
                                                class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                placeholder="Password" id="password" />
                                            <span class="password-toggle" onclick="togglePassword('password')">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        @error('password')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <label class="form-label" for="password_confirmation">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <div class="password-input-group">
                                            <input type="password" name="password_confirmation" required
                                                autocomplete="new-password"
                                                class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                                placeholder="Confirm Password" id="password_confirmation" />
                                            <span class="password-toggle"
                                                onclick="togglePassword('password_confirmation')">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                        @error('password_confirmation')
                                            <div class="error-message">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" name="terms"
                                        required>
                                    <label class="form-check-label" for="terms">
                                        I agree to the <a href="#" class="login-link">Terms and Conditions</a>
                                    </label>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-register btn-lg">
                                        CREATE ACCOUNT
                                    </button>
                                </div>

                                <div class="text-center mt-4">
                                    <p>Already have an account?
                                        <a href="{{ url('/user-login') }}" class="login-link">Sign in here</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Section End -->

    <script>
        // Toggle password visibility
        function togglePassword(inputId) {
            const passwordInput = document.getElementById(inputId);
            const toggleIcon = passwordInput.nextElementSibling.querySelector('i');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }

        // Form validation
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            let isValid = true;
            const requiredFields = this.querySelectorAll('[required]');

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                }
            });

            // Check if passwords match
            const password = document.getElementById('password');
            const confirmPassword = document.getElementById('password_confirmation');

            if (password.value !== confirmPassword.value) {
                isValid = false;
                confirmPassword.classList.add('is-invalid');
                document.querySelector('#password_confirmation + .error-message').textContent =
                    'Passwords do not match';
            }

            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
@endsection
