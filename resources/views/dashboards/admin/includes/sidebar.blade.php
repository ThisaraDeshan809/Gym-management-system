<aside mini="false" class="dark:bg-gray-950  ease-soft-in-out z-990 max-w-64 dark: fixed inset-y-0 left-0 my-4 xl:ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 shadow-none transition-all duration-200 xl:translate-x-0 xl:bg-transparent" id="sidenav-main">
    <!-- header -->

    <div class="h-20">
      <!-- x i -->
      <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 dark:text-white xl:hidden" aria-hidden="true" sidenav-close-btn></i>
        <a class="flex -ml-4 justify-center items-center m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white" href="{{route('home')}}">
          <img src="{{asset('img/gymfit.png')}}" class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-16 dark:hidden" alt="main_logo" />
          <img src="{{asset('img/gymfit.png')}}" class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-16 dark:inline-block" alt="main_logo" />
        </a>
    </div>

    <!-- //---------hr----------// -->

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-full h-auto grow basis-full" id="sidenav-collapse-main">
      <!-- primary list  -->

      <ul class="flex flex-col pl-0 mb-0 list-none">

        <li class="mt-0.5 w-full">
          <a active_primary collapse_trigger="primary" href="javascript:;" class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out text-sm py-2.7 active xl:shadow-soft-xl my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white dark:bg-transparent px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:rotate-180 after:font-bold after:text-slate-800 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80" aria-controls="applicationsExamples" role="button" aria-expanded="true">
            <div class="stroke-none shadow-soft-sm bg-gradient-to-tl from-gray-800 to-slate-800 mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
              <svg fill="#ffffff" viewBox="0 0 59.998 59.998" id="Capa_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M59.206,0.293c-0.391-0.391-1.023-0.391-1.414,0L54.085,4H30.802L1.532,33.511c-0.666,0.666-1.033,1.553-1.033,2.495 s0.367,1.829,1.033,2.495l20.466,20.466c0.687,0.687,1.588,1.031,2.491,1.031c0.907,0,1.814-0.347,2.509-1.041l28.501-29.271V5.414 l3.707-3.707C59.597,1.316,59.597,0.684,59.206,0.293z M53.499,28.874L25.574,57.553c-0.596,0.596-1.566,0.596-2.162,0 L2.946,37.087c-0.596-0.596-0.596-1.566,0.003-2.165L31.636,6h20.449l-4.833,4.833C46.461,10.309,45.516,10,44.499,10 c-2.757,0-5,2.243-5,5s2.243,5,5,5s5-2.243,5-5c0-1.017-0.309-1.962-0.833-2.753l4.833-4.833V28.874z M47.499,15 c0,1.654-1.346,3-3,3s-3-1.346-3-3s1.346-3,3-3c0.462,0,0.894,0.114,1.285,0.301l-1.992,1.992c-0.391,0.391-0.391,1.023,0,1.414 C43.987,15.902,44.243,16,44.499,16s0.512-0.098,0.707-0.293l1.992-1.992C47.386,14.106,47.499,14.538,47.499,15z"></path> <path d="M42.246,31.281L31.64,41.888c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293L43.66,32.695c0.391-0.391,0.391-1.023,0-1.414S42.637,30.891,42.246,31.281z"></path> <path d="M45.779,27.74c-0.181,0.189-0.29,0.449-0.29,0.71c0,0.27,0.109,0.529,0.29,0.71c0.189,0.189,0.449,0.29,0.71,0.29 c0.26,0,0.52-0.101,0.699-0.29c0.19-0.181,0.301-0.44,0.301-0.71c0-0.261-0.11-0.521-0.301-0.71 C46.818,27.37,46.159,27.37,45.779,27.74z"></path> <path d="M37.296,19.26c0.391-0.391,0.391-1.023,0-1.414c-0.391-0.391-1.023-0.391-1.414,0L25.275,28.453 c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293L37.296,19.26z"></path> <path d="M33.761,31.281c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l7.071-7.071c0.391-0.391,0.391-1.023,0-1.414 s-1.023-0.391-1.414,0l-7.071,7.071C33.37,30.258,33.37,30.891,33.761,31.281z"></path> <path d="M28.104,35.523l-1.414,1.414c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293l1.414-1.414c0.391-0.391,0.391-1.023,0-1.414S28.494,35.133,28.104,35.523z"></path> <path d="M17.497,28.745c0.256,0,0.512-0.098,0.707-0.293l10.606-10.606c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0 L16.79,27.038c-0.391,0.391-0.391,1.023,0,1.414C16.985,28.647,17.241,28.745,17.497,28.745z"></path> <path d="M31.639,14.6c0.26,0,0.521-0.1,0.71-0.29c0.181-0.189,0.29-0.439,0.29-0.71c0-0.26-0.109-0.52-0.3-0.71 c-0.37-0.37-1.03-0.37-1.41,0.01c-0.18,0.181-0.29,0.44-0.29,0.7s0.11,0.521,0.29,0.71C31.119,14.5,31.379,14.6,31.639,14.6z"></path> <path d="M22.449,31.28c-0.19,0.189-0.29,0.439-0.29,0.71c0,0.27,0.1,0.52,0.29,0.699c0.18,0.19,0.439,0.301,0.71,0.301 c0.26,0,0.52-0.11,0.699-0.29c0.19-0.19,0.301-0.45,0.301-0.71c0-0.261-0.11-0.521-0.301-0.71 C23.489,30.91,22.818,30.91,22.449,31.28z"></path> <path d="M32.349,34.109c0.181-0.18,0.29-0.439,0.29-0.71c0-0.26-0.109-0.52-0.29-0.71c-0.38-0.37-1.04-0.37-1.42,0 c-0.18,0.19-0.29,0.45-0.29,0.71c0,0.271,0.11,0.521,0.29,0.71c0.19,0.19,0.45,0.29,0.71,0.29S32.159,34.3,32.349,34.109z"></path> <path d="M24.651,47.627c0.615-0.929,0.909-2.041,0.814-3.172c-0.078-0.944-0.533-1.797-1.28-2.403 c-0.765-0.619-1.769-0.903-2.738-0.781l-2.802,0.35l-3.846-3.846c1.114-0.529,2.485-0.344,3.406,0.577 c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414c-1.707-1.707-4.352-1.918-6.293-0.635l-0.779-0.779 c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.781,0.781c-0.614,0.928-0.908,2.041-0.813,3.172 c0.078,0.943,0.533,1.797,1.279,2.402c0.765,0.619,1.763,0.904,2.739,0.783l2.802-0.35l3.836,3.836 c-1.111,0.501-2.51,0.318-3.396-0.568c-0.391-0.391-1.023-0.391-1.414,0c-0.391,0.39-0.391,1.023,0,1.414 c0.943,0.944,2.199,1.465,3.535,1.465c0.996,0,1.946-0.291,2.757-0.829l0.622,0.622c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L24.651,47.627z M14.871,42.092c-0.438,0.054-0.889-0.072-1.231-0.352 c-0.319-0.26-0.514-0.62-0.547-1.016c-0.044-0.536,0.07-1.059,0.295-1.532l2.742,2.742L14.871,42.092z M21.695,43.255 c0.433-0.059,0.886,0.072,1.229,0.351c0.32,0.26,0.515,0.62,0.548,1.016c0.044,0.536-0.07,1.059-0.296,1.532l-2.741-2.741 L21.695,43.255z"></path> </g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </g></svg>
            </div>

            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700 dark:text-gray-400">Packages</span>
          </a>

          <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out" id="ecommerceExamples">
            <ul class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
              <li class="w-full">
                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80" href="{{url('/all-Packages')}}">
                  <span class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out"> R </span>
                  <span class="transition-all duration-100 pointer-events-none ease-soft">Packages</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="mt-0.5 w-full">
            <a active_primary collapse_trigger="primary" href="javascript:;" class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out text-sm py-2.7 active xl:shadow-soft-xl my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white dark:bg-transparent px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:rotate-180 after:font-bold after:text-slate-800 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80" aria-controls="applicationsExamples" role="button" aria-expanded="true">
              <div class="stroke-none shadow-soft-sm bg-gradient-to-tl from-gray-800 to-slate-800 mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                <svg fill="#ffffff" viewBox="0 0 59.998 59.998" id="Capa_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M59.206,0.293c-0.391-0.391-1.023-0.391-1.414,0L54.085,4H30.802L1.532,33.511c-0.666,0.666-1.033,1.553-1.033,2.495 s0.367,1.829,1.033,2.495l20.466,20.466c0.687,0.687,1.588,1.031,2.491,1.031c0.907,0,1.814-0.347,2.509-1.041l28.501-29.271V5.414 l3.707-3.707C59.597,1.316,59.597,0.684,59.206,0.293z M53.499,28.874L25.574,57.553c-0.596,0.596-1.566,0.596-2.162,0 L2.946,37.087c-0.596-0.596-0.596-1.566,0.003-2.165L31.636,6h20.449l-4.833,4.833C46.461,10.309,45.516,10,44.499,10 c-2.757,0-5,2.243-5,5s2.243,5,5,5s5-2.243,5-5c0-1.017-0.309-1.962-0.833-2.753l4.833-4.833V28.874z M47.499,15 c0,1.654-1.346,3-3,3s-3-1.346-3-3s1.346-3,3-3c0.462,0,0.894,0.114,1.285,0.301l-1.992,1.992c-0.391,0.391-0.391,1.023,0,1.414 C43.987,15.902,44.243,16,44.499,16s0.512-0.098,0.707-0.293l1.992-1.992C47.386,14.106,47.499,14.538,47.499,15z"></path> <path d="M42.246,31.281L31.64,41.888c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293L43.66,32.695c0.391-0.391,0.391-1.023,0-1.414S42.637,30.891,42.246,31.281z"></path> <path d="M45.779,27.74c-0.181,0.189-0.29,0.449-0.29,0.71c0,0.27,0.109,0.529,0.29,0.71c0.189,0.189,0.449,0.29,0.71,0.29 c0.26,0,0.52-0.101,0.699-0.29c0.19-0.181,0.301-0.44,0.301-0.71c0-0.261-0.11-0.521-0.301-0.71 C46.818,27.37,46.159,27.37,45.779,27.74z"></path> <path d="M37.296,19.26c0.391-0.391,0.391-1.023,0-1.414c-0.391-0.391-1.023-0.391-1.414,0L25.275,28.453 c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293L37.296,19.26z"></path> <path d="M33.761,31.281c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l7.071-7.071c0.391-0.391,0.391-1.023,0-1.414 s-1.023-0.391-1.414,0l-7.071,7.071C33.37,30.258,33.37,30.891,33.761,31.281z"></path> <path d="M28.104,35.523l-1.414,1.414c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293l1.414-1.414c0.391-0.391,0.391-1.023,0-1.414S28.494,35.133,28.104,35.523z"></path> <path d="M17.497,28.745c0.256,0,0.512-0.098,0.707-0.293l10.606-10.606c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0 L16.79,27.038c-0.391,0.391-0.391,1.023,0,1.414C16.985,28.647,17.241,28.745,17.497,28.745z"></path> <path d="M31.639,14.6c0.26,0,0.521-0.1,0.71-0.29c0.181-0.189,0.29-0.439,0.29-0.71c0-0.26-0.109-0.52-0.3-0.71 c-0.37-0.37-1.03-0.37-1.41,0.01c-0.18,0.181-0.29,0.44-0.29,0.7s0.11,0.521,0.29,0.71C31.119,14.5,31.379,14.6,31.639,14.6z"></path> <path d="M22.449,31.28c-0.19,0.189-0.29,0.439-0.29,0.71c0,0.27,0.1,0.52,0.29,0.699c0.18,0.19,0.439,0.301,0.71,0.301 c0.26,0,0.52-0.11,0.699-0.29c0.19-0.19,0.301-0.45,0.301-0.71c0-0.261-0.11-0.521-0.301-0.71 C23.489,30.91,22.818,30.91,22.449,31.28z"></path> <path d="M32.349,34.109c0.181-0.18,0.29-0.439,0.29-0.71c0-0.26-0.109-0.52-0.29-0.71c-0.38-0.37-1.04-0.37-1.42,0 c-0.18,0.19-0.29,0.45-0.29,0.71c0,0.271,0.11,0.521,0.29,0.71c0.19,0.19,0.45,0.29,0.71,0.29S32.159,34.3,32.349,34.109z"></path> <path d="M24.651,47.627c0.615-0.929,0.909-2.041,0.814-3.172c-0.078-0.944-0.533-1.797-1.28-2.403 c-0.765-0.619-1.769-0.903-2.738-0.781l-2.802,0.35l-3.846-3.846c1.114-0.529,2.485-0.344,3.406,0.577 c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414c-1.707-1.707-4.352-1.918-6.293-0.635l-0.779-0.779 c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.781,0.781c-0.614,0.928-0.908,2.041-0.813,3.172 c0.078,0.943,0.533,1.797,1.279,2.402c0.765,0.619,1.763,0.904,2.739,0.783l2.802-0.35l3.836,3.836 c-1.111,0.501-2.51,0.318-3.396-0.568c-0.391-0.391-1.023-0.391-1.414,0c-0.391,0.39-0.391,1.023,0,1.414 c0.943,0.944,2.199,1.465,3.535,1.465c0.996,0,1.946-0.291,2.757-0.829l0.622,0.622c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L24.651,47.627z M14.871,42.092c-0.438,0.054-0.889-0.072-1.231-0.352 c-0.319-0.26-0.514-0.62-0.547-1.016c-0.044-0.536,0.07-1.059,0.295-1.532l2.742,2.742L14.871,42.092z M21.695,43.255 c0.433-0.059,0.886,0.072,1.229,0.351c0.32,0.26,0.515,0.62,0.548,1.016c0.044,0.536-0.07,1.059-0.296,1.532l-2.741-2.741 L21.695,43.255z"></path> </g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </g></svg>
              </div>

              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700 dark:text-gray-400">Attendances</span>
            </a>

            <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out" id="ecommerceExamples">
              <ul class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                <li class="w-full">
                  <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80" href="{{url('/all-attendances')}}">
                    <span class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out"> R </span>
                    <span class="transition-all duration-100 pointer-events-none ease-soft">Attendances</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="mt-0.5 w-full">
            <a active_primary collapse_trigger="primary" href="javascript:;" class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out text-sm py-2.7 active xl:shadow-soft-xl my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white dark:bg-transparent px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:rotate-180 after:font-bold after:text-slate-800 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80" aria-controls="applicationsExamples" role="button" aria-expanded="true">
              <div class="stroke-none shadow-soft-sm bg-gradient-to-tl from-gray-800 to-slate-800 mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
                <svg fill="#ffffff" viewBox="0 0 59.998 59.998" id="Capa_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M59.206,0.293c-0.391-0.391-1.023-0.391-1.414,0L54.085,4H30.802L1.532,33.511c-0.666,0.666-1.033,1.553-1.033,2.495 s0.367,1.829,1.033,2.495l20.466,20.466c0.687,0.687,1.588,1.031,2.491,1.031c0.907,0,1.814-0.347,2.509-1.041l28.501-29.271V5.414 l3.707-3.707C59.597,1.316,59.597,0.684,59.206,0.293z M53.499,28.874L25.574,57.553c-0.596,0.596-1.566,0.596-2.162,0 L2.946,37.087c-0.596-0.596-0.596-1.566,0.003-2.165L31.636,6h20.449l-4.833,4.833C46.461,10.309,45.516,10,44.499,10 c-2.757,0-5,2.243-5,5s2.243,5,5,5s5-2.243,5-5c0-1.017-0.309-1.962-0.833-2.753l4.833-4.833V28.874z M47.499,15 c0,1.654-1.346,3-3,3s-3-1.346-3-3s1.346-3,3-3c0.462,0,0.894,0.114,1.285,0.301l-1.992,1.992c-0.391,0.391-0.391,1.023,0,1.414 C43.987,15.902,44.243,16,44.499,16s0.512-0.098,0.707-0.293l1.992-1.992C47.386,14.106,47.499,14.538,47.499,15z"></path> <path d="M42.246,31.281L31.64,41.888c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293L43.66,32.695c0.391-0.391,0.391-1.023,0-1.414S42.637,30.891,42.246,31.281z"></path> <path d="M45.779,27.74c-0.181,0.189-0.29,0.449-0.29,0.71c0,0.27,0.109,0.529,0.29,0.71c0.189,0.189,0.449,0.29,0.71,0.29 c0.26,0,0.52-0.101,0.699-0.29c0.19-0.181,0.301-0.44,0.301-0.71c0-0.261-0.11-0.521-0.301-0.71 C46.818,27.37,46.159,27.37,45.779,27.74z"></path> <path d="M37.296,19.26c0.391-0.391,0.391-1.023,0-1.414c-0.391-0.391-1.023-0.391-1.414,0L25.275,28.453 c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293L37.296,19.26z"></path> <path d="M33.761,31.281c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l7.071-7.071c0.391-0.391,0.391-1.023,0-1.414 s-1.023-0.391-1.414,0l-7.071,7.071C33.37,30.258,33.37,30.891,33.761,31.281z"></path> <path d="M28.104,35.523l-1.414,1.414c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293l1.414-1.414c0.391-0.391,0.391-1.023,0-1.414S28.494,35.133,28.104,35.523z"></path> <path d="M17.497,28.745c0.256,0,0.512-0.098,0.707-0.293l10.606-10.606c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0 L16.79,27.038c-0.391,0.391-0.391,1.023,0,1.414C16.985,28.647,17.241,28.745,17.497,28.745z"></path> <path d="M31.639,14.6c0.26,0,0.521-0.1,0.71-0.29c0.181-0.189,0.29-0.439,0.29-0.71c0-0.26-0.109-0.52-0.3-0.71 c-0.37-0.37-1.03-0.37-1.41,0.01c-0.18,0.181-0.29,0.44-0.29,0.7s0.11,0.521,0.29,0.71C31.119,14.5,31.379,14.6,31.639,14.6z"></path> <path d="M22.449,31.28c-0.19,0.189-0.29,0.439-0.29,0.71c0,0.27,0.1,0.52,0.29,0.699c0.18,0.19,0.439,0.301,0.71,0.301 c0.26,0,0.52-0.11,0.699-0.29c0.19-0.19,0.301-0.45,0.301-0.71c0-0.261-0.11-0.521-0.301-0.71 C23.489,30.91,22.818,30.91,22.449,31.28z"></path> <path d="M32.349,34.109c0.181-0.18,0.29-0.439,0.29-0.71c0-0.26-0.109-0.52-0.29-0.71c-0.38-0.37-1.04-0.37-1.42,0 c-0.18,0.19-0.29,0.45-0.29,0.71c0,0.271,0.11,0.521,0.29,0.71c0.19,0.19,0.45,0.29,0.71,0.29S32.159,34.3,32.349,34.109z"></path> <path d="M24.651,47.627c0.615-0.929,0.909-2.041,0.814-3.172c-0.078-0.944-0.533-1.797-1.28-2.403 c-0.765-0.619-1.769-0.903-2.738-0.781l-2.802,0.35l-3.846-3.846c1.114-0.529,2.485-0.344,3.406,0.577 c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414c-1.707-1.707-4.352-1.918-6.293-0.635l-0.779-0.779 c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.781,0.781c-0.614,0.928-0.908,2.041-0.813,3.172 c0.078,0.943,0.533,1.797,1.279,2.402c0.765,0.619,1.763,0.904,2.739,0.783l2.802-0.35l3.836,3.836 c-1.111,0.501-2.51,0.318-3.396-0.568c-0.391-0.391-1.023-0.391-1.414,0c-0.391,0.39-0.391,1.023,0,1.414 c0.943,0.944,2.199,1.465,3.535,1.465c0.996,0,1.946-0.291,2.757-0.829l0.622,0.622c0.195,0.195,0.451,0.293,0.707,0.293 s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L24.651,47.627z M14.871,42.092c-0.438,0.054-0.889-0.072-1.231-0.352 c-0.319-0.26-0.514-0.62-0.547-1.016c-0.044-0.536,0.07-1.059,0.295-1.532l2.742,2.742L14.871,42.092z M21.695,43.255 c0.433-0.059,0.886,0.072,1.229,0.351c0.32,0.26,0.515,0.62,0.548,1.016c0.044,0.536-0.07,1.059-0.296,1.532l-2.741-2.741 L21.695,43.255z"></path> </g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </g></svg>
              </div>

              <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700 dark:text-gray-400">Payments</span>
            </a>

            <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out" id="ecommerceExamples">
              <ul class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">
                <li class="w-full">
                  <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80" href="{{url('/all-payments')}}">
                    <span class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out"> R </span>
                    <span class="transition-all duration-100 pointer-events-none ease-soft">Payments</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

        @can('Manage Employees')
        <li class="mt-0.5 w-full">
          <a active_primary collapse_trigger="primary" href="javascript:;" class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out text-sm py-2.7 active xl:shadow-soft-xl my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white dark:bg-transparent px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:rotate-180 after:font-bold after:text-slate-800 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80" aria-controls="applicationsExamples" role="button" aria-expanded="true">
            <div class="stroke-none shadow-soft-sm bg-gradient-to-tl from-gray-800 to-slate-800 mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
              <svg width="800px" height="800px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#745d5d" stroke="#745d5d">
                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                <g id="SVGRepo_iconCarrier"> <title>school_fill</title> <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Building" transform="translate(-432.000000, -48.000000)"> <g id="school_fill" transform="translate(432.000000, 48.000000)"> <path d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z" id="MingCute" fill-rule="nonzero"> </path> <path d="M11.063,2.46883 C11.5716714,2.06187429 12.2791765,2.03280602 12.8162528,2.3816252 L12.937,2.46883 L17.2494,5.91871 C17.67636,6.260305 17.942778,6.7599067 17.991792,7.29932962 L18,7.48045 L18,18.9999 L19,18.9999 L19,10.4999 C19,10.2543889 19.1769086,10.0502644 19.4101355,10.0079345 L19.5,9.99988 L20,9.99988 C21.0543909,9.99988 21.9181678,10.8157482 21.9945144,11.8506337 L22,11.9999 L22,19.8999 C22,20.4669 21.5709778,20.9337222 21.0198548,20.9934452 L20.9,20.9999 L3.1,20.9999 C2.53299067,20.9999 2.06617653,20.5708778 2.00645469,20.0197548 L2,19.8999 L2,11.9999 C2,10.9455091 2.81587733,10.081714 3.85073759,10.0053657 L4,9.99988 L4.5,9.99988 C4.74545778,9.99988 4.9496079,10.1767254 4.99194425,10.4100085 L5,10.4999 L5,18.9999 L6,18.9999 L6,7.48045 C6,6.933637 6.2237058,6.4135135 6.61430643,6.03826498 L6.75061,5.91871 L11.063,2.46883 Z M12,8.99988 C10.8954,8.99988 10,9.89531 10,10.9999 C10,12.1044 10.8954,12.9999 12,12.9999 C13.1046,12.9999 14,12.1044 14,10.9999 C14,9.89531 13.1046,8.99988 12,8.99988 Z" id="形状" fill="#ffffff"> </path> </g> </g> </g> </g>
              </svg>
            </div>

            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700 dark:text-gray-400">Manage Employees</span>
          </a>

          <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out" id="ecommerceExamples">
            <ul class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">

              <li class="w-full">
                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80" href="{{url('/new-employee')}}">
                  <span class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out"> R </span>
                  <span class="transition-all duration-100 pointer-events-none ease-soft">New Employee</span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        @endcan

        @can('Manage Users')
        <li class="mt-0.5 w-full">
          <a active_primary collapse_trigger="primary" href="javascript:;" class="after:ease-soft-in-out after:font-awesome-5-free ease-soft-in-out text-sm py-2.7 active xl:shadow-soft-xl my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white dark:bg-transparent px-4 font-semibold text-slate-700 transition-all after:ml-auto after:inline-block after:rotate-180 after:font-bold after:text-slate-800 after:antialiased after:transition-all after:duration-200 after:content-['\f107'] dark:text-white dark:opacity-80" aria-controls="applicationsExamples" role="button" aria-expanded="true">
            <div class="stroke-none shadow-soft-sm bg-gradient-to-tl from-gray-800 to-slate-800 mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current p-2.5 text-center text-black">
              <svg xmlns="http://www.w3.org/2000/svg" width="800px" fill="#ffffff" height="800px" style="color: white;" viewBox="0 0 512 512"><path d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0 112 64.5 112 144s64.5 144 144 144zm128 32h-55.1c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16H128C57.3 320 0 377.3 0 448v16c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48v-16c0-70.7-57.3-128-128-128z"/></svg>
            </div>

            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft text-slate-700 dark:text-gray-400">User Management</span>
          </a>

          <div class="h-auto overflow-hidden transition-all duration-200 ease-soft-in-out" id="ecommerceExamples">
            <ul class="flex flex-wrap pl-4 mb-0 ml-6 list-none transition-all duration-200 ease-soft-in-out">

              <li class="w-full">
                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80" href="{{url('role-management')}}">
                  <span class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out"> R </span>
                  <span class="transition-all duration-100 pointer-events-none ease-soft">Role Mangement</span>
                </a>
              </li>

              <li class="w-full">
                <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80" href="{{url('new-user')}}">
                  <span class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out"> R </span>
                  <span class="transition-all duration-100 pointer-events-none ease-soft">New User</span>
                </a>
              </li>

              <li class="w-full">
                  <a class="ease-soft-in-out py-1.6 ml-5.4 pl-4 text-sm before:-left-4.5 before:h-1.25 before:w-1.25 relative my-0 mr-4 flex items-center whitespace-nowrap bg-transparent pr-4 font-medium text-slate-800/50 shadow-none transition-colors before:absolute before:top-1/2 before:-translate-y-1/2 before:rounded-3xl before:bg-slate-800/50 before:content-[''] dark:text-white dark:opacity-60 dark:before:bg-white dark:before:opacity-80" href="{{url('system-users')}}">
                      <span class="w-0 text-center transition-all duration-200 opacity-0 pointer-events-none ease-soft-in-out"> R </span>
                      <span class="transition-all duration-100 pointer-events-none ease-soft">System Users</span>
                  </a>
              </li>

            </ul>
          </div>
        </li>
        @endcan

      </ul>
    </div>

    <div class="pt-4 mx-4 mt-4">
      <!-- load phantom colors for card after: -->

      <div sidenav-card class="after:opacity-65 hidden bg-gradient-to-tl from-blue-600 to-cyan-400 relative min-w-0 flex-col items-center break-words rounded-2xl border-0 border-solid border-blue-900 bg-white bg-clip-border shadow-none after:absolute after:top-0 after:bottom-0 after:left-0 after:z-10 after:block after:h-full after:w-full after:rounded-2xl after:content-['']">
        <div class="mb-7 absolute h-full w-full rounded-2xl bg-cover bg-center"></div>
        <div class="relative z-20 flex-auto w-full p-4 text-left text-white">
          <div class="flex items-center justify-center w-8 h-8 mb-4 text-center bg-white bg-center rounded-lg icon shadow-soft-2xl">
            <i sidenav-card-icon class="top-0 z-10 text-transparent  leading-none fas fa-file text-lg bg-gradient-to-tl from-slate-600 to-slate-300 bg-clip-text opacity-80" aria-hidden="true"></i>
          </div>
          <div class="transition-all duration-200 ease-nav-brand">
            <h6 class="mb-0 text-white"></h6>
            <p class="mt-0 mb-4 font-semibold leading-tight text-xs"></p>
            <a href="{{url('doc_manager/dashboard')}}" target="_blank" class="inline-block w-full px-8 py-2 mb-0 font-bold text-center text-black uppercase transition-all ease-in bg-white border-0 border-white rounded-lg shadow-soft-md bg-150 leading-pro text-xs hover:shadow-soft-2xl hover:scale-102">Document Manager</a>
          </div>
        </div>
      </div>

      <!-- pro btn  -->
      <!-- <a class="inline-block w-full px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro?ref=sidebarfree">Upgrade to pro</a> -->
    </div>
  </aside>
