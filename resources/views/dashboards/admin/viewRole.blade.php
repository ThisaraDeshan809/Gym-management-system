@extends('layouts.admin.app')

@section('content')

<div class="w-full px-6 mx-auto">
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-6 shrink-0 lg:flex-0 lg:mt-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-6">
                    <h5 class="font-bold dark:text-white">Permission Configuration For The Role {{$role->name}}</h5>
                </div>
            </div>
        </div> 
    </div> 
</div>


<div class="w-full p-6 mx-auto mt-4">
    <div class="flex flex-wrap -mx-3">
      <div class="w-full max-w-full px-3">
        <div class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
          @livewire('role-permission-sync-block', ['roleId' => $role->id])
        </div>
      </div>
    </div>
</div>


@endsection
