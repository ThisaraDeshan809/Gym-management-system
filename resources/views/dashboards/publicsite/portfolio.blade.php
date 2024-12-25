@extends('layouts.publicsite.app')

@section('content')


<div class="px-5 xl:px-0 pt-2 mb-2 relative">

<div class="flex items-start gap-8 relative p-1 lg:p-4">
     <div class="hidden lg:block w-[300px] shrink-0 sticky top-3 mb-10 z-10">
          <div>
               <div class="bg-[#212121] rounded-xl p-6">
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
                              <p class="text-sm text-white">City</p><span
                                   class="text-sm text-white">Nuwara Eliya</span>
                         </div>

                         <div class="flex items-center justify-between">
                              <p class="text-sm text-white">Language</p><span
                                   class="text-sm text-white">English, Sinhalese</span>
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
               </div>
               
          </div>
     </div>

     <div class="w-full max-w-full mx-auto">
          <main>
               <section id="home">
                    <div class="relative max-h-[488px] bg-[#212121] p-6 sm:p-10 xl:p-16 rounded-xl flex flex-col lg:flex-row items-center justify-center md:justify-between overflow-hidden">
                         <img src="{{asset('assets/img/bg.png')}}" class="absolute inset-0 w-full h-full object-cover z-0" alt="Background">

                         <div class="relative z-10 w-full md:max-w-full lg:max-w-full text-center md:text-start">
                              <h1 class="text-3xl xl:text-5xl font-semibold text-white leading-9 xl:!leading-[56px]">
                                   Hi, I'm 
                                   <span class="text-transparent bg-clip-text bg-gradient-to-tl from-lime-700 to-lime-500">
                                        {{$latestProfile->profile_name}}. 
                                   </span>
                                   {{$latestProfile->designation}}.
                              </h1>
                              <p class="mt-4 mb-6 xl:my-6 text-sm xl:text-lg text-white leading-6 xl:leading-7">
                                   {{$latestProfile->discription}}
                              </p>
                              <div class="flex items-center justify-center md:justify-start">
                                   @if($latestProfile->cv)
                                        <a class="border-none bg-lime-600 py-2 px-4 hover:bg-white transition duration-200 rounded flex items-center justify-center gap-5 w-fit" href="{{ route('downloadCV', $latestProfile->id) }}" download>
                                             <span class="text-black font-medium">Download CV <i class="fa fa-download" aria-hidden="true"></i></span>
                                        </a>
                                   @else
                                        <span class="text-gray-500">CV not available</span>
                                   @endif
                              </div>
                         </div>

                         <div class="hidden lg:block flex-none -mr-4 pl-5 mt-6 md:mt-0 relative z-10">
                              <img alt="Person" 
                                   width="300" 
                                   height="450" 
                                   class="h-auto max-w-full rounded-lg" 
                                   src="{{asset('assets/img/kaiya.jpg')}}" />
                         </div>
                    </div>


                    <section id="education">
                         <div class="mt-16">
                              <div class="mb-5 xl:mb-12">
                              <h2 class="text-2xl md:text-3xl xl:text-5xl text-white font-bold text-center">Education</h2>
                              <p class="md:max-w-[438px] text-center text-sm text-white/60 mx-auto mt-4">
                              Earned a strong educational foundation with qualifications in key areas, showcasing a commitment to learning and professional growth.
                              </p>
                              </div>
                         
                              <div class="p-6 md:p-10 bg-[#212121] rounded-xl flex flex-col gap-8 md:gap-10">

                              @foreach($latestProfile->qualifications as $qualification)
                              <div class="flex flex-col gap-6 xl:flex-row xl:justify-between border-b border-base-content/10 pb-8 xl:pb-10">
                                   <div class="pl-3 xl:pl-0 border-l-2 xl:border-l-0 border-white w-full xl:max-w-[315px]">
                                             <h5 class="text-lg text-white font-semibold">{{$qualification->university_name}}</h5>
                                             <div class="flex items-center gap-4 mt-2 xl:mt-3">
                                                  <p class="text-xs font-medium text-black px-3 py-1 bg-gradient-to-tl from-lime-700 to-lime-500 rounded-full">{{$qualification->year}}</p>
                                             </div>
                                        </div>
                                        <div class="w-full">
                                             <h5 class="text-lg font-semibold text-white">{{$qualification->degree_name}}</h5>
                                             <p class="mt-2 lg:mt-4 text-white/50">{{$qualification->description}}</p>
                                        </div>
                                   </div>
                              @endforeach
                              </div>
                         </div>
                    </section>
 
                    <section id="timeline">
                         <div class="mt-16">
                              <div class="mb-10 xl:mb-12">
                              <h2 class="text-2xl md:text-3xl xl:text-5xl text-white font-bold text-center">My Time Line</h2>
                              <p class="md:max-w-[438px] text-center text-base text-white/60 mx-auto mt-4">
                              My journey is marked by significant milestones, highlighting personal growth, professional achievements, and a dedication to pursuing my goals.
                              </p>
                              </div>
                              <div class="p-6 md:p-10 bg-[#212121] rounded-xl flex flex-col gap-8 md:gap-10">
                              @foreach($latestProfile->experiences as $experience)
                                   <div>
                                        <div class="flex flex-col gap-6 xl:flex-row xl:justify-between border-b border-base-content/10 pb-8 xl:pb-10">
                                             <div class="pl-3 xl:pl-0 border-l-2 xl:border-l-0 border-base-content/10 w-full xl:max-w-[315px]">
                                                  <h5 class="text-lg text-white font-semibold">{{$experience->company_name}}</h5>
                                                  <div class="flex items-center gap-4 mt-2 xl:mt-3">
                                                       <p class="text-xs font-medium text-black py-1 bg-gradient-to-tl from-lime-700 to-lime-500 px-3 w-fit rounded-full">{{$experience->year}}</p>
                                                  </div>
                                             </div>
                                             <div class="w-full">
                                                  <h5 class="text-lg font-medium text-white">{{$experience->position}}</h5>
                                                  <p class="mt-2 lg:mt-4 text-white/50">{{$experience->description}}</p>
                                             </div>
                                        </div>
                                   </div>
                              @endforeach
                              </div>
                         </div>
                    </section>
                    
                    <section id="portfolio">
                         <div class="mt-16" >
                              <h2 class="text-2xl md:text-3xl xl:text-5xl text-white font-bold text-center">Portfolio</h2>
                              <p class="md:max-w-[438px] text-center text-base text-white/60 mx-auto mt-4">
                              A showcase of my work, featuring diverse projects that highlight my skills, creativity, and commitment to delivering exceptional results.
                              </p>
                         
                              <div class="mt-8 md:mt-12">
                              <!-- Portfolio Grid -->
                              <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                                   @foreach($latestProfile->projects as $project)
                                        <div>
                                             <div class="relative group">
                                                  <img alt="Project 1" class="w-full rounded-xl" src="{{ asset('storage/' . $project->mainimage) }}"/>
                                                  <div class="bg-transparent backdrop-blur-sm w-full h-full absolute top-0 rounded-xl flex items-center justify-center opacity-0 group-hover:opacity-100 transition group-hover:duration-500">
                                                       <a href="{{route('viewProject',$project->id)}}" class="px-3 py-1 bg-gradient-to-tl from-lime-700 to-lime-500 rounded">View More</a>
                                                  </div>
                                             </div>
                                             <h3 class="text-white mt-3 text-center mx-auto font-semibold text-xl">{{$project->project_title}}</h3>
                                        </div>
                                   @endforeach
                         
                              </div>
                              </div>
                         </div>
                    </section>

                    <div >
                         <section id="contact-us" class="container mx-auto py-20 lg:py-28">
                              <h2 class="text-3xl lg:text-4xl font-bold text-white text-center">Get In Touch</h2>
                              <p class="text-base text-white/60 mt-4 md:max-w-[438px] w-full mx-auto text-center">
                                   Feel free to reach out! I’m always open to discussing new opportunities, collaborations, or simply connecting to share ideas.
                              </p>
                              <div class="flex flex-wrap md:flex-nowrap lg:grid lg:grid-cols-7 md:gap-6 mt-12">
                                   <div class="lg:col-span-5 bg-[#212121] p-6 lg:p-10 rounded-xl w-full">
                                        <h3 class="text-xl text-white font-bold pb-6">Leave a Message</h3>
                                        <form action="#" method="post">
                                             @csrf
                                             <div class="flex flex-wrap lg:flex-nowrap items-center gap-6">
                                                  <div class="w-full">
                                                       <p class="text-sm text-white/80 pb-2">Name</p>
                                                       <input type="text" placeholder="Name" class="w-full bg-gray-100 rounded-full outline-none px-4 h-10" />
                                                  </div>
                                                  <div class="w-full">
                                                       <p class="text-sm text-white/80 pb-2">Email</p>
                                                       <input type="email" placeholder="Email" class="w-full bg-gray-100 rounded-full outline-none px-4 h-10" />
                                                  </div>
                                             </div>
                                             <div class="w-full py-5">
                                                  <p class="text-sm text-white/80 pb-2">Subject</p>
                                                  <input type="text" placeholder="Subject" class="w-full bg-gray-100 rounded-full outline-none px-4 h-10" />
                                             </div>
                                             <div class="w-full">
                                                  <p class="text-sm text-white/80 pb-2">Messages</p>
                                                  <textarea placeholder="Message" class="w-full bg-gray-100 rounded-lg outline-none p-5 h-36 lg:h-52"></textarea>
                                             </div>
                                             <button type="submit" class="rounded text-sm text-black font-semibold bg-gradient-to-tl from-lime-700 to-lime-500  px-3 py-2 mt-6">Send Message</button>
                                        </form>
                                   </div>
                                   <div class="lg:col-span-2 space-y-6 mt-6 md:mt-0 w-full">
                                        <div class="rounded-xl bg-[#212121] p-3 lg:p-6 w-full">
                                             <div class="flex items-center justify-center mt-5 bg-gradient-to-tl from-lime-700 to-lime-500 rounded-lg w-10 h-10 mx-auto p-3 mb-6">
                                                  <svg width="18" height="18" viewBox="0 0 18 18"
                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M0.666626 3.1665L6.49996 0.666504L11.5 3.1665L16.7525 0.915671C16.8159 0.88849 16.885 0.877478 16.9537 0.883623C17.0224 0.889767 17.0886 0.912876 17.1461 0.950875C17.2037 0.988874 17.251 1.04057 17.2836 1.10134C17.3163 1.1621 17.3334 1.23002 17.3333 1.299V14.8332L11.5 17.3332L6.49996 14.8332L1.24746 17.084C1.18405 17.1112 1.11489 17.1222 1.04618 17.1161C0.977469 17.1099 0.911359 17.0868 0.853782 17.0488C0.796205 17.0108 0.748964 16.9591 0.716298 16.8983C0.683633 16.8376 0.666565 16.7697 0.666626 16.7007V3.1665ZM11.5 15.4698V4.97984L11.4458 5.00317L6.49996 2.52984V13.0198L6.55413 12.9965L11.5 15.4698Z"
                                                            fill="#131313"></path>
                                                  </svg></div>
                                             <div class="space-y-3 mt-5 mb-5">
                                                  <div class="flex items-center justify-between">
                                                       <p class="text-sm text-white">Country</p>
                                                       <span class="text-sm text-white/60">Sri Lanka</span>
                                                  </div>
                                                  <div class="flex items-center justify-between">
                                                       <p class="text-sm text-white">Province</p>
                                                       <span
                                                            class="text-sm text-white/60">Central</span>
                                                  </div>
                                                  <div class="flex items-center justify-between">
                                                       <p class="text-sm text-white">City</p>
                                                       <span
                                                            class="text-sm text-white/60">Nuwara Eliya</span>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="rounded-xl bg-[#212121] p-3 lg:p-6 w-full">
                                             <div class="flex items-center mt-5 justify-center bg-gradient-to-tl from-lime-700 to-lime-500 rounded-lg w-10 h-10 mx-auto p-3 mb-6">
                                                  <svg width="18" height="16" viewBox="0 0 18 16"
                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M1.49996 0.5H16.5C16.721 0.5 16.9329 0.587797 17.0892 0.744078C17.2455 0.900358 17.3333 1.11232 17.3333 1.33333V14.6667C17.3333 14.8877 17.2455 15.0996 17.0892 15.2559C16.9329 15.4122 16.721 15.5 16.5 15.5H1.49996C1.27895 15.5 1.06698 15.4122 0.910704 15.2559C0.754423 15.0996 0.666626 14.8877 0.666626 14.6667V1.33333C0.666626 1.11232 0.754423 0.900358 0.910704 0.744078C1.06698 0.587797 1.27895 0.5 1.49996 0.5ZM9.04996 7.73583L3.70663 3.19833L2.62746 4.46833L9.06079 9.93083L15.3783 4.46417L14.2883 3.20333L9.05079 7.73583H9.04996Z"
                                                            fill="#131313"></path>
                                                  </svg></div>
                                                  <div class="space-y-3">
                                                       <div class="flex items-center mt-5 mb-1 justify-between gap-2">
                                                            <p class="text-sm text-white">Email</p>
                                                            <span
                                                                 class="text-sm text-white/60 truncate overflow-ellipsis whitespace-wrap">{{$latestProfile->email}}</span>
                                                       </div>
                                                  </div>

                                             
                                        </div>
                                        <div class="rounded-xl bg-[#212121] p-3 lg:p-6 w-full">
                                             <div class="flex items-center mt-5 justify-center bg-gradient-to-tl from-lime-700 to-lime-500 rounded-lg w-10 h-10 mx-auto p-3 mb-6">
                                                  <svg class="text-primary-content" width="12"
                                                       height="18" viewBox="0 0 12 18" fill="none"
                                                       xmlns="http://www.w3.org/2000/svg">
                                                       <path d="M0.999959 0.666504H11C11.221 0.666504 11.4329 0.754301 11.5892 0.910582C11.7455 1.06686 11.8333 1.27882 11.8333 1.49984V16.4998C11.8333 16.7208 11.7455 16.9328 11.5892 17.0891C11.4329 17.2454 11.221 17.3332 11 17.3332H0.999959C0.778946 17.3332 0.566984 17.2454 0.410704 17.0891C0.254424 16.9328 0.166626 16.7208 0.166626 16.4998V1.49984C0.166626 1.27882 0.254424 1.06686 0.410704 0.910582C0.566984 0.754301 0.778946 0.666504 0.999959 0.666504ZM5.99996 13.1665C5.77895 13.1665 5.56698 13.2543 5.4107 13.4106C5.25442 13.5669 5.16663 13.7788 5.16663 13.9998C5.16663 14.2209 5.25442 14.4328 5.4107 14.5891C5.56698 14.7454 5.77895 14.8332 5.99996 14.8332C6.22097 14.8332 6.43293 14.7454 6.58922 14.5891C6.7455 14.4328 6.83329 14.2209 6.83329 13.9998C6.83329 13.7788 6.7455 13.5669 6.58922 13.4106C6.43293 13.2543 6.22097 13.1665 5.99996 13.1665Z"
                                                            fill="currentColor"></path>
                                                  </svg>
                                             </div>
                                             <div class="space-y-3 mt-5">
                                                  <div class="flex items-center justify-between">
                                                       <p class="text-sm text-white">Mobile</p>
                                                       <span class="text-sm text-white/60">{{$latestProfile->phone}}</span>
                                                  </div>
                                                  <div class="flex items-center justify-between">
                                                       <p class="text-sm text-white">Whatsapp</p>
                                                       <span class="text-sm text-white/60">{{$latestProfile->whatsapp}}</span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </section>
                    </div>
               </section>
          </main>
     </div>

        <div class="hidden lg:block bg-[#212121] py-5 rounded-xl sticky top-5 mb-10 z-10">
          <div>
              <nav class="px-5 overflow-y-auto overflow-hidden flex flex-col items-center justify-center gap-8">
                  <a href="#home" class="nav-link px-4 py-3 rounded-lg text-white focus:outline-none">
                      <i class="fa-solid fa-house text-white"></i>
                  </a>

                  <a href="#education" class="nav-link p-4 px-4 py-3 rounded-lg text-white focus:outline-none">
                      <i class="fa-solid fa-graduation-cap text-white"></i>
                  </a>
                  <a href="#timeline" class="nav-link p-4 px-4 py-3 rounded-lg text-white focus:outline-none">
                      <i class="fa-solid fa-user-tie text-white"></i>
                  </a>

                  <a href="#portfolio" class="nav-link p-4 px-4 py-3 rounded-lg text-white focus:outline-none">
                      <i class="fa-solid fa-briefcase text-white"></i>
                  </a>

                  <a href="#contact-us" class="nav-link p-4 px-4 py-3 rounded-lg text-white focus:outline-none">
                      <i class="fa-solid fa-envelopes-bulk text-white"></i>
                  </a>
              </nav>
          </div>
        </div>
      
      
</div>
</div>


@endsection