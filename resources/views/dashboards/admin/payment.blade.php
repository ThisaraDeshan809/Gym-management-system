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
                        <button type="button" data-toggle="modal" data-target="#newEmp"
                            class="inline-block px-8 py-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 hover:scale-102 active:shadow-soft-xs border-blue-500 text-blue-500 hover:text-blue-500 hover:opacity-75 hover:shadow-none active:scale-100 active:border-blue-500 active:bg-blue-500 active:text-white hover:active:border-blue-500 hover:active:bg-transparent hover:active:text-blue-500 hover:active:opacity-75"><i
                                class="fas fa-plus mr-2"></i>New Payment</button>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 flex-0">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white border-0 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto px-6 py-12">
                            <div class="flex flex-wrap w-full px-5">
                                <h5 class="mb-5 font-semibold dark:text-white">All Payments</h5>


                                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

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
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments as $payment)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $payment->id }}
                                                </th>
                                                <td class="px-6 py-4 break-words">
                                                    {{ $payment->user->name }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $payment->payment_date }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $payment->payment_month }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $payment->payment_amount }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $payment->payment_status }}
                                                </td>
                                                <td class="px-6 py-4 text-left flex gap-4">
                                                    <button type="button" data-toggle="modal"
                                                        data-target="#updateEmp{{ $payment->id }}"
                                                        class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-black hover:bg-gray-200 hover:text-slate-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300"><i
                                                            class="fas fa-pen"></i></button>
                                                    <form action="{{ route('deletePackage', $payment->id) }}"
                                                        id="delete-form-{{ $payment->id }}" method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap border-0 bg-transparent px-4 text-left font-normal text-red-500 hover:bg-gray-200 hover:text-red-700 dark:text-white dark:hover:bg-gray-200/80 dark:hover:text-slate-700 lg:transition-colors lg:duration-300"
                                                            onclick="ConfirmDelete('event, {{ $payment->id }}')"><i
                                                                class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
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
        </div>
    </div>


    <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto transition-opacity ease-linear opacity-0 z-sticky outline-0"
        id="newEmp" aria-hidden="true">
        <div
            class="relative w-auto m-2 transition-transform duration-300 pointer-events-none sm:m-7 sm:max-w-125 sm:mx-auto lg:mt-48 ease-soft-out -translate-y-13">
            <div
                class="relative flex flex-col w-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
                <div
                    class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                    <h5 class="mb-0 leading-normal mr-2 dark:text-white" id="ModalLabel">Add New Payment</h5>
                    <button type="button" data-toggle="modal" data-target="#newEmp"
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
                                    <select class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="user_id" id="user_id">
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
                                        <input type="text" name="method" placeholder="method"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
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
                                    <select class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" name="status" id="status">
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
                                <button type="button" data-toggle="modal" data-target="#newitemCat"
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
