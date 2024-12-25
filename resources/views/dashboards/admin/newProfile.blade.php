@extends('layouts.admin.app')

@section('content')


<div class="w-full px-6 mx-auto">
    {{-- new Profile form  --}}
    <form class="relative" enctype="multipart/form-data" id="main-form"  action="{{ route('storeProfile') }}" method="post">
        @csrf

        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-6 shrink-0 lg:flex-0 lg:w-8/12 lg:mt-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white mb-4 border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-6">
                        <h5 class="font-bold dark:text-white">Profile Information</h5>
                        
                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                            <!-- Photo File Input -->
                            <input type="file" name="profileimage" class="hidden" x-ref="photo" x-on:change="
                                                photoName = $refs.photo.files[0].name;
                                                const reader = new FileReader();
                                                reader.onload = (e) => {
                                                    photoPreview = e.target.result;
                                                };
                                                reader.readAsDataURL($refs.photo.files[0]);
                            ">

                            <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                                Profile Photo <span class="text-red-600"> </span>
                            </label>
    
                            <div class="text-center">
                                <!-- Current Profile Photo -->
                                <div class="mt-2" x-show="! photoPreview">
                                    <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="w-40 h-40 m-auto rounded-full shadow">
                                </div>
                                <!-- New Profile Photo Preview -->
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
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="profilename">Profile Name</label>
                                <input type="text" name="profile_name" placeholder="Profilename" class="{{ $errors->has('profilename') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('profilename') }}"/>
                                @error('profilename')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full max-w-full px-3 mt-4 flex-0 sm:w-6/12 sm:mt-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="email">Email</label>
                                <input type="email" name="email" placeholder="example@org.com"  class="{{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('email') }}"/>
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>


                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="phone">Mobile</label>
                                <input type="text" name="phone" placeholder="XXXXXXXXXX" class="{{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('phone') }}"/>
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="phone">Whatsapp</label>
                                <input type="text" name="whatsapp" placeholder="XXXXXXXXXX" class="{{ $errors->has('whatsapp') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('whatsapp') }}"/>
                                @error('whatsapp')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>





                        <div class="flex flex-wrap -mx-3">
                            
                            <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="phone">Designation</label>
                                <input type="text" name="designation" placeholder="Designation" class="{{ $errors->has('designation') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('designation') }}"/>
                                @error('designation')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        
                            <div class="w-full max-w-full px-3 mt-4 flex-0 sm:w-6/12 sm:mt-0">
                                <label class="mt-6 inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="cvInput">Upload CV</label>
                                <input id="cvInput" type="file" name="cv" class="{{ $errors->has('cv') ? 'border-red-500' : 'border-gray-300' }} w-full max-w-md overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-3 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" />
                                
                                @error('cv')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0 sm:w-full">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="phone">Discription</label>
                                <textarea type="text" rows="6" id="discription"  name="discription" placeholder="Discription" class="{{ $errors->has('discription') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('discription') }}"></textarea>
                                @error('discription')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="">
                            <button type="submit" href="javascript:;" class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-to-tl dark:from-yellow-500 dark:to-orange-400 bg-gradient-to-tl from-fuchsia-900 via-fuchsia-700 to-fuchsia-900 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Create Profile</button>
                        </div>
                    </div>
                </div>
            </div> 
        
        </div>

        
    </form>

  </div>


@endsection
