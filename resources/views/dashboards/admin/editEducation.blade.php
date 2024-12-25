@extends('layouts.admin.app')

@section('content')


<div class="w-full px-6 mx-auto">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form class="relative" enctype="multipart/form-data" id="main-form"  action="{{ route('updateEducation',$qualification->id) }}" method="post">
        @csrf

        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-6 shrink-0 lg:flex-0 lg:w-8/12 lg:mt-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-6">
                        <h5 class="font-bold dark:text-white">Update Education</h5>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full sm:6/12 max-w-full px-3 flex-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="universityname">University Name</label>
                                <input type="text" name="university_name" placeholder="university name" class="{{ $errors->has('universityname') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ $qualification->university_name }}"/>
                                @error('universityname')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="w-full sm:6/12 max-w-full px-3 flex-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="digreename">Digree name</label>
                                <input type="text" name="degree_name" placeholder="degree_name" class="{{ $errors->has('degree_name') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ $qualification->degree_name }}"/>
                                @error('degree_name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 mt-4 flex-0 sm:w-6/12 sm:mt-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="description">Description</label>
                                <textarea type="text" name="description" placeholder="description"  class="{{ $errors->has('description') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none">{{ $qualification->description }}</textarea>
                                @error('description')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="year">Year</label>
                                <input type="text" name="year" placeholder="Year" class="{{ $errors->has('year') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ $qualification->year }}"/>
                                @error('year')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" href="javascript:;" class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white capitalize align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-to-tl dark:from-yellow-500 dark:to-orange-400 bg-gradient-to-tl from-fuchsia-900 via-fuchsia-700 to-fuchsia-900 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Update</button>
                        </div>
                    </div>
                </div>
            </div> 
        
        </div>

        
    </form>

  </div>


@endsection