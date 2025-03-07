@extends('auth.layouts.app')

@section('content')
  <div class=" h-screen flex-col items-center justify-center">
    <div class="h-screen flex flex-wrap justify-center items-center -mx-3">
      <div class="w-full max-w-full px-3 mx-auto shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
        <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 lg:shadow-soft-xl  rounded-2xl bg-clip-border">
          <div class="text-center border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6">
            <a class="flex -ml-4 justify-center items-center m-0 text-sm whitespace-nowrap text-slate-700 dark:text-white" href="{{route('home')}}">
                <img src="{{asset('img/gymfit.png')}}" class="inline-block h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-24 dark:hidden" alt="main_logo" />
                <img src="{{asset('img/gymfit.png')}}" class="hidden h-full max-w-full transition-all duration-200 ease-soft-in-out max-h-24 dark:inline-block" alt="main_logo" />
            </a>
          </div>

          <div class="flex-auto p-6 text-center">

            {{-- login-form --}}

            <form role="form text-left" method="POST" action="{{ route('loginUser') }}">
                @csrf
              <div class="mb-4 text-start">
                <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="email">Email <span class="text-red-600">*</span></label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="{{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-4 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
              </div>
              <div class="mb-4 text-start">
                <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="password">Password <span class="text-red-600">*</span></label>
                <input type="password" name="password" required autocomplete="current-password" class="{{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-4 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
              </div>
              <div class="min-h-6 mb-0.5 block pl-12 text-left">
                <input id="remember_me" name="remember" class="mt-0.5 rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.3 h-5 relative float-left -ml-12 w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" checked="" />
                <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700" for="rememberMe">Remember me</label>
              </div>
              <div class="text-center">
                <button type="submit" class="inline-block w-full px-6 py-4 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl  from-gray-800 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Sign in</button>
              </div>
            </form>

            {{-- end of login form --}}
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
