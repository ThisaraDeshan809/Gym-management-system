@extends('layouts.admin.app')

@section('content')
    <div class="w-full px-6 mx-auto">
        {{-- new user form  --}}
        <form class="relative" enctype="multipart/form-data" id="main-form" action="{{ route('storeUser') }}" method="post">
            @csrf

            <div class="flex flex-wrap mt-6 -mx-3">
                <div class="w-full max-w-full px-3 mt-6 shrink-0 lg:flex-0 lg:w-8/12 lg:mt-0">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-6">
                            <h5 class="font-bold dark:text-white">User Information</h5>
                            <div class="mb-4 text-start">
                                <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                    for="salutation">Salutation <span class="text-red-600">*</span></label>
                                <select
                                    class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                    name="salutation" id="salutation">
                                    <option value="">Select salutation</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Mrs">Mrs</option>
                                </select>

                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="UserName">User Name</label>
                                    <input type="text" name="UserName" placeholder="username"
                                        class="{{ $errors->has('UserName') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none"
                                        value="{{ old('UserName') }}" />
                                    @error('UserName')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="fisrt_name">First Name</label>
                                    <input type="text" name="first_name" placeholder="First Name"
                                        class="{{ $errors->has('UserName') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none"
                                        value="{{ old('first_name') }}" />
                                    @error('first_name')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="last_name">Last Name</label>
                                    <input type="text" name="last_name" placeholder="Last Name"
                                        class="{{ $errors->has('last_name') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none"
                                        value="{{ old('UserName') }}" />
                                    @error('last_name')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="gender">Gender</label>
                                    <select
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        name="gender" id="gender">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    @error('gender')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="height">Height(cm)</label>
                                    <input type="text" name="height" placeholder="Height"
                                        class="{{ $errors->has('height') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none"
                                        value="{{ old('height') }}" />
                                    @error('height')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="weight">Weight(kg)</label>
                                    <input type="text" name="weight" placeholder="Weight"
                                        class="{{ $errors->has('weight') ? 'border-red-500' : 'border-gray-300' }}  focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none"
                                        value="{{ old('weight') }}" />
                                    @error('weight')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="mb-4 text-start m-2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="house_no">House No. <span class="text-red-600">*</span></label>
                                    <input type="text" name="house_no" value="{{ old('house_no') }}" required
                                        class="{{ $errors->has('house_no') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-4 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="House No. " aria-label="House No. " aria-describedby="email-addon" />

                                    @error('house_no')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4 text-start m-2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="street">Street <span class="text-red-600">*</span></label>
                                    <input type="text" name="street" value="{{ old('street') }}" required
                                        class="{{ $errors->has('street') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-4 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="street" aria-label="street" aria-describedby="email-addon" />

                                    @error('street')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4 text-start m-2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="district">District <span class="text-red-600">*</span></label>
                                    <input type="text" name="district" value="{{ old('district') }}" required
                                        class="{{ $errors->has('district') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-4 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="district" aria-label="district" aria-describedby="email-addon" />

                                    @error('district')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4 text-start m-2">
                                    <label class="mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="province">Province <span class="text-red-600">*</span></label>
                                    <input type="text" name="province" value="{{ old('province') }}" required
                                        class="{{ $errors->has('province') ? 'border-red-500' : 'border-gray-300' }}  text-sm focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-4 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                        placeholder="province" aria-label="province" aria-describedby="email-addon" />

                                    @error('province')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 mt-4 flex-0 sm:w-6/12 sm:mt-0">
                                    <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="email">Email</label>
                                    <input type="email" name="email" placeholder="example@org.com"
                                        class="{{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none"
                                        value="{{ old('email') }}" />
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                    <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="phone">Phone</label>
                                    <input type="text" name="phone" placeholder="XXXXXXXXXX"
                                        class="{{ $errors->has('phone') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none"
                                        value="{{ old('phone') }}" />
                                    @error('phone')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class=" w-full max-w-full px-3 mt-4 flex-0 sm:w-6/12 sm:mt-0">
                                    <label
                                        class=" mt-6 inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="password">Password</label>
                                    <input type="password" name="password" placeholder="password"
                                        class="{{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" />
                                    @error('password')
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                    <label
                                        class="mt-6 inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="ConfirmPassword">Confirm password</label>
                                    <input type="password" name="password_confirmation" placeholder="Confirm password"
                                        class="{{ $errors->has('password_confirmation') ? 'border-red-500' : 'border-gray-300' }}focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" />
                                </div>
                            </div>

                            {{-- <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 mt-4 flex-0 sm:mt-0">
                                <label class="mt-3">
                                    <input id="reset-password" name="reset_password" type="checkbox"  value="1" class="w-5 h-5 ease-soft text-base mr-4 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" />
                                    <label for="reset-password" class="cursor-pointer select-none dark:text-slate-100 text-slate-700">Ask user to reset password when first login</label>
                                </label>
                            </div>
                        </div> --}}

                            <div class="flex flex-wrap -mx-3">
                                <div class=" w-full max-w-full px-3 mt-4 flex-0 sm:mt-0">
                                    <label class="mt-3">
                                        <input id="send-password-email" name="send_password_email" value="1"
                                            type="checkbox"
                                            class="w-5 h-5 ease-soft text-base mr-4 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" />
                                        <label for="send-password-email"
                                            class="cursor-pointer select-none dark:text-slate-100 text-slate-700">Send
                                            Password Via Email?</label>
                                    </label>
                                </div>
                            </div>

                            <div class="">
                                <h5 class="mt-6 dark:text-white">Password requirements</h5>
                                <p class="mb-2 text-slate-500 dark:text-slate-100">Please follow this guide for a strong
                                    password:</p>
                                <ul class="float-left pl-6 mb-0 list-disc text-slate-500">
                                    <li>
                                        <span class="leading-normal dark:text-slate-100 text-sm">One special
                                            characters</span>
                                    </li>
                                    <li>
                                        <span class="leading-normal dark:text-slate-100 text-sm">Min 6 characters</span>
                                    </li>
                                    <li>
                                        <span class="leading-normal dark:text-slate-100 text-sm">One number (2 are
                                            recommended)</span>
                                    </li>

                                </ul>
                                <button type="submit" href="javascript:;"
                                    class="inline-block float-right px-8 py-2 mt-16 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-to-tl dark:from-yellow-500 dark:to-orange-400 bg-gradient-to-tl from-yellow-500 to-orange-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Create
                                    User</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full max-w-full shrink-0 lg:w-4/12 sm:flex-0">
                    <div
                        class=" relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto p-6">
                            <h5 class="font-bold dark:text-white">Access Levels</h5>

                            @if ($errors->has('roles'))
                                <p class="text-red-500 text-xs mt-1">{{ $errors->first('roles') }}</p>
                            @endif

                            <div class="grid h-fit w-full sm:grid-cols-1 gap-2">

                                @foreach ($roles as $role)
                                    <div
                                        class="relative {{ $errors->has('roles') ? 'border-red-500' : 'border-gray-300' }} flex flex-col h-fit bg-white dark:bg-black dark:text-white p-5 rounded-lg border-0.4 border-gray-300 cursor-pointer">
                                        <label>
                                            <input id="checkbox-{{ $role->id }}" name="roles[]"
                                                value="{{ $role->name }}"
                                                class="w-5 h-5 ease-soft text-base mr-4 rounded-1.4 checked:bg-gradient-to-tl  checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-150 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100"
                                                type="checkbox" />
                                            <label for="checkbox-{{ $role->id }}"
                                                class="cursor-pointer uppercase select-none dark:text-white text-slate-700">{{ $role->name }}</label>
                                        </label>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>

            </div>


        </form>

    </div>
@endsection
