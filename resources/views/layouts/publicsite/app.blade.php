<!DOCTYPE html>
<html lang="en">

@include('dashboards.publicsite.includes.headerlinks')

@livewireStyles

<body class="m-0 font-sans antialiased font-normal text-left leading-default text-base dark:bg-slate-950 bg-gray-50 text-slate-500 dark:text-white">
<!-- 
    @if(Auth::check())
        @if(Auth::user()->hasRole('Admin'))
            @include('dashboards.admin.includes.sidebar')
        @elseif(Auth::user()->hasRole('Office'))
            @include('dashboards.office.includes.sidebar')
        @endif
    @endif -->



        @include('dashboards.publicsite.includes.nav')

        @yield('content')


        @include('dashboards.publicsite.includes.footer')


</body>

@livewireScripts

@include('dashboards.publicsite.includes.footerlinks')
@stack('scripts')

</html>