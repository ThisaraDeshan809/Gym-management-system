@extends('layouts.usersite.app')

@section('content')

<section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center text-center mb-24">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold uppercase">
                Meet Our Trainers
              </h2>
              <p class="text-lg leading-relaxed m-4">
                Our trainers are are here to dedicate the time and effort that
                you need to get in the best shape of your life
              </p>
            </div>
          </div>
          <!-- Trainer Card Wrapper -->
          <div class="flex flex-wrap">
            <!-- Card 1 -->
            <div
              class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
              data-aos="flip-right"
            >
              <div class="px-6">
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1597347343908-2937e7dcc560?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                  class="shadow-lg rounded max-w-full mx-auto"
                  style="max-width: 250px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Mr Rogers</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Neighborhood Watchman
                  </p>
                </div>
              </div>
            </div>
            <!-- Card 2 -->
            <div
              class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
              data-aos="flip-right"
            >
              <div class="px-6">
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1594381898411-846e7d193883?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                  class="shadow-lg rounded max-w-full mx-auto"
                  style="max-width: 250px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Strawberry Shortcake</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Cupcake Smasher
                  </p>
                </div>
              </div>
            </div>
            <!-- Card 3 -->
            <div
              class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
              data-aos="flip-right"
            >
              <div class="px-6">
                <img
                  alt="..."
                  src="https://images.unsplash.com/photo-1567013127542-490d757e51fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                  class="shadow-lg rounded max-w-full mx-auto"
                  style="max-width: 250px"
                />
                <div class="pt-6 text-center">
                  <h5 class="text-xl font-bold">Ronald McDonald</h5>
                  <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                    Double Whoopass With Cheese
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
