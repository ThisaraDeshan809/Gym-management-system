@if (!in_array(Route::currentRouteName(), ['mobileProfile', 'viewProject']))
<div class="fixed lg:hidden bottom-0 z-50 w-full -translate-x-1/2 bg-[#212121] left-1/2">
    <div class="grid h-full max-w-lg grid-cols-6 mx-auto">
        <a href="#home" class="nav-link inline-flex flex-col items-center justify-center p-4">
            <i class="fa-solid fa-house text-white"></i>
        </a>

        <a href="#education" class="nav-link inline-flex flex-col items-center justify-center p-4">
            <i class="fa-solid fa-graduation-cap text-white"></i>
        </a>

        <a href="#timeline" class="nav-link inline-flex flex-col items-center justify-center p-4">
            <i class="fa-solid fa-user-tie text-white"></i>
        </a>

        <a href="#portfolio" class="nav-link inline-flex flex-col items-center justify-center p-4">
            <i class="fa-solid fa-briefcase text-white"></i>
        </a>

        <a href="#contact-us" class="nav-link inline-flex flex-col items-center justify-center p-4">
            <i class="fa-solid fa-envelopes-bulk text-white"></i>
        </a>

        <a href="{{url('/mobile-profile')}}" class="nav-link inline-flex flex-col items-center justify-center p-4">
            <i class="fa-brands fa-studiovinari text-white"></i>
        </a>
    </div>
</div>
@endif