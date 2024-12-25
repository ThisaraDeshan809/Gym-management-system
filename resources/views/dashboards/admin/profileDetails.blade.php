@extends('layouts.admin.app')

@section('content')

<div class="flex flex-wrap mt-6">
  <div class="w-full max-w-full px-3 flex-0">
    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
      
        <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6">
            <h5 class="mb-0 dark:text-white">Profile Details</h5>
        </div>
      
      <div class="-mt-16">
        <table class="table" datatable id="datatable-basic">
          <thead>
            <tr>
              <th class="font-bold uppercase text-slate-400 text-xxs opacity-70">Name</th>
              <th class="font-bold uppercase text-slate-400 text-xxs opacity-70">Designation</th>
              <th class="font-bold uppercase text-slate-400 text-xxs opacity-70">Email</th>
              <th class="font-bold uppercase text-slate-400 text-xxs opacity-70">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($profiledetails as $profiledetail)
            <tr>
              <td class="font-normal leading-normal text-sm">{{$profiledetail->profile_name}}</td>
              <td class="font-normal leading-normal text-sm">{{$profiledetail->designation}}</td>
              <td class="font-normal leading-normal text-sm">{{$profiledetail->email}}</td>
              <td class="font-normal leading-normal text-sm">
                <a href="{{route('viewProfile',$profiledetail->id)}}">
                    <i class="fa-regular fa-eye"></i>
                </a>
              </td>
            </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

@endsection
