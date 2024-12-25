@extends('layouts.admin.app')

@section('content')


    <div class="p-3">
        <div class="relative flex flex-col flex-auto min-w-0 p-3 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex flex-wrap items-center justify-center">
                <div class="w-4/12 max-w-full px-3 flex-0 sm:w-auto">
                    <div class="w-19 h-19 text-base ease-soft-in-out relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                    <img class="w-full shadow-soft-sm rounded-xl" src="{{ asset('storage/' . $profiledetail->profile_image) }}" alt="image" />
                    </div>
                </div>
                <div class="w-8/12 max-w-full px-3 my-auto flex-0 sm:w-auto">
                    <div class="h-full">
                        <h5 class="mb-1 font-bold dark:text-white">{{$profiledetail->profile_name}}</h5>
                        <p class="mb-0 font-semibold leading-normal text-sm">{{$profiledetail->designation}}</p>
                    </div>
                </div>
                <div class="flex max-w-full px-3 mt-4 sm:flex-0 shrink-0 sm:mt-0 sm:ml-auto sm:w-auto">
                </div>
            </div>
        </div>
    </div>



    <div class="flex">
        <div class="p-2">
            @if($errors->any())
                <div class="bg-red-300 text-white rounded-3 p-6 my-5">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>


<div class="flex flex-wrap w-full">
    <div class="w-full max-w-full px-3 lg:mt-6 mb-3 lg:w-6/12 flex flex-wrap">
        <div class="relative flex flex-col w-full h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <div class="flex flex-wrap -mx-3">
                    <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                        <h6 class="mb-0 dark:text-white">Profile Information</h6>
                    </div>
                    <div class="w-full max-w-full px-3 text-right shrink-0 md:w-4/12 md:flex-none">
                        <a href="{{route('editProfile',$profiledetail->id)}}" data-target="tooltip_trigger">
                            <i class="leading-normal fas fa-user-edit text-sm text-slate-400 dark:text-white dark:opacity-80"></i>
                        </a>
                    </div>
                    <div class="hidden px-2 py-1 text-center text-white bg-black rounded-lg text-sm" id="tooltip" data-popper-placement="top">
                        Edit Profile
                        <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                    </div>
                </div>
            </div>
            <div class="flex-auto p-4">
                <p class="leading-normal text-sm dark:text-white dark:opacity-60">{{$profiledetail->discription}}</p>
                <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
                <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                    <li class="relative block px-4 py-2 pt-0 pl-0 leading-normal border-0 rounded-t-lg text-sm text-inherit"><strong class="text-slate-700 dark:text-white">Full Name:</strong> &nbsp; {{$profiledetail->profile_name}}</li>
                    <li class="relative block px-4 py-2 pl-0 leading-normal border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700 dark:text-white">Mobile:</strong> &nbsp; {{$profiledetail->phone}}</li>
                    <li class="relative block px-4 py-2 pl-0 leading-normal border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700 dark:text-white">Whatsapp:</strong> &nbsp; {{$profiledetail->whatsapp}}</li>
                    <li class="relative block px-4 py-2 pl-0 leading-normal border-0 border-t-0 text-sm text-inherit"><strong class="text-slate-700 dark:text-white">Email:</strong> &nbsp; {{$profiledetail->email}}</li>
                </ul>
            </div>
        </div>
    </div>



    <div class=" w-full lg:w-6/12 max-w-full px-3 lg:mt-6 mb-3">
        <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <form class="relative" enctype="multipart/form-data" id="main-form"  action="{{ route('storeSkill',$profiledetail->id) }}" method="post">
                    @csrf
                    <div class="flex flex-wrap items-center -mx-3">
                        <div class="px-3 w-6/12">
                            <div class="w-full max-w-full px-3 flex-0 ">
                                <input type="text" name="skill" placeholder="Skill" class="{{ $errors->has('skill') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value=""/>
                                @error('skill')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                            <div class="px-3 w-6/12 text-right flex-auto">
                                <button type="submit" class="inline-flex items-center px-4 py-1 text-sm font-medium text-white bg-gradient-to-tl from-fuchsia-900 via-fuchsia-700 to-fuchsia-900 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                    <i class="fa-solid fa-plus mr-2"></i>
                                    Add
                                </button>
                            </div>
                    </div>
                </form>
            </div>

            <div class="flex-auto p-4">
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Skill Name
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach($skills as $skill)
                                <tr>
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $skill->skill }}
                                    </td>
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        <form action="{{ route('deleteSkill', $skill->id) }}" id="delete-form-{{ $skill->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-red-600" onclick="ConfirmDelete('event, {{ $skill->id }}')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Render pagination links -->
                    <div class="mt-4">
                        {{ $qualifications->links() }}
                    </div>
                </div>
            </div>



        </div>
    </div>
    
</div>


<div class=" flex flex-wrap w-full">
    <div class=" w-full lg:w-6/12 max-w-full px-3 lg:mt-6 mb-3">
        <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <div class="flex flex-wrap items-center -mx-3">
                    <!-- Heading Section -->
                    <div class="px-3 w-8/12">
                        <h6 class="mb-0 text-lg font-semibold dark:text-white">Education Information</h6>
                    </div>

                    <!-- Add Button Section -->
                    <div class="px-3 w-4/12 text-right">
                        <a href="{{ route('newEducation', $profiledetail->id) }}" class="inline-flex items-center px-4 py-1 text-sm font-medium text-white bg-gradient-to-tl from-fuchsia-900 via-fuchsia-700 to-fuchsia-900 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <i class="fa-solid fa-plus mr-2"></i>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex-auto p-4">
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    University Name
                                </th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Degree
                                </th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Year
                                </th>
                                <th scope="col" class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach($qualifications as $qualification)
                                <tr>
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $qualification->university_name }}
                                    </td>
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm text-gray-800 dark:text-neutral-200">
                                        {{ $qualification->degree_name }}
                                    </td>
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm text-gray-800 dark:text-neutral-200">
                                        {{ $qualification->year }}
                                    </td>
                                    <td class="px-4 py-2 whitespace-normal break-words text-right text-sm font-medium flex gap-4 flex-wrap">
                                        <a href="{{ route('editEducation', $qualification->id) }}" class="text-blue-600">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <form action="{{ route('deleteEducation', $qualification->id) }}" id="delete-form-{{ $qualification->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-red-600" onclick="ConfirmDelete('event, {{ $qualification->id }}')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Render pagination links -->
                    <div class="mt-4">
                        {{ $qualifications->links() }}
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="w-full lg:w-6/12 max-w-full px-3 lg:mt-6 mb-3">
        <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <div class="flex flex-wrap items-center -mx-3">
                    <!-- Heading Section -->
                    <div class="px-3 w-8/12">
                        <h6 class="mb-0 text-lg font-semibold dark:text-white">Experiences Information</h6>
                    </div>

                    <!-- Add Button Section -->
                    <div class="px-3 w-4/12 text-right">
                        <a href="{{ route('newExperience', $profiledetail->id) }}" class="inline-flex items-center px-4 py-1 text-sm font-medium text-white bg-gradient-to-tl from-fuchsia-900 via-fuchsia-700 to-fuchsia-900 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <i class="fa-solid fa-plus mr-2"></i>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex-auto p-4">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Company Name
                                </th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Position
                                </th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Year
                                </th>
                                <th scope="col" class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach($experiences as $experience)
                                <tr>
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $experience->company_name }}
                                    </td>
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm text-gray-800 dark:text-neutral-200">
                                        {{ $experience->position }}
                                    </td>
                                    <td class="px-4 py-2 text-sm text-gray-800 dark:text-neutral-200">
                                        {{ $experience->year }}
                                    </td>
                                    <td class="px-4 py-2 text-right text-sm font-medium flex gap-4 flex-wrap">
                                        <a href="{{ route('editExperience', $experience->id) }}" class="text-blue-600">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <form action="{{ route('deleteExperience', $experience->id) }}" id="delete-form-{{ $experience->id }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-red-600" onclick="ConfirmDelete('event, {{ $experience->id }}')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Render pagination links -->
                    <div class="mt-4">
                        {{ $experiences->links() }}
                    </div>
                </div>
            </div>



        </div>
    </div>

</div>

    <div class=" w-full max-w-full px-3 lg:mt-6 mb-3">
        <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 border-b-0 rounded-t-2xl">
                <div class="flex flex-wrap items-center -mx-3">
                    <!-- Heading Section -->
                    <div class="px-3 w-8/12">
                        <h6 class="mb-0 text-lg font-semibold dark:text-white">Projects Information</h6>
                    </div>

                    <!-- Add Button Section -->
                    <div class="px-3 w-4/12 text-right">
                        <a href="{{ route('newProject', $profiledetail->id) }}" class="inline-flex items-center px-4 py-1 text-sm font-medium text-white bg-gradient-to-tl from-fuchsia-900 via-fuchsia-700 to-fuchsia-900 rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <i class="fa-solid fa-plus mr-2"></i>
                            Add
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex-auto p-4">
            <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Project image
                                </th>
                                
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Project Title
                                </th>
                                <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Add
                                </th>
                                <th scope="col" class="px-4 py-2 text-right text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                            @foreach($projects as $project)
                                <tr>
                                    <td class="px-4 py-2 text-sm text-gray-800 dark:text-neutral-200">
                                        <img class="w-19 h-10" src="{{ asset('storage/' . $project->mainimage) }}" alt="image" />
                                    </td>
                                
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{ $project->project_title }}
                                    </td>
                                    <td class="px-4 py-2 whitespace-normal break-words text-sm text-gray-800 dark:text-neutral-200">
                                    <a href="{{ route('addSubImage', $project->id) }}" class="text-blue-600">
                                            <i class="fa-solid fa-plus"></i>
                                            Add Sub Images
                                        </a> 
                                    </td>
                                    <td class="px-4 py-2 text-right text-sm font-medium space-x-4">
                                        <a href="{{ route('editProject', $project->id) }}" class="text-blue-600">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <form action="{{ route('deleteProject', $project->id) }}" id="delete-form-{{ $project->id }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="text-red-600" onclick="ConfirmDelete('event, {{ $project->id }}')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Render pagination links -->
                    <div class="mt-4">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>



        </div>
    </div>


@endsection