<!DOCTYPE html>
<html lang="en">

@include('dashboards.user.includes.headerlinks')

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



        @include('dashboards.user.includes.nav')

        @yield('content')


        @include('dashboards.user.includes.footer')


</body>

@livewireScripts

@include('dashboards.user.includes.footerlinks')
@stack('scripts')

</html>