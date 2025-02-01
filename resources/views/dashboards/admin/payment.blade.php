@extends('layouts.admin.app')

@section('content')
    <div class="w-full p-6 mx-auto">
        <div class="w-full max-w-full px-3 lg:flex-0 shrink-0">
            <div class="relative flex flex-col flex-auto min-w-0 p-4 mb-4 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border"
                id="profile">
                <div class="flex flex-wrap items-center justify-center -mx-3">
                    <div class="w-8/12 max-w-full px-3 my-auto flex-0 sm:w-auto">
                        <div class="h-full">
                            <h5 class="mb-1 font-bold dark:text-white">Payments</h5>
                        </div>
                    </div>
                    <div class="flex max-w-full px-6 mt-4 sm:flex-0 shrink-0 sm:mt-0 sm:ml-auto sm:w-auto">
                        <button type="button" data-toggle="modal" data-target="#newPayment"
                            class="inline-block px-8 py-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 hover:scale-102 active:shadow-soft-xs border-blue-500 text-blue-500 hover:text-blue-500 hover:opacity-75 hover:shadow-none active:scale-100 active:border-blue-500 active:bg-blue-500 active:text-white hover:active:border-blue-500 hover:active:bg-transparent hover:active:text-blue-500 hover:active:opacity-75"><i
                                class="fas fa-plus mr-2"></i>New Payment</button>
                    </div>
                    <div class="flex max-w-full px-6 mt-4 sm:flex-0 shrink-0 sm:mt-0 sm:ml-auto sm:w-auto">
                        <label for="start_date">Start Date
                            <input type="date" id="start_date">
                        </label>
                        <label for="end_date" class="ml-2">End Date
                            <input type="date" id="end_date">
                        </label>
                        <button id="filter_date" class="ml-2 px-3 py-1 bg-blue-500 text-white rounded">Filter</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap ">
                <div class="w-full max-w-full px-3 flex-0">
                    <div
                        class="relative  break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class=" px-6 py-12">
                            <div class="">
                                <table id="tbl_payments"
                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                ID
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                User Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Package Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Package Expire Date
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Date
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Month
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Amount
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Type
                                            </th>
                                            <th scope="col" class="px-6 py-3">
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
        id="newPayment" aria-hidden="true">
        <div
            class="relative w-auto m-2 transition-transform duration-300 pointer-events-none sm:m-7 sm:max-w-125 sm:mx-auto lg:mt-48 ease-soft-out -translate-y-13">
            <div
                class="relative flex flex-col w-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
                <div
                    class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                    <h5 class="mb-0 leading-normal mr-2 dark:text-white" id="ModalLabel">Add New Payment</h5>
                    <button type="button" data-toggle="modal" data-target="#newPayment"
                        class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 "
                        data-dismiss="modal"></button>
                </div>
                <form class="relative" id="payment-form" action="{{ route('savePayment') }}" method="post">
                    @csrf
                    <div active form="info"
                        class="
                    flex flex-col visible p-6 w-full h-auto min-w-0 first-letter:break-words bg-white border-0 opacity-100 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div>
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="name">User</label>
                                    <select
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        name="user_id" id="user_id">
                                        <option value="">Select User</option>
                                        @foreach ($customer_users as $customer_user)
                                            <option value="{{ $customer_user->id }}">{{ $customer_user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="name">Payment Method</label>
                                    <select class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="payment_method" id="payment_method">
                                        <option value="">Select Payment Method</option>
                                        <option value="cash_payment">Cash Payment</option>
                                        <option value="online_payment">Online Payment</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="name">Date</label>
                                    <input type="date" name="date" placeholder="Date"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="name">Month</label>
                                    <input type="month" name="month" placeholder="month"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="name">Status</label>
                                    <select
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        name="status" id="status">
                                        <option value="">Select User</option>
                                        <option value="Due">Due</option>
                                        <option value="Paid">Paid</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="name">Amount</label>
                                    <input type="text" name="amount" placeholder="amount"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
                                </div>
                            </div>

                            <div
                                class="flex flex-wrap items-center justify-end py-4 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                <button type="button" data-toggle="modal" data-target="#newPayment"
                                    class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-slate-600 to-slate-300 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Close</button>
                                <button
                                    type="submit"class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Create</button>
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
    <script>
        $(document).ready(function() {
            var tbl_payments = $('#tbl_payments').DataTable({
                lengthMenu: [
                    [25, 50, 100, -1],
                    ['25 ', '50 ', '100', 'All']
                ],
                processing: true,
                ajax: {
                    url: "{{ url('/get_all_payments_datatable') }}",
                    data: function(d) {
                        d.start_date = $('#start_date').val();
                        d.end_date = $('#end_date').val();
                    },
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
                        data: 'package_name',
                        name: 'package_name'
                    },
                    {
                        data: 'package_expire_date',
                        name: 'package_expire_date'
                    },
                    {
                        data: 'payment_date',
                        name: 'payment_date'
                    },
                    {
                        data: 'payment_month',
                        name: 'payment_month'
                    },
                    {
                        data: 'payment_amount',
                        name: 'payment_amount'
                    },
                    {
                        data: 'payment_status',
                        name: 'payment_status'
                    },
                    {
                        data: 'payment_type',
                        name: 'payment_type'
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

            $('#filter_date').on('click', function() {
                tbl_payments.ajax.reload();
            });

            $('#tbl_payments').on('click', '.btn_mark_as_paid_payment', function() {
                var payment_id = $(this).data('id');

                $.ajax({
                    url: "{{ url('/mark_as_paid_payment') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "payment_id": payment_id,
                    },
                    success: function(response) {
                        if (response.success == true) {
                            tbl_payments.ajax.reload();
                            toastr.success(response.message);
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });
        });
    </script>
@endsection
