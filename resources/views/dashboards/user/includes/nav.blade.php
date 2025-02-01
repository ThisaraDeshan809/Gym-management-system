<div class="container mx-auto sticky top-0 z-sticky w-full">
    <div class="flex flex-wrap mx-auto">
        <div class="w-full max-w-full px-3 flex-0">

            <nav
                class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 mx-6 my-4 shadow-soft-2xl rounded-blur bg-gradient-to-tl from-[#e38d24] to-[#f7b615] backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-between">
                <div class="flex items-center justify-between w-full p-0 pl-6 mx-auto flex-wrap-inherit">
                    <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-black lg:ml-0"
                        href="{{ route('userDashboard') }}"> Fit Club </a>


                    <div class="flex items-center md:order-2 md:space-x-0 rtl:space-x-reverse">

                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            @else
                                <span class="inline-flex rounded-md">
                                    {{ Auth::user()->name }}
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            @endif
                        </button>


                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="user-dropdown">
                            <div class="px-4 py-3">
                                <span
                                    class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                                <span
                                    class="block text-sm w-36 text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>

                                <!-- <a href="{{ url('/Customer-login') }}" class="leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-[#e38d24] to-[#f7b615] rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-8 py-2 text-center align-middle font-semibold text-black transition-all">Become a seller</a> -->
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">

                                <li>
                                    <a class="block px-4 py-2 text-sm text-black hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                                        href="{{ route('profile.show') }}">
                                        <svg viewBox="0 0 24 24" class="w-5 mr-1" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <circle cx="12" cy="6" r="4" stroke="#000000"
                                                    stroke-width="1.5"></circle>
                                                <path
                                                    d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634"
                                                    stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                                            </g>
                                        </svg>
                                        My Profile
                                    </a>
                                </li>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <li><a href="{{ route('api-tokens.index') }}"
                                            class="py-1.2 font-normal w-full bg-transparent px-4 text-slate-500 hover:bg-gray-200 hover:text-slate-700">API
                                            Tokens</a></li>
                                @endif

                                <li>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                            <svg viewBox="0 0 24 24" class="w-5 mr-1" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M9 20.7499H6C5.65324 20.7647 5.30697 20.7109 4.98101 20.5917C4.65505 20.4725 4.3558 20.2902 4.10038 20.0552C3.84495 19.8202 3.63837 19.5371 3.49246 19.2222C3.34654 18.9073 3.26415 18.5667 3.25 18.2199V5.77994C3.26415 5.43316 3.34654 5.09256 3.49246 4.77765C3.63837 4.46274 3.84495 4.17969 4.10038 3.9447C4.3558 3.70971 4.65505 3.52739 4.98101 3.40818C5.30697 3.28896 5.65324 3.23519 6 3.24994H9C9.19891 3.24994 9.38968 3.32896 9.53033 3.46961C9.67098 3.61027 9.75 3.80103 9.75 3.99994C9.75 4.19886 9.67098 4.38962 9.53033 4.53027C9.38968 4.67093 9.19891 4.74994 9 4.74994H6C5.70307 4.72412 5.4076 4.81359 5.17487 4.99977C4.94213 5.18596 4.78999 5.45459 4.75 5.74994V18.2199C4.78999 18.5153 4.94213 18.7839 5.17487 18.9701C5.4076 19.1563 5.70307 19.2458 6 19.2199H9C9.19891 19.2199 9.38968 19.299 9.53033 19.4396C9.67098 19.5803 9.75 19.771 9.75 19.9699C9.75 20.1689 9.67098 20.3596 9.53033 20.5003C9.38968 20.6409 9.19891 20.7199 9 20.7199V20.7499Z"
                                                        fill="#ff0000"></path>
                                                    <path
                                                        d="M16 16.7499C15.9015 16.7504 15.8038 16.7312 15.7128 16.6934C15.6218 16.6556 15.5392 16.6 15.47 16.5299C15.3296 16.3893 15.2507 16.1987 15.2507 15.9999C15.2507 15.8012 15.3296 15.6105 15.47 15.4699L18.94 11.9999L15.47 8.52991C15.3963 8.46125 15.3372 8.37845 15.2962 8.28645C15.2552 8.19445 15.2332 8.09513 15.2314 7.99443C15.2296 7.89373 15.2482 7.7937 15.2859 7.70031C15.3236 7.60692 15.3797 7.52209 15.451 7.45087C15.5222 7.37965 15.607 7.32351 15.7004 7.28579C15.7938 7.24807 15.8938 7.22954 15.9945 7.23132C16.0952 7.23309 16.1945 7.25514 16.2865 7.29613C16.3785 7.33712 16.4613 7.39622 16.53 7.46991L20.53 11.4699C20.6705 11.6105 20.7493 11.8012 20.7493 11.9999C20.7493 12.1987 20.6705 12.3893 20.53 12.5299L16.53 16.5299C16.4608 16.6 16.3782 16.6556 16.2872 16.6934C16.1962 16.7312 16.0985 16.7504 16 16.7499Z"
                                                        fill="#ff0000"></path>
                                                    <path
                                                        d="M20 12.75H9C8.80109 12.75 8.61032 12.671 8.46967 12.5303C8.32902 12.3897 8.25 12.1989 8.25 12C8.25 11.8011 8.32902 11.6103 8.46967 11.4697C8.61032 11.329 8.80109 11.25 9 11.25H20C20.1989 11.25 20.3897 11.329 20.5303 11.4697C20.671 11.6103 20.75 11.8011 20.75 12C20.75 12.1989 20.671 12.3897 20.5303 12.5303C20.3897 12.671 20.1989 12.75 20 12.75Z"
                                                        fill="#b91c1c"></path>
                                                </g>
                                            </svg>
                                            Log Out
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>



                        <button navbar-trigger
                            class="px-3 py-1 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg ease-soft-in-out lg:hidden"
                            type="button" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span
                                class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                                <span bar1
                                    class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar2
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar3
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            </span>
                        </button>

                    </div>



                    <div navbar-menu
                        class="items-center flex-grow overflow-hidden transition-all duration-500 ease-soft lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                        <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                            <li>
                                <a class="flex items-center px-4 py-2 mr-2 font-bold transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-black lg:px-2"
                                    aria-current="page" href="{{ route('userDashboard') }}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-bold transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-black lg:px-2"
                                    href="{{ route('aboutUs') }}">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-bold transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-black lg:px-2"
                                    href="{{ route('ourTeam') }}">
                                    Our Team
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-bold transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-black lg:px-2"
                                    href="{{ route('user_equipments_page') }}">
                                    Our Equipments
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-bold transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-black lg:px-2"
                                    href="{{ route('contactUs') }}">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-bold transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-black lg:px-2"
                                    href="{{ route('pricing') }}">
                                    Pricing
                                </a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 mr-2 font-bold transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-sm text-black lg:px-2"
                                    href="{{ route('my_reseravtions_page') }}">
                                    My Reservations
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
