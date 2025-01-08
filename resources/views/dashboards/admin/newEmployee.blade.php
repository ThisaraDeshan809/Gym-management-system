@extends('layouts.admin.app')

@section('content')


<div class="w-full p-6 mx-auto">
    <div class="w-full max-w-full px-3 lg:flex-0 shrink-0">
      <div class="relative flex flex-col flex-auto min-w-0 p-4 mb-4 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border" id="profile">
        <div class="flex flex-wrap items-center justify-center -mx-3">
          <div class="w-8/12 max-w-full px-3 my-auto flex-0 sm:w-auto">
            <div class="h-full">
              <h5 class="mb-1 font-bold dark:text-white">Employee Registration</h5>
            </div>
          </div>
          <div class="flex max-w-full px-6 mt-4 sm:flex-0 shrink-0 sm:mt-0 sm:ml-auto sm:w-auto">
              <button type="button" data-toggle="modal" data-target="#newEmp" class="inline-block px-8 py-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 hover:scale-102 active:shadow-soft-xs border-blue-500 text-blue-500 hover:text-blue-500 hover:opacity-75 hover:shadow-none active:scale-100 active:border-blue-500 active:bg-blue-500 active:text-white hover:active:border-blue-500 hover:active:bg-transparent hover:active:text-blue-500 hover:active:opacity-75"><i class="fas fa-plus mr-2"></i> New Employee</button>
          </div>
        </div>
      </div>
          
      <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 flex-0">
          <div class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto px-6 py-12">
              <div class="flex flex-wrap w-full px-5">
              <h5 class="mb-5 font-semibold dark:text-white">All Item Employees</h5>
  
                  <div class="lg:grid-cols-3 w-full md-grid-cols-2 gap-4 grid">

                            @foreach($employees as $employee)
                            <div class="flex-auto border border-blue-500 rounded-xl p-4">
                              <div class="flex">
                              <div class="w-19 h-19 text-base ease-soft-in-out bg-gradient-to-tl from-gray-800 to-slate-800 dark:bg-gradient-to-tl dark:from-slate-850 dark:to-gray-850 inline-flex items-center justify-center rounded-lg p-2 text-white transition-all duration-200">
                                  <p class="mb-0 text-3xl font-bold">
                                    <i class="fas fa-user"></i>
                                  </p>
                              </div>
                              <div class="ml-4">
                                  <h6 class="dark:text-white">{{$employee->name}}</h6>
                                  <p class="dark:text-white -mt-3">{{$employee->designation}}</p>
                              </div>
                              <div class="ml-auto flex items-center">
                                  <div class="relative">
                                  <button dropdown-trigger="" class="inline-block py-3 pl-0 pr-2 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 text-slate-400 dark:text-white" aria-expanded="false">
                                      <i class="fa fa-ellipsis-v text-lg" aria-hidden="true"></i>
                                  </button>
                                  <p class="hidden transform-dropdown-show"></p>
                                  <div dropdown-menu="" class="dark:shadow-soft-dark-xl z-100 dark:bg-gray-950 text-sm lg:shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 before:text-5.5 transform-dropdown pointer-events-none absolute right-0 left-auto top-0 m-0 -mr-4 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-0 py-2 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8'] sm:-mr-6">
                                      <button type="button" data-toggle="modal" data-target="#updateEmp{{$employee->id}}" class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-slate-500 hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300">Update</button>
                                      <form action="{{route('deleteEmployee',$employee->id)}}" id="delete-form-{{$employee->id}}" method="POST">
                                          @csrf
                                          <button type="submit" class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-red-500 hover:bg-gray-200 hover:text-red-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300" onclick="ConfirmDelete('event, {{$employee->id}}')">Delete</button>
                                      </form>
                                  </div>
                                  </div>
                              </div>
                              </div>
                              <p class="mt-4 leading-normal text-sm">{{$employee->email}}</p>
                              <p class="mt-4 leading-normal text-sm">{{$employee->address}}</p>
                              <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent">
                              <div class="flex flex-wrap -mx-3">
                              <div class="w-6/12 max-w-full px-3 flex-0">
                                  <h6 class="mb-0 leading-normal text-sm">{{$employee->phone}}</h6>
                                  <p class="mb-0 font-semibold leading-normal text-sm text-slate-400"></p>
                              </div>
                              </div>
                          </div>


                          <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto transition-opacity ease-linear opacity-0 z-sticky outline-0" id="updateEmp{{$employee->id}}" aria-hidden="true">
                            <div class="relative w-auto m-2 transition-transform duration-300 pointer-events-none sm:m-7 sm:max-w-125 sm:mx-auto lg:mt-48 ease-soft-out -translate-y-13">
                              <div class="relative flex flex-col w-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
                                <div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                                  <h5 class="mb-0 leading-normal mr-2 dark:text-white" id="ModalLabel">Update Employee</h5>
                                  <button type="button" data-toggle="modal" data-target="#updateEmp{{$employee->id}}" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
                                </div>
                                <form class="relative" id="employee-form"  action="{{ route('updateEmployee',$employee->id) }}" method="post">
                                    @csrf
                                    <div active form="info" class="
                                        flex flex-col visible p-6 w-full h-auto min-w-0 first-letter:break-words bg-white border-0 opacity-100 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                                        <div>
                                              <div class="flex flex-wrap -mx-3">
                                                  <div class="w-full max-w-full px-3 flex-0">
                                                      <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Employee Name</label>
                                                      <input type="text" value="{{$employee->name}}" name="name" placeholder="Employee name" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                                                  </div>
                                              </div>

                                              <div class="flex flex-wrap -mx-3">
                                                  <div class="w-full max-w-full px-3 flex-0">
                                                      <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Employee Address</label>
                                                      <input type="text" value="{{$employee->address}}" name="address" placeholder="Employee address" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                                                  </div>
                                              </div>
                        
                                              <div class="flex flex-wrap -mx-3">
                                                  <div class="w-full max-w-full px-3 flex-0">
                                                      <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Employee Phone number</label>
                                                      <input type="text" value="{{$employee->phone}}" name="phone" placeholder="Employee Phone Number" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                                                  </div>
                                              </div>
                        
                                              <div class="flex flex-wrap -mx-3">
                                                  <div class="w-full max-w-full px-3 flex-0">
                                                      <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Employee Phone number</label>
                                                      <input type="email" value="{{$employee->email}}" name="email" placeholder="Employee Phone Number" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                                                  </div>
                                              </div>

                                              <div class="flex flex-wrap -mx-3">
                                                  <div class="w-full max-w-full px-3 flex-0">
                                                      <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Designation</label>
                                                      <input type="text" value="{{$employee->designation}}" name="designation" placeholder="Designation" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                                                  </div>
                                              </div>

                                              <div class="flex flex-wrap items-center justify-end py-4 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                                  <button type="button" data-toggle="modal" data-target="#updateEmp{{$employee->id}}" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-slate-600 to-slate-300 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Close</button>
                                                  <button type="submit"class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Update</button>
                                              </div>
                                        </div>
                                    </div>
                                </form>
                              </div>
                            </div>
                          </div>
  

                      
                        @endforeach
  
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  
  
    <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto transition-opacity ease-linear opacity-0 z-sticky outline-0" id="newEmp" aria-hidden="true">
      <div class="relative w-auto m-2 transition-transform duration-300 pointer-events-none sm:m-7 sm:max-w-125 sm:mx-auto lg:mt-48 ease-soft-out -translate-y-13">
        <div class="relative flex flex-col w-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
          <div class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
            <h5 class="mb-0 leading-normal mr-2 dark:text-white" id="ModalLabel">Add New Employee</h5>
            <button type="button" data-toggle="modal" data-target="#newEmp" class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 " data-dismiss="modal"></button>
          </div>
          <form class="relative" id="employee-form"  action="{{ route('storeEmployee') }}" method="post">
              @csrf
              <div active form="info" class="
                  flex flex-col visible p-6 w-full h-auto min-w-0 first-letter:break-words bg-white border-0 opacity-100 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                  <div>
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0">
                                <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Employee Name</label>
                                <input type="text" name="name" placeholder="Employee name" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0">
                                <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Employee Address</label>
                                <input type="text" name="address" placeholder="Employee address" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                            </div>
                        </div>
  
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0">
                                <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Employee Phone number</label>
                                <input type="text" name="phone" placeholder="Employee Phone Number" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                            </div>
                        </div>
  
                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0">
                                <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Employee Phone number</label>
                                <input type="email" name="email" placeholder="Employee Phone Number" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3">
                            <div class="w-full max-w-full px-3 flex-0">
                                <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80" for="name">Designation</label>
                                <input type="text" name="designation" placeholder="Designation" class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" required />
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-end py-4 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                            <button type="button" data-toggle="modal" data-target="#newitemCat" class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-slate-600 to-slate-300 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Close</button>
                            <button type="submit"class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Create</button>
                        </div>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>


@endsection
