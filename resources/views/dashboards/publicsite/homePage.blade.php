@extends('layouts.publicsite.app')

@section('content')

    <main>
      <!-- Hero -->
      <div
        class="relative pt-16 pb-32 flex content-center h-screen items-center justify-center"
        style="min-height: 95vh"
      >
        <div
          class="absolute top-0 w-full bg-top bg-cover h-screen"
          style="
            background-image: url('https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2134&q=80');
          "
        >
          <span
            id="blackOverlay"
            class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto" data-aos="fade-in">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
              <div>
                <h1 class="text-white font-semibold text-5xl">
                  Fitness <span class="text-orange-500">Hub</span>
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                    Strong Mind , From Body , Stronger You
                </p>
              </div>
            </div>
          </div>
        </div>
        {{-- <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px; transform: translateZ(0px)"
        > --}}
          <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
          >
            <polygon points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>


    </main>

@endsection
