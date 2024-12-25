@extends('layouts.admin.app')

@section('content')

<div class="p-3">
    <div class="relative flex flex-col flex-auto min-w-0 p-3 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="flex flex-wrap items-center justify-center">
            <div class="w-4/12 max-w-full px-3 flex-0 sm:w-auto">
                <div class="w-19 h-19 text-base ease-soft-in-out relative inline-flex items-center justify-center rounded-xl text-white transition-all duration-200">
                <img class="w-full shadow-soft-sm rounded-xl" src="{{ asset('storage/' . $project->mainimage) }}" alt="image" />
                </div>
            </div>
            <div class="w-8/12 max-w-full px-3 my-auto flex-0 sm:w-auto">
                <div class="h-full">
                    <h5 class="mb-1 font-bold dark:text-white">{{$project->project_title}}</h5>
                </div>
            </div>
            <div class="flex max-w-full px-3 mt-4 sm:flex-0 shrink-0 sm:mt-0 sm:ml-auto sm:w-auto">

                <form class="relative" enctype="multipart/form-data" id="main-form"  action="{{ route('storeSubImage',$project->id) }}" method="post">
                    @csrf
                    <div class="flex items-center space-x-6">
                        <div class="shrink-0">
                        <img id='preview_img' class="h-16 w-16 object-cover rounded-full" src="https://img.freepik.com/premium-photo/image-file-icon-3d-render-illustration_567294-3212.jpg?w=740" alt="Current profile photo" />
                        </div>
                        <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file" name="sub_image" onchange="loadFile(event)" class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-full file:border-0
                            file:text-sm file:font-semibold
                            file:bg-violet-50 file:text-violet-700
                            hover:file:bg-violet-100
                        "/>
                        </label>

                        <button type="submit" class="px-3 py-1 bg-gradient-to-tl from-fuchsia-900 to-fuchsia-700 rounded-lg text-white font-semibold capitalize">Add</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>

<div class="flex-none w-full max-w-full px-3 mt-6">
  <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
    <div class="p-4 pb-0 mb-0 rounded-t-2xl">
      <h6 class="mb-1 dark:text-white">Projects</h6>
      <p class="leading-normal text-sm dark:text-white dark:opacity-80">Architects design houses</p>
    </div>
    <div class="flex-auto p-4">
      <div class="flex flex-wrap -mx-3">
        @foreach($subimages as $subimage)
        <div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
            <div class="relative">
              <a class="block shadow-xl rounded-2xl">
                <img src="{{ asset('storage/' . $subimage->sub_image) }}" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
              </a>
            </div>
            <div class="flex-auto px-1 pt-6">
                <div class="flex items-center justify-between">
                    <form action="{{ route('deleteSubImage', $subimage->id) }}" id="delete-form-{{ $subimage->id }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600" onclick="ConfirmDelete('event, {{ $subimage->id }}')">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<script>
        var loadFile = function(event) {
            
            var input = event.target;
            var file = input.files[0];
            var type = file.type;

           var output = document.getElementById('preview_img');


            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
</script>


@endsection