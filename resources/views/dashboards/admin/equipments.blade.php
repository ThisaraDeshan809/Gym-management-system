@extends('layouts.admin.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css"
        integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
    <div class="w-full p-6 mx-auto">
        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0">
            <div class="relative flex flex-col flex-auto min-w-0 p-4 mb-4 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border"
                id="profile">
                <div class="flex flex-wrap items-center justify-center -mx-3">
                    <div class="w-8/12 max-w-full px-3 my-auto flex-0 sm:w-auto">
                        <div class="h-full">
                            <h5 class="mb-1 font-bold dark:text-white">Equipments</h5>
                        </div>
                    </div>
                    <div class="flex max-w-full px-6 mt-4 sm:flex-0 shrink-0 sm:mt-0 sm:ml-auto sm:w-auto">
                        <button type="button" data-toggle="modal" data-target="#newEquipment"
                            class="inline-block px-8 py-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 hover:scale-102 active:shadow-soft-xs border-blue-500 text-blue-500 hover:text-blue-500 hover:opacity-75 hover:shadow-none active:scale-100 active:border-blue-500 active:bg-blue-500 active:text-white hover:active:border-blue-500 hover:active:bg-transparent hover:active:text-blue-500 hover:active:opacity-75"><i
                                class="fas fa-plus mr-2"></i>New Equipment</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap ">
                <div class="w-full max-w-full px-3 flex-0">
                    <div
                        class="relative  break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class=" px-6 py-12">
                            <div class="">
                                <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 w-full"
                                    style="width: 100% !important;" id="tbl_equipments">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="py-3">
                                                ID
                                            </th>
                                            <th scope="col" class="py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="py-3">
                                                Description
                                            </th>
                                            <th scope="col" class="py-3">
                                                Quantiity
                                            </th>
                                            <th scope="col" class="py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto transition-opacity ease-linear opacity-0 z-sticky outline-0"
        id="newEquipment" aria-hidden="true">
        <div
            class="relative w-auto m-2 transition-transform duration-300 pointer-events-none sm:m-7 sm:max-w-125 sm:mx-auto lg:mt-48 ease-soft-out -translate-y-13">
            <div
                class="relative flex flex-col w-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
                <div
                    class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                    <h5 class="mb-0 leading-normal mr-2 dark:text-white" id="ModalLabel">Add New Equipment</h5>
                    <button type="button" data-toggle="modal" data-target="#newEquipment"
                        class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 "
                        data-dismiss="modal"></button>
                </div>
                <form class="relative" id="add_new_equipment" enctype="multipart/form-data">
                    @csrf
                    <div active form="info"
                        class="
                    flex flex-col visible p-6 w-full h-auto min-w-0 first-letter:break-words bg-white border-0 opacity-100 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div>
                            <div class="grid grid-cols-1 space-y-2">
                                <label class="text-sm font-bold text-gray-500 tracking-wide">Equipment Image</label>
                                <div class="flex items-center justify-center w-full">
                                    <label
                                        class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                        <div
                                            class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                            <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
                                                <img id="uploaded-image" class="has-mask h-36 object-center"
                                                    src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg"
                                                    alt="freepik image">
                                            </div>
                                            <p class="pointer-none text-gray-500 ">
                                                Click Here For Upload A Image from your computer
                                            </p>
                                        </div>
                                        <input type="file" class="hidden" name="equipment_image" id="equipment_image">
                                    </label>
                                </div>
                            </div>
                            <p class="text-sm text-gray-300">
                                <span>File type: jpg,png</span>
                            </p>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="name">Equipment Name</label>
                                    <input type="text" name="equipment_name" id="equipment_name"
                                        placeholder="Equipment Name"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="name">Equipment Description</label>
                                    <textarea type="text" name="equipment_description" id="equipment_description" placeholder="Equipment Description"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="duration">Quantity</label>
                                    <input type="number" name="quantity" id="quantity" placeholder="Quantity"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
                                </div>
                            </div>

                            <div
                                class="flex flex-wrap items-center justify-end py-4 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                <button type="button" data-toggle="modal" data-target="#newEquipment"
                                    class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-slate-600 to-slate-300 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Close</button>
                                <button type="button" id="createEquipment"
                                    class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            tbl_equipments = $('#tbl_equipments').DataTable({
                lengthMenu: [
                    [25, 50, 100, -1],
                    ['25 ', '50 ', '100', 'All']
                ],
                processing: true,
                ajax: {
                    url: "{{ url('/get_equipments') }}",
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'quantity',
                        name: 'quantity'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ],
                order: [
                    [0, 'desc']
                ], // Default sorting by ID in descending order
            });

            $('#tbl_equipments').on('click', '.btn_view_equipment', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ url('/view_equipments') }}",
                    type: "GET",
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success == true) {
                            toastr.success(response.message);
                            tbl_equipments.ajax.reload();
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });

            $('#createEquipment').on('click', function(e) {
                e.preventDefault();
                $(this).attr('disabled', true);
                var formData = new FormData($('#add_new_equipment')[0]);
                $.ajax({
                    url: "{{ url('/add_new_equipment') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success == true) {
                            $('#add_new_equipment')[0].reset();
                            $('#newEquipment').removeClass('block');
                            $('#newEquipment').addClass('hidden');
                            tbl_equipments.ajax.reload();
                            toastr.success(response.message);
                            $(this).attr('disabled', false);
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });

            $('#equipment_image').on('change', function(e) {
                const file = e.target.files[0];
                const reader = new FileReader();
                reader.onload = function(event) {
                    $('#uploaded-image').attr('src', event.target.result);
                };
                reader.readAsDataURL(file);
            });
        })
    </script>
@endsection
