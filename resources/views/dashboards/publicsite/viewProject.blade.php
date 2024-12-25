@extends('layouts.publicsite.app')

@section('content')

        <!-- <div class="container mx-auto px-5 sm:px-0 mb-10 pt-10">
            <img alt="projectimage" width="1225"
                height="810" class="rounded-2xl" style="color:transparent"
                src="{{ asset('storage/' . $project->mainimage) }}" />
            <div class="grid grid-cols-1 lg:grid-cols-9 gap-12 pt-16 mb-10">
                <div class="lg:col-span-6">
                    <h1 class="text-3xl sm:text-5xl font-bold text-white">{{$project->project_title}}</h1>
                    <p class="text-lg text-white/60 mt-12">{{$project->project_description}}</p>
                    <a class="mt-3 hidden lg:flex mx-auto border-none bg-lime-600 py-2 px-4 hover:bg-white transition duration-200 rounded items-center justify-center gap-5 w-fit" href="{{ url('/') }}">
                        <span class="text-black font-medium">Back to Home <i class="fa-solid fa-house" aria-hidden="true"></i></span>
                    </a>
                </div>
                <div class="lg:col-span-3 py-8 px-6 bg-white rounded-xl h-fit lg:sticky lg:top-5">
                    <div
                        class="flex items-center justify-between border-t border-base-content/10 py-5 first:border-none first:py-0 first:pb-5 last:pb-0">
                        <p class="text-base text-base-content">Client</p><span
                            class="text-base text-base-content/60">{{$project->client}}</span>
                    </div>

                    <div
                        class="flex items-center justify-between border-t border-base-content/10 py-5 first:border-none first:py-0 first:pb-5 last:pb-0">
                        <p class="text-base text-base-content">Start Date</p><span
                            class="text-base text-base-content/60">{{$project->start_month}}</span>
                    </div>
                    <div
                        class="flex items-center justify-between border-t border-base-content/10 py-5 first:border-none first:py-0 first:pb-5 last:pb-0">
                        <p class="text-base text-base-content">Completed Date</p><span
                            class="text-base text-base-content/60">{{$project->end_month}}</span>
                    </div>
                    <div
                        class="flex items-center justify-between border-t border-base-content/10 py-5 first:border-none first:py-0 first:pb-5 last:pb-0">
                        <p class="text-base text-base-content">Website</p><span
                            class="text-base text-base-content/60">{{$project->web}}</span>
                    </div>
                </div>

                <a class="mb-4 lg:hidden -mt-3 mx-auto border-none bg-lime-600 py-2 px-4 hover:bg-white transition duration-200 rounded flex items-center justify-center gap-5 w-fit" href="{{ url('/') }}">
                    <span class="text-black font-medium">Back to Home <i class="fa-solid fa-house" aria-hidden="true"></i></span>
                </a>
            </div>

        </div> -->

        <div class="bg-[#121212] mx-auto lg:p-0 overflow-hidden">

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-wrap -mx-4">
            <!-- Product Images -->
            <div class="w-full md:w-1/2 px-4 mb-8">
                <img src="{{ asset('storage/' . $project->mainimage) }}" alt="Product" class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage">
                <div class="flex flex-wrap gap-4 py-3 justify-center md:justify-start overflow-hidden">
                    @foreach($project->sub_images as $sub_image)
                    <img src="{{ asset('storage/' . $sub_image->sub_image) }}" alt="Thumbnail 1"
                        class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                        onclick="changeImage(this.src)">
                    @endforeach
                </div>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2 text-white">Key Features</h3>
                    <ul class="list-disc list-inside text-white/60">
                        <li>Client : {{$project->client}}</li>
                        <li>WEB : <a href="{{$project->web}}" class="underline">{{$project->web}}</a></li>
                        <li>Started Month : {{$project->start_month}}</li>
                        <li>Completed Month : {{$project->end_month}}</li>
                    </ul>
                </div>
            </div>


            <div class="w-full md:w-1/2 px-4">
                <h2 class="text-xl md:text-3xl font-bold text-white mb-2">{{ $project->project_title }}</h2>

                <p class="text-white/60 mb-6 text-sm md:text-base">
                    {{ $project->project_description }}
                </p>

                <a href="{{url('/')}}" class="w-full md:w-auto bg-lime-700 font font-semibold text-black px-6 py-3 rounded-md hover:bg-lime-600 transition duration-300">Back To Home <i class="fa-solid fa-house" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

</div>

<script>
    function changeImage(src) {
        document.getElementById('mainImage').src = src;
    }
</script>
@endsection
