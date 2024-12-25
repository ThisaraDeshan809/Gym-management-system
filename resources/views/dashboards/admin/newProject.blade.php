@extends('layouts.admin.app')

@section('content')


<div class="w-full px-6 mx-auto">
    <form class="relative" enctype="multipart/form-data" id="main-form"  action="{{ route('storeProject',$profile->id) }}" method="post">
        @csrf

        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-6 shrink-0 lg:flex-0 lg:w-8/12 lg:mt-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white mb-4 border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-6">
                        <h5 class="font-bold dark:text-white">Project Information</h5>
                        
                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">

                            <input type="file" name="mainimage" class="hidden" x-ref="photo" x-on:change="
                                                photoName = $refs.photo.files[0].name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => {
                                                    photoPreview = e.target.result;
                                                };
                                                reader.readAsDataURL($refs.photo.files[0]);">

                            <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                                Project Photo <span class="text-red-600"> </span>
                            </label>
    
                            <div class="text-center">
                                <div class="mt-2" x-show="! photoPreview">
                                    <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="w-40 h-40 m-auto rounded-lg shadow">
                                </div>
                                <div class="mt-2" x-show="photoPreview" style="display: none;">
                                    <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                    </span>
                                </div>
                                <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                                    Select New Photo
                                </button>
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="flex flex-wrap -mx-3">

                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12 sm:mt-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="project_title">Project Title</label>
                                <input type="text" name="project_title" placeholder="project title" class="{{ $errors->has('project_title') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('project_title') }}"/>
                                @error('project_title')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12 sm:mt-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="project_description">
                                    Project Description
                                </label>
                                <textarea 
                                    name="project_description" 
                                    id="project_description" 
                                    placeholder="Enter project description" 
                                    rows="6" 
                                    class="{{ $errors->has('project_description') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none"
                                ></textarea>
                                @error('project_description')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>


                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="client">Mobile</label>
                                <input type="text" name="client" placeholder="client" class="{{ $errors->has('client') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('client') }}"/>
                                @error('client')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="web">Webstie(optional)</label>
                                <input type="text" name="web" placeholder="Web" class="{{ $errors->has('web') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('web') }}"/>
                                @error('web')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            

                        </div>





                        <div class="flex flex-wrap -mx-3">

                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="start_month">Start Month</label>
                                <input type="text" name="start_month" placeholder="start month" class="{{ $errors->has('start_month') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('start_month') }}"/>
                                @error('start_month')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="end_month">Start Month</label>
                                <input type="text" name="end_month" placeholder="end month" class="{{ $errors->has('end_month') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('end_month') }}"/>
                                @error('end_month')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="">
                            <button type="submit" href="javascript:;" class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-to-tl dark:from-yellow-500 dark:to-orange-400 bg-gradient-to-tl from-fuchsia-900 via-fuchsia-700 to-fuchsia-900 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Create Project</button>
                        </div>
                    </div>
                </div>
            </div> 
        
        </div>

        
    </form>

</div>


@endsection
