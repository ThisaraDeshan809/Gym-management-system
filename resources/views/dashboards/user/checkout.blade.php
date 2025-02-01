@extends('layouts.usersite.app')

@section('content')
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <form id="payment_form" class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12 xl:gap-16">
                <div class="min-w-0 flex-1 space-y-8">
                    <div class="space-y-4">
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">payment Details</h2>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label for="your_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                    Your name </label>
                                <input type="text" id="your_name"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Bonnie Green" required />
                            </div>

                            <div>
                                <label for="your_email"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Your email*
                                </label>
                                <input type="email" id="your_email"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="name@flowbite.com" required />
                            </div>

                            <div>
                                <div class="mb-2 flex items-center gap-2">
                                    <label for="select-country-input-3"
                                        class="block text-sm font-medium text-gray-900 dark:text-white"> Country* </label>
                                </div>
                                <select id="country"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
                                    @php
                                        $countries = ['Sri Lanka', 'India', 'Australia', 'Canada', 'United States'];
                                    @endphp
                                    <option value="">Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div>
                                <div class="mb-2 flex items-center gap-2">
                                    <label for="select-city-input-3"
                                        class="block text-sm font-medium text-gray-900 dark:text-white"> City* </label>
                                </div>
                                <select id="city"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
                                    @php
                                        $cities = [
                                            'Sri Lanka' => ['Colombo', 'Kandy', 'Galle', 'Jaffna'],
                                            'India' => ['Mumbai', 'Delhi', 'Bangalore', 'Chennai'],
                                            'Australia' => ['Sydney', 'Melbourne', 'Brisbane', 'Perth'],
                                            'Canada' => ['Toronto', 'Vancouver', 'Montreal', 'Calgary'],
                                            'United States' => ['New York', 'Los Angeles', 'Chicago', 'Houston'],
                                        ];
                                    @endphp
                                    <option value="">Select City</option>
                                    @foreach ($cities as $country => $cities)
                                        <optgroup label="{{ $country }}">
                                            @foreach ($cities as $city)
                                                <option value="{{ $city }}">{{ $city }}</option>
                                            @endforeach
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="phone-input-3"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Phone Number*
                                </label>
                                <div class="flex items-center">
                                    <div class="relative w-full">
                                        <input type="text" id="phone-input"
                                            class="z-20 block w-full rounded-e-lg border border-s-0 border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:border-s-gray-700  dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500"
                                             placeholder="123-456-7890" required />
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="email"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Email </label>
                                <input type="email" id="email"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="name@flowbite.com" required />
                            </div>



                        </div>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Payment</h3>

                        <select name="payment_method" id="payment_method" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
                            <option value="">Select Payment Method</option>
                            <option value="cash_payment">Cash Payment</option>
                            <option value="online_payment">Online Payment</option>
                        </select>
                    </div>

                </div>

                <div class="mt-6 w-full space-y-6 sm:mt-8 lg:mt-0 lg:max-w-xs xl:max-w-md">
                    <div class="flow-root">
                        <div class="-my-3 divide-y divide-gray-200 dark:divide-gray-800">
                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Subtotal</dt>
                                <dd class="text-base font-medium text-gray-900 dark:text-white">RS {{ $package->price }}
                                </dd>
                            </dl>

                            <dl class="flex items-center justify-between gap-4 py-3">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd class="text-base font-bold text-gray-900 dark:text-white">RS {{ $package->price }}</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button type="button" id="btn_save_package_payment"
                            class="flex w-full items-center bg-black justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed
                            to Payment</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'x-csrf-token': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btn_save_package_payment').on('click', function() {
            var form = $('#payment_form')[0];
            var formData = new FormData(form);
            formData.append('package_id', {{ $package->id }});
            formData.append('user_id', {{ Auth::user()->id }});
            formData.append('package_price', {{ $package->price }});
            formData.append('payment_date', new Date().toISOString().slice(0, 10));
            formData.append('payment_method', $('#payment_method').val());
            formData.append('payment_month', new Date().toISOString().slice(0, 7));
            formData.append('payment_type', 'package');
            $.ajax({
                type: "POST",
                url: '{{ route('savePackagePayment') }}',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success == true) {
                        $('#payment_form')[0].reset();
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
