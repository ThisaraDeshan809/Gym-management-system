@extends('layouts.publicsite.app') 

@section('content')
    
    <main>
      <!-- Hero -->
      <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 95vh"
      >
        <div
          class="absolute top-0 w-full h-full bg-top bg-cover"
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
                  Feel The <span class="text-orange-500">Power</span>
                </h1>
                <p class="mt-4 text-lg text-gray-300">
                  Welcome to The Power Room. We are a fitness and training
                  center that focuses on pushing you to your absolute limit.
                  Download our complete brochure to get started today!
                </p>
                <a
                  href="#"
                  class="bg-transparent hover:bg-orange-500 text-orange-500 font-semibold hover:text-white p-4 border border-orange-500 hover:border-transparent rounded inline-block mt-5 cursor-pointer"
                  >Download Brochure</a
                >
              </div>
            </div>
          </div>
        </div>
        <div
          class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
          style="height: 70px; transform: translateZ(0px)"
        >
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

      <!-- About Section -->
      <section id="about" class="relative py-20 bg-black text-white">
        <div class="container mx-auto px-4">
          <div class="items-center flex flex-wrap">
            <div
              class="w-full md:w-4/12 ml-auto mr-auto px-4"
              data-aos="fade-right"
            >
              <img
                alt="..."
                class="max-w-full rounded-lg shadow-lg"
                src="https://images.unsplash.com/photo-1550345332-09e3ac987658?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
              />
            </div>
            <div
              class="w-full md:w-5/12 ml-auto mr-auto px-4"
              data-aos="fade-left"
            >
              <div class="md:pr-12">
                <small class="text-orange-500">About our gym</small>
                <h3 class="text-4xl uppercase font-bold">Safe Body Building</h3>
                <p class="mt-4 text-lg leading-relaxed">
                  The extension comes with three pre-built pages to help you get
                  started faster. You can change the text and images and you're
                  good to go.
                </p>
                <ul class="list-none mt-6">
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-dumbbell fa-2x"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">
                          The latest & greatest gym equipment
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-hard-hat fa-2x"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">
                          5-inch, quality foam floor padding
                        </h4>
                      </div>
                    </div>
                  </li>
                  <li class="py-2">
                    <div class="flex items-center">
                      <div>
                        <span
                          class="font-semibold inline-block py-3 mr-3 text-orange-500"
                          ><i class="fas fa-users fa-2x"></i
                        ></span>
                      </div>
                      <div>
                        <h4 class="text-xl">3 professional trainers</h4>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Trainers Section -->
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

      <!-- Contact Header Section -->
      <section class="pb-20 relative block bg-black text-white">
        <div
          class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
          style="height: 80px; transform: translateZ(0px)"
        >
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
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64 pb-20 pt-20">
          <div class="flex flex-wrap text-center justify-center">
            <div class="w-full lg:w-6/12 px-4">
              <h2 class="text-4xl font-semibold text-white uppercase">
                Contact Us
              </h2>
              <p class="text-lg leading-relaxed mt-4 mb-4">
                Contact us to ask any questions, aquire a membership, talk to
                our trainers or anything else
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form -->
      <section class="relative block py-24 lg:pt-0 bg-black">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
            <div class="w-full lg:w-6/12 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
                data-aos="fade-up-right"
              >
                <div class="flex-auto p-5 lg:p-10 bg-orange-500 text-white">
                  <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                  <p class="leading-relaxed mt-1 mb-4">
                    Complete this form and we will get back to you in 24 hours.
                  </p>
                  <div class="relative w-full mb-3 mt-8">
                    <label
                      class="block uppercase text-xs font-bold mb-2"
                      for="full-name"
                      >Full Name</label
                    ><input
                      type="text"
                      class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Full Name"
                      style="transition: all 0.15s ease 0s"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-xs font-bold mb-2"
                      for="email"
                      >Email</label
                    ><input
                      type="email"
                      class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Email"
                      style="transition: all 0.15s ease 0s"
                    />
                  </div>
                  <div class="relative w-full mb-3">
                    <label
                      class="block uppercase text-xs font-bold mb-2"
                      for="message"
                      >Message</label
                    ><textarea
                      rows="4"
                      cols="80"
                      class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Type a message..."
                    ></textarea>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                      style="transition: all 0.15s ease 0s"
                    >
                      Send Message
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection
