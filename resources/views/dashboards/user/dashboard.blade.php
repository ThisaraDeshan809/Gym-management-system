@extends('layouts.usersite.app')

@section('content')


    <div class="relative pt-16 pb-32 flex content-center items-center justify-center" style="min-height: 100vh">
        <img src="{{ asset('img/hero/hero-1.jpg') }}" alt="" class="hidden lg:block absolute top-0 w-full h-full bg-top bg-cover">
        <img src="{{ asset('img/hero/dev.avif') }}" alt="" class="lg:hidden absolute top-0 w-full h-full bg-top bg-cover">
        <div class="container relative mx-auto" data-aos="fade-in">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div>
                    <h1 class="text-white font-semibold text-5xl">Feel The <span class=" text-transparent bg-clip-text bg-gradient-to-tl from-[#e38d24] to-[#f7b615]">Power</span></h1>
                    <p class="mt-4 text-lg text-gray-300">
                        Welcome to The Power Room. We are a fitness and training
                        center that focuses on pushing you to your absolute limit.
                        Download our complete brochure to get started today!
                    </p>
                    <a href="#" class="bg-gradient-to-tl from-[#e38d24] to-[#f7b615] text-black font-semibold py-2 px-3 rounded-full inline-block mt-5 cursor-pointer">
                        Join With Us
                    </a>
              </div>
            </div>
          </div>
        </div>
        
      </div>


@endsection