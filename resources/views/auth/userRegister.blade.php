@extends('auth.layouts.app')

@section('content')


<section>
    <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
        <div class="container z-10">
            <div class="flex flex-wrap items-center ">
                <div class="flex flex-col w-full max-w-full md:flex-0 shrink-0 sm:w-8/12 md:w-8/12 lg:w-5/12 xl:w-4/12">
                    <div class="w-full relative mb-2 px-2 py-2 bg-white shadow-soft-md flex flex-col min-w-0 mt-10 break-words bg-transparent border-0 rounded-2xl bg-clip-border">
                        <div class="p-4 pb-0 mb-0 justify-center items-center text-center bg-transparent border-b-0 rounded-t-2xl">
                            <h3 class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-gray-800 to-slate-800 bg-clip-text">Welcome back</h3>
                            <p class="mb-0">Enter your details to sign up </p>
                        </div>
                        <div class="p-4">

                            <form role="form text-left" method="POST" action="{{ route('registerUser') }}">
                                @csrf
                                
                                <div class="flex gap-4 w-full">
                                    <div class="mb-4 text-start">
                                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="email">Name <span class="text-red-600">*</span></label>
                                        <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="username" class="{{ $errors->has('name') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-4 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="name" aria-label="fname" />

                                        @error('name')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-4 text-start">
                                        <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="email">Email <span class="text-red-600">*</span></label>
                                        <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="{{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-4 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />

                                        @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                
                                
                                <div class="mb-4 text-start">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="password">Password <span class="text-red-600">*</span></label>
                                    <input type="password" name="password" required autocomplete="current-password" class="{{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-4 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                                    @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-4 text-start">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="password_confirmation">Confirm Password <span class="text-red-600">*</span></label>
                                    <input type="password" name="password_confirmation" required autocomplete="current-password" class="{{ $errors->has('password_confirmation') ? 'border-red-500' : 'border-gray-300' }} text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-4 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="password-addon" />
                                    @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="min-h-6 mb-0.5 block pl-12 text-left">
                                    <input id="remember_me" name="remember" class="mt-0.5 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" checked="" />
                                    <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700" for="rememberMe">Remember me</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="inline-block w-full px-6 py-4 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-full cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl  from-gray-800 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign Up</button>
                                </div>
                            </form>
                        </div>
                        <div class="px-1 pt-0 text-center bg-transparent border-t-0 border-t-solid rounded-b-2xl lg:px-2">
                            <p class="mx-auto leading-normal text-sm">
                                Already have an account?
                                <a href="{{url('/user-login')}}" class="relative z-10 font-semibold text-transparent bg-gradient-to-tl from-gray-800 to-slate-800 bg-clip-text">Sign in</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-full lg:flex-0 md:w-4/12 mb-4">
                    <div class="absolute top-0  m-20 mt-0 w-180 h-full rounded-xl md:block">
                        
                    
                    <img src="{{asset('img/hero/hero-2.jpg')}}" alt="" class=" w-full rounded-xl p-7 top-0 mt-20">
                    
                    <!-- <div class="absolute inset-x-0 top-0 z-0 h-full bg-cover" style="background-image: url('../assets/img/handiye kade app.webp')"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection