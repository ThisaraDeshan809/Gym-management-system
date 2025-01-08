@extends('layouts.usersite.app')

@section('content')

<div class="bg-gray-700 px-4 py-24 min-h-screen">
    <div aria-hidden="true" class="absolute inset-0 h-max w-full m-auto grid grid-col-1 lg:grid-cols-2 -space-x-52 opacity-20">
        <div class="blur-[106px] h-56 bg-gradient-to-br to-purple-400 from-blue-700"></div>
        <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-indigo-600"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
        <div class="mb-10 space-y-4 px-6 md:px-0">
            <h2 class="text-center text-2xl font-bold text-white sm:text-3xl md:text-4xl">Pricing</h2>
        </div>
        <div class="flex flex-col justify-center gap-4">
            @foreach($packages as $package)
            <div class="flex flex-col items-center aspect-auto p-4 sm:p-8 border rounded-3xl bg-gray-800 border-gray-700 shadow-gray-600/10 shadow-none m-2 flex-1 max-w-md">
                <h2 class="text-lg sm:text-xl font-medium text-white mb-2">{{$package->package_name}}</h2>
                <p class="text-lg sm:text-xl text-center mb-8 mt-4 text-gray-400">
                    <span class="text-3xl sm:text-4xl font-bold text-white">{{$package->price}}</span>
                </p>
                <p class="text-lg sm:text-xl text-center mb-8 mt-4 text-gray-400">
                    {{$package->package_description}}
                </p>
                <a target="_blank" rel="noopener noreferrer"
                class="lemonsqueezy-button relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-white before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max"
                href=""><span class="relative text-sm font-semibold text-black">Book now</span></a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection