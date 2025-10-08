@extends('layouts.usersite.app2')

@section('content')
    <!-- Contact Header Section -->
    <section class="container-fluid bg-dark py-5">
        <div class="container py-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h5 class="text-primary text-uppercase mb-3">Get In Touch</h5>
                    <h1 class="display-3 text-uppercase text-white mb-4">Contact Us</h1>
                    <p class="text-light mb-0">Have questions about our fitness programs, facilities, or membership options?
                        We're here to help you achieve your fitness goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Content Section -->
    <section class="container-fluid py-5 bg-secondary">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Contact Information -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-map-marker-alt text-white fs-4"></i>
                            </div>
                            <div class="ms-4">
                                <h5 class="text-white">Our Location</h5>
                                <p class="text-light mb-0">123 Fitness Street, Gym City, FC 12345</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white fs-4"></i>
                            </div>
                            <div class="ms-4">
                                <h5 class="text-white">Call Us</h5>
                                <p class="text-light mb-0">+012 345 6789</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-envelope text-white fs-4"></i>
                            </div>
                            <div class="ms-4">
                                <h5 class="text-white">Email Us</h5>
                                <p class="text-light mb-0">fitnesshub@gmail.com</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-clock text-white fs-4"></i>
                            </div>
                            <div class="ms-4">
                                <h5 class="text-white">Opening Hours</h5>
                                <p class="text-light mb-0">Mon - Fri: 5:00 AM - 11:00 PM</p>
                                <p class="text-light mb-0">Sat - Sun: 7:00 AM - 10:00 PM</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h5 class="text-white mb-3">Follow Us</h5>
                            <div class="d-flex">
                                <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-primary btn-square rounded-circle me-2" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-primary btn-square rounded-circle" href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="bg-dark rounded p-4 p-lg-5">
                        <h3 class="text-uppercase text-white mb-4">Send us a Message</h3>
                        <p class="text-light mb-5">Complete this form and we will get back to you within 24 hours.</p>

                        <form id="contactForm">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-secondary border-0 text-white"
                                            id="fullName" placeholder="Your Full Name" required>
                                        <label for="fullName" class="text-gray-400">Full Name *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-secondary border-0 text-white"
                                            id="email" placeholder="Your Email" required>
                                        <label for="email" class="text-gray-400">Email Address *</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-secondary border-0 text-white"
                                            id="phone" placeholder="Your Phone Number">
                                        <label for="phone" class="text-gray-400">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select bg-secondary border-0 text-white" id="subject">
                                            <option value="">Select Subject</option>
                                            <option value="membership">Membership Inquiry</option>
                                            <option value="training">Personal Training</option>
                                            <option value="classes">Group Classes</option>
                                            <option value="facilities">Facilities</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <label for="subject" class="text-gray-400">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-secondary border-0 text-white" placeholder="Your Message" id="message"
                                            style="height: 150px" required></textarea>
                                        <label for="message" class="text-gray-400">Your Message *</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5 w-100" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12">
                <iframe class="w-100"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445135!2d-74.25986613799748!3d40.69714941774136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1645381573203!5m2!1sen!2s"
                    height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </section>

    <style>
        .bg-secondary {
            background-color: #1a1d23 !important;
        }

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

        .btn-primary {
            background-color: #d63384;
            border-color: #d63384;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background-color: #b02a6f;
            border-color: #b02a6f;
            transform: translateY(-2px);
        }

        .btn-square {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Simple form validation
                const fullName = document.getElementById('fullName').value;
                const email = document.getElementById('email').value;
                const message = document.getElementById('message').value;

                if (!fullName || !email || !message) {
                    alert('Please fill in all required fields.');
                    return;
                }

                // Here you would typically send the form data to your server
                // For now, we'll just show a success message
                alert('Thank you for your message! We will get back to you within 24 hours.');
                contactForm.reset();
            });
        });
    </script>
@endsection
