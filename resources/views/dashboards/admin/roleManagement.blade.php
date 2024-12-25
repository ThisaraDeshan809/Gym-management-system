@extends('layouts.admin.app')

@section('content')

<div class="w-full px-6 mx-auto">
    {{-- new user form  --}}
    <form class="relative" enctype="multipart/form-data" id="main-form"  action="{{ route('storeRole') }}" method="post">
        @csrf

        <div class="flex flex-wrap mt-6 -mx-3">
            <div class="w-full max-w-full px-3 mt-6 shrink-0 lg:flex-0 lg:mt-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto p-6">
                        <h5 class="font-bold dark:text-white">User Roles</h5>
                        
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 mt-4 flex-0 sm:w-10/12 sm:mt-0">
                                <label class="mt-6 mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="roleName">Role Name</label>
                                <input type="text" name="roleName" placeholder="Role name here"  class="{{ $errors->has('roleName') ? 'border-red-500' : 'border-gray-300' }} focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-black focus:outline-none" value="{{ old('email') }}"/>
                                @error('roleName')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full max-w-full px-3 flex items-end sm:w-2/12 sm:mt-0">
                                <button type="submit" href="javascript:;" class="inline-block float-right px-8 py-3 mb-0 font-bold text-right text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:scale-102 active:opacity-85 hover:shadow-soft-xs dark:bg-gradient-to-tl dark:from-yellow-500 dark:to-orange-400 bg-gradient-to-tl from-yellow-500 to-orange-400 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25">Create Role</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </form>

</div>


  <div class="flex flex-wrap mt-6 mx-3">
    <div class="w-full max-w-full px-3 flex-0">
      <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="overflow-x-auto">
          <table class="table table-flush" datatable id="datatable-search-list">
              <thead class="thead-light">
                  <tr>
                      <th>Id</th>
                      <th>Role Name</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($roles as $role)
                  <tr>
                      <td>
                          <div class="flex items-center">
                              <div class="min-h-6 pl-7 mb-0.5 block">
                                  <span class="my-2 leading-tight text-xs">{{ $role->id }}</span>
                              </div>
                          </div>
                      </td>
                      <td class="font-semibold">
                          <span class="my-2 leading-tight text-xs">{{ $role->name }}</span>
                      </td>
                      <td class="font-semibold leading-tight text-sm">
                        <div class="flex px-6 items-center justify-end gap-x-3">
                            <a href="{{route('viewRole', $role->id)}}" ><i class="fas fa-eye text-slate-400 dark:text-white/70" aria-hidden="true"></i></a>
                            <form action="{{ route( 'deleteRole', $role->id ) }}" id="delete-form-{{ $role->id }}" method="POST">
                                @csrf
                                <button type="submit" onclick="ConfirmDelete(event, {{ $role->id }})"><i class="fas fa-trash text-slate-400 dark:text-white/70" aria-hidden="true"></i></button>
                            </form>
                        </div>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>            
        </div>
      </div>
    </div>

  </div>
</div>
  
@endsection