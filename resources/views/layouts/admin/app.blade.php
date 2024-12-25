<!DOCTYPE html>
<html lang="en">

@include('dashboards.admin.includes.headerlinks')

@livewireStyles

<body class="m-0 font-sans antialiased font-normal text-left leading-default text-base dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white">

    @if(Auth::check())
        @if(Auth::user()->hasRole('Admin'))
            @include('dashboards.admin.includes.sidebar')
        @elseif(Auth::user()->hasRole('Office'))
            @include('dashboards.office.includes.sidebar')
        @endif
    @endif

    <main class="relative h-full max-h-screen transition-all duration-200 ease-soft-in-out xl:ml-68 rounded-xl">

        @include('dashboards.admin.includes.nav')

        @yield('content')

    </main>
    
    @include('dashboards.admin.includes.slider')

</body>

@livewireScripts

@include('dashboards.admin.includes.footerlinks')
@stack('scripts')

</html>