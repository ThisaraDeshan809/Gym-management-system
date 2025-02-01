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
                            <h5 class="mb-1 font-bold dark:text-white">Trainer Reservations</h5>
                        </div>
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
                                    style="width: 100% !important;" id="tbl_reservations">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="py-3">
                                                ID
                                            </th>
                                            <th scope="col" class="py-3">
                                                Customer Name
                                            </th>
                                            <th scope="col" class="py-3">
                                                Trainer
                                            </th>
                                            <th scope="col" class="py-3">
                                                Date
                                            </th>
                                            <th scope="col" class="py-3">
                                                Time In
                                            </th>
                                            <th scope="col" class="py-3">
                                                Time Out
                                            </th>
                                            <th scope="col" class="py-3">
                                                Status
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
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            tbl_reservations = $('#tbl_reservations').DataTable({
                lengthMenu: [
                    [25, 50, 100, -1],
                    ['25 ', '50 ', '100', 'All']
                ],
                processing: true,
                ajax: {
                    url: "{{ url('/get_trainer_reservations') }}",
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'user_name',
                        name: 'user_name'
                    },
                    {
                        data: 'trainer',
                        name: 'trainer'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'time_in',
                        name: 'time_in'
                    },
                    {
                        data: 'time_out',
                        name: 'time_out'
                    },
                    {
                        data: 'status',
                        name: 'status'
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

            $('#tbl_reservations').on('click', '.btn_mark_as_complete', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ url('/trainer_reservation_mark_as_complete') }}",
                    type: "POST",
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success == true) {
                            toastr.success(response.message);
                            tbl_reservations.ajax.reload();
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });

            $('#tbl_reservations').on('click', '.btn_cancel', function() {
                var id = $(this).data('id');

                $.ajax({
                    url: "{{ url('/trainer_reservation_cancel') }}",
                    type: "POST",
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success == true) {
                            toastr.success(response.message);
                            tbl_reservations.ajax.reload();
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });
        });
    </script>
@endsection
