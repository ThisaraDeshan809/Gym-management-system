@extends('auth.layouts.app2')

@section('content')
    <style>
        .login-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('img/carousel-1.jpg') no-repeat center center;
            background-size: cover;
            padding: 129px 0;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .login-header {
            background: #3A7CBD;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .login-header h2 {
            font-weight: 700;
            margin-bottom: 5px;
            font-family: 'Oswald', sans-serif;
        }

        .login-body {
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

        .btn-login {
            background: #3A7CBD;
            color: white;
            padding: 12px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            width: 100%;
        }

        .btn-login:hover {
            background: #2c6195;
            transform: translateY(-2px);
        }

        .register-link {
            color: #3A7CBD;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link:hover {
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
    </style>

    <!-- Login Section -->
    <div class="login-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-card">
                        <div class="login-header">
                            <h2>WELCOME BACK</h2>
                            <p>Login to continue your journey</p>
                        </div>

                        <div class="login-body">
                            <form method="POST" action="{{ route('loginUser') }}">
                                @csrf

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

                                <div class="mb-4">
                                    <label class="form-label" for="password">Password <span
                                            class="text-danger">*</span></label>
                                    <div class="password-input-group">
                                        <input type="password" name="password" required autocomplete="current-password"
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

                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                    <label class="form-check-label" for="remember_me">Remember Me</label>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-login btn-lg">
                                        LOGIN
                                    </button>
                                </div>

                                <div class="text-center mt-4">
                                    <p>Don't have an account?
                                        <a href="{{ url('/user-register') }}" class="register-link">Create one</a>
                                    </p>
                                    <p>
                                        <a href="{{ route('password.request') }}" class="register-link">Forgot your
                                            password?</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
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
    </script>
@endsection
