@extends('layouts.usersite.app')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="pt-20 pb-48">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold uppercase">
                        My Reservations
                    </h2>
                    <p class="text-lg leading-relaxed m-4">
                        We have the best equipments for your workout. Our equipments are designed to give you the best
                        workout experience.
                    </p>
                </div>
            </div>
            <!-- Trainer Card Wrapper -->
            <div class="flex flex-wrap">
                <h2 class="w-full text-2xl font-bold mb-6">My Trainer Reservations</h2>
                @foreach ($trainer_reservations as $trainer_reservation)
                    <div class="w-full md:w-4/12 lg:mb-0 mb-12 px-4 flex justify-center items-center mt-5" data-aos="flip-right">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden px-6 text-center transform transition duration-500 hover:scale-105">
                            <img alt="..." src="https://images.unsplash.com/photo-1597347343908-2937e7dcc560?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                            class="shadow-lg rounded-full mx-auto mt-4" style="max-width: 250px;" />
                            <div class="pt-6 pb-4">
                                <h5 class="text-xl font-bold">{{ $trainer_reservation->trainer_name }}</h5>
                                <label for="" class="block mt-2">
                                    <span class="text-gray-600">Status</span>
                                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                        {{ $trainer_reservation->status }}
                                    </p>
                                </label>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    {{ $trainer_reservation->date }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="flex flex-wrap" style="margin-top: 200px;">
                <h2 class="w-full text-2xl font-bold mb-6">My Equipment Reservations</h2>
                @foreach ($equipment_reservations as $equipment_reservation)
                    <div class="w-full md:w-4/12 lg:mb-0 mb-12 px-4 flex justify-center items-center mt-5" data-aos="flip-right">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden px-6 text-center transform transition duration-500 hover:scale-105">
                            <img alt="..." src="{{ Storage::url('public/assets/images/equipments/' . $equipment_reservation->equipment_image) }}"
                            class="shadow-lg rounded-full mx-auto mt-4" style="max-width: 250px;" />
                            <div class="pt-6 pb-4">
                                <h5 class="text-xl font-bold">{{ $equipment_reservation->equipment_name }}</h5>
                                <label for="" class="block mt-2">
                                    <span class="text-gray-600">Status</span>
                                    <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                        {{ $equipment_reservation->status }}
                                    </p>
                                </label>
                                <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                    {{ $equipment_reservation->date }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto transition-opacity ease-linear opacity-0 z-sticky outline-0"
        id="equipment_reserve" aria-hidden="true">
        <div
            class="relative w-auto m-2 transition-transform duration-300 pointer-events-none sm:m-7 sm:max-w-125 sm:mx-auto lg:mt-48 ease-soft-out -translate-y-13">
            <div
                class="relative flex flex-col w-full bg-white border border-solid pointer-events-auto dark:bg-gray-950 bg-clip-padding border-black/20 rounded-xl outline-0">
                <div
                    class="flex items-center justify-between p-4 border-b border-solid shrink-0 border-slate-100 rounded-t-xl">
                    <h5 class="mb-0 leading-normal mr-2 dark:text-white" id="ModalLabel">Reserve Equipment</h5>
                    <button type="button" data-toggle="modal" data-target="#equipment_reserve"
                        class="fa fa-close w-4 h-4 ml-auto box-content p-2 text-black dark:text-white border-0 rounded-1.5 opacity-50 cursor-pointer -m-2 "
                        data-dismiss="modal"></button>
                </div>
                <form class="relative" id="package-form">
                    @csrf
                    <div active form="info"
                        class="
                    flex flex-col visible p-6 w-full h-auto min-w-0 first-letter:break-words bg-white border-0 opacity-100 dark:bg-gray-950 dark:shadow-soft-dark-xl shadow-soft-xl rounded-2xl bg-clip-border">
                        <div>
                            <input type="hidden" name="equipment_id" id="equipment_id">
                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="time_in">Time In</label>
                                    <input type="time" name="time_in" id="time_in" placeholder="Time In"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="time_out">Time Out</label>
                                    <input type="time" name="time_out" id="time_out" placeholder="Time Out"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
                                </div>
                            </div>

                            <div class="flex flex-wrap -mx-3">
                                <div class="w-full max-w-full px-3 flex-0">
                                    <label class=" mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80"
                                        for="date">Date</label>
                                    <input type="date" name="date" id="date" placeholder="Date"
                                        class="focus:shadow-soft-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"
                                        required />
                                </div>
                            </div>

                            <div
                                class="flex flex-wrap items-center justify-end py-4 border-t border-solid shrink-0 border-slate-100 rounded-b-xl">
                                <button type="button" data-toggle="modal" data-target="#equipment_reserve"
                                    class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-slate-600 to-slate-300 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Close</button>
                                <button type="button" id="reserve_equipment_btn"
                                    class="inline-block px-8 py-2 m-1 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer ease-soft-in leading-pro tracking-tight-soft bg-gradient-to-tl from-gray-900 to-slate-800 shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('#btn_reserve_equipment').click(function() {
                var equipment_id = $(this).data('id');
                $('#equipment_id').val(equipment_id);
            });

            $('#reserve_equipment_btn').click(function() {
                var time_in = $('#time_in').val();
                var time_out = $('#time_out').val();
                var equipment_id = $('#equipment_id').val();
                var date = $('#date').val();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: "{{ route('add_equipment_reservation') }}",
                    type: "POST",
                    data: {
                        time_in: time_in,
                        time_out: time_out,
                        equipment_id: equipment_id,
                        _token: _token,
                        date: date
                    },
                    success: function(response) {
                        if (response.success == true) {
                            toastr.success(response.message);
                            $('#equipment_reserve').removeClass('block');
                            $('#equipment_reserve').addClass('hidden');
                        } else {
                            toastr.error(response.message);
                        }
                    }
                });
            });
        });
    </script>
@endsection
