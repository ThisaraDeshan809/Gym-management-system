@extends('layouts.publicsite.app')

@section('content')
    <div class="mx-auto pt-2 mb-2 relative">
        <div class="flex items-start gap-8 relative p-3 lg:p-4">
            <div class=" w-full shrink-0 sticky top-3 mb-10 z-10">
                <div>
                    <div class="bg-[#212121] rounded-xl p-6 mx-auto">
                        <div class="w-fit mx-auto relative">
                            <img alt="" width="100" height="100" class="rounded-full" src="{{asset('assets/img/mini.jpg')}}" />
                            <svg class="absolute bottom-0 right-0" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="gradient-lime" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#15803D" />
                                    <stop offset="100%" stop-color="#84CC16" />
                                    </linearGradient>
                                </defs>
                                <circle cx="12.9668" cy="12" r="10" fill="url(#gradient-lime)" stroke="#151B2F" stroke-width="4"></circle>
                            </svg>
                        </div>
                        <h3 class="text-white text-xl font-semibold text-center mt-7">Danushka Chathuranga Bandara</h3>
                        <p class="text-xs font-medium bg-gradient-to-tl from-lime-700  to-lime-500 text-black rounded-3xl px-3 w-fit mt-3 mx-auto py-1">{{$latestProfile->designation}}</p>

                        <div class="flex items-center justify-between rounded-lg px-5 py-3 mt-5">
                            <a href="#">
                                <svg class="text-white hover:text-lime-500 transition hover:duration-300" width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.33335 8.00001H7.00002L7.66669 5.33334H5.33335V4.00001C5.33335 3.31334 5.33335 2.66668 6.66669 2.66668H7.66669V0.426677C7.44935 0.39801 6.62869 0.333344 5.76202 0.333344C3.95202 0.333344 2.66669 1.43801 2.66669 3.46668V5.33334H0.666687V8.00001H2.66669V13.6667H5.33335V8.00001Z" fill="currentColor"></path></svg>
                            </a>
                            <a href="#">
                                <svg class="text-white hover:text-lime-500 transition hover:duration-300" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.99998 0.333344C8.81131 0.333344 9.03731 0.34001 9.74798 0.373343C10.458 0.406677 10.9413 0.51801 11.3666 0.683344C11.8066 0.852677 12.1773 1.08201 12.548 1.45201C12.887 1.78527 13.1493 2.1884 13.3166 2.63334C13.4813 3.05801 13.5933 3.54201 13.6266 4.25201C13.658 4.96268 13.6666 5.18868 13.6666 7.00001C13.6666 8.81134 13.66 9.03734 13.6266 9.74801C13.5933 10.458 13.4813 10.9413 13.3166 11.3667C13.1498 11.8119 12.8874 12.2151 12.548 12.548C12.2146 12.8869 11.8115 13.1492 11.3666 13.3167C10.942 13.4813 10.458 13.5933 9.74798 13.6267C9.03731 13.658 8.81131 13.6667 6.99998 13.6667C5.18865 13.6667 4.96265 13.66 4.25198 13.6267C3.54198 13.5933 3.05865 13.4813 2.63331 13.3167C2.1882 13.1497 1.785 12.8873 1.45198 12.548C1.11292 12.2148 0.850601 11.8117 0.683313 11.3667C0.51798 10.942 0.406646 10.458 0.373313 9.74801C0.34198 9.03734 0.333313 8.81134 0.333313 7.00001C0.333313 5.18868 0.33998 4.96268 0.373313 4.25201C0.406646 3.54134 0.51798 3.05868 0.683313 2.63334C0.850137 2.18813 1.11252 1.78489 1.45198 1.45201C1.78509 1.11283 2.18827 0.850496 2.63331 0.683344C3.05865 0.51801 3.54131 0.406677 4.25198 0.373343C4.96265 0.34201 5.18865 0.333344 6.99998 0.333344ZM6.99998 3.66668C6.11592 3.66668 5.26808 4.01787 4.64296 4.64299C4.01784 5.26811 3.66665 6.11596 3.66665 7.00001C3.66665 7.88407 4.01784 8.73191 4.64296 9.35703C5.26808 9.98215 6.11592 10.3333 6.99998 10.3333C7.88403 10.3333 8.73188 9.98215 9.357 9.35703C9.98212 8.73191 10.3333 7.88407 10.3333 7.00001C10.3333 6.11596 9.98212 5.26811 9.357 4.64299C8.73188 4.01787 7.88403 3.66668 6.99998 3.66668ZM11.3333 3.50001C11.3333 3.279 11.2455 3.06703 11.0892 2.91075C10.933 2.75447 10.721 2.66668 10.5 2.66668C10.279 2.66668 10.067 2.75447 9.91072 2.91075C9.75444 3.06703 9.66665 3.279 9.66665 3.50001C9.66665 3.72102 9.75444 3.93299 9.91072 4.08927C10.067 4.24555 10.279 4.33334 10.5 4.33334C10.721 4.33334 10.933 4.24555 11.0892 4.08927C11.2455 3.93299 11.3333 3.72102 11.3333 3.50001ZM6.99998 5.00001C7.53041 5.00001 8.03912 5.21072 8.41419 5.5858C8.78927 5.96087 8.99998 6.46958 8.99998 7.00001C8.99998 7.53044 8.78927 8.03915 8.41419 8.41422C8.03912 8.7893 7.53041 9.00001 6.99998 9.00001C6.46955 9.00001 5.96084 8.7893 5.58577 8.41422C5.21069 8.03915 4.99998 7.53044 4.99998 7.00001C4.99998 6.46958 5.21069 5.96087 5.58577 5.5858C5.96084 5.21072 6.46955 5.00001 6.99998 5.00001Z" fill="currentColor"></path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="text-white hover:fill-lime-500 transition hover:duration-300" width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.62669 3.33333C4.62651 3.68695 4.48587 4.02602 4.23569 4.27594C3.98552 4.52587 3.64631 4.66617 3.29269 4.666C2.93907 4.66582 2.6 4.52517 2.35007 4.275C2.10015 4.02483 1.95985 3.68562 1.96002 3.332C1.9602 2.97837 2.10084 2.63931 2.35102 2.38938C2.60119 2.13946 2.9404 1.99915 3.29402 1.99933C3.64764 1.99951 3.98671 2.14015 4.23664 2.39032C4.48656 2.6405 4.62687 2.97971 4.62669 3.33333ZM4.66669 5.65333H2.00002V14H4.66669V5.65333ZM8.88002 5.65333H6.22669V14H8.85336V9.62C8.85336 7.18 12.0334 6.95333 12.0334 9.62V14H14.6667V8.71333C14.6667 4.6 9.96002 4.75333 8.85336 6.77333L8.88002 5.65333Z"></path>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="text-white hover:fill-lime-500 transition hover:duration-300" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2C6.48 2 2 6.48 2 12C2 16.42 5.07 20.17 8.84 21.5C9.34 21.58 9.5 21.29 9.5 21.04C9.5 20.82 9.49 20.3 9.49 19.63C6.73 20.21 6.14 18.6 6.14 18.6C5.72 17.56 5.12 17.3 5.12 17.3C4.26 16.78 5.18 16.79 5.18 16.79C6.13 16.86 6.61 17.79 6.61 17.79C7.46 19.22 8.82 18.81 9.34 18.56C9.42 17.96 9.65 17.56 9.9 17.32C7.41 17.06 4.89 16.03 4.89 11.94C4.89 10.82 5.28 9.93 5.93 9.24C5.82 8.99 5.48 8.44 6.02 7.64C6.02 7.64 6.83 7.37 9.5 8.96C10.3 8.72 11.16 8.6 12 8.6C12.84 8.6 13.7 8.72 14.5 8.96C17.17 7.37 17.98 7.64 17.98 7.64C18.52 8.44 18.18 8.99 18.07 9.24C18.72 9.93 19.11 10.82 19.11 11.94C19.11 16.04 16.58 17.06 14.1 17.31C14.41 17.58 14.68 18.12 14.68 18.92C14.68 20.02 14.67 20.75 14.67 21.04C14.67 21.29 14.83 21.59 15.33 21.5C19.11 20.17 22.18 16.42 22.18 12C22.18 6.48 17.52 2 12 2Z"></path>
                                </svg> 
                            </a> 
                        </div>
                        <div class="border-b border-gray-50 py-6 space-y-3">
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-white">Email</p><a href="#" class="text-sm text-white hover:text-lime-500 hover:duration-300 transition">{{$latestProfile->email}}</a>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-white">Phone</p><a href="#" class="text-sm text-white hover:text-lime-500 hover:duration-300 transition">{{$latestProfile->phone}}</a>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-white">Country</p><span class="text-sm text-white">Sri Lanka</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-white">City</p><span class="text-sm text-white">Nuwara Eliya</span>
                            </div>

                            <div class="flex items-center justify-between">
                                <p class="text-sm text-white">Language</p><span class="text-sm text-white">English, Sinhalese</span>
                            </div>
                        </div>
                        <div class="border-b border-white py-6">
                            <p class="text-white">SKILLS</p>
                            <div class="space-y-5 mt-5">
                                <div>
                                    <div class="grid items-center justify-between grid-cols-3">
                                        @foreach($latestProfile->skills as $skill)
                                            <p class="text-xs font-medium bg-gradient-to-tl from-lime-700 to-lime-500 text-black rounded px-3 w-fit mt-3 py-1">{{$skill->skill}}</p>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="mt-3 mx-auto border-none bg-lime-600 py-2 px-4 hover:bg-white transition duration-200 rounded flex items-center justify-center gap-5 w-fit" href="{{ url('/') }}">
                            <span class="text-black font-medium">Back to Home <i class="fa-solid fa-house" aria-hidden="true"></i></span>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


