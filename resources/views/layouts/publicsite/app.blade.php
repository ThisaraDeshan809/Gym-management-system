<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

@include('dashboards.publicsite.includes.headerlinks')

@livewireStyles

<body class="bg-[#121212]">

@include('dashboards.publicsite.includes.nav')

@yield('content')


</body>

@livewireScripts

@include('dashboards.publicsite.includes.footerlinks')

</html>