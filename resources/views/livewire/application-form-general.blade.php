<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Use a permanent address where you can receive mail.
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form wire:submit.prevent="submit">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-9 sm:grid-cols-9 gap-4 lg:gap-5">
                            {{-- <div class="grid grid-cols-12 lg:grid-cols-12 gap-4"> --}}
                                <div class="col-span-3 sm:col-span-3">
                                    <label for="company_name" class="block text-sm font-medium text-gray-700">Company
                                        Name</label>
                                    <input wire:model="company_name" type="text" name="company_name" id="company_name" autocomplete="given-name"
                                        class="pl-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-3 sm:col-span-3">
                                    <label for="business_reg_no" class="block text-sm font-medium text-gray-700">Business
                                        Registration No.</label>
                                    <input wire:model="business_reg_no" type="text" name="business_reg_no" id="business_reg_no" autocomplete="family-name"
                                        class="pl-2 mt-1 bg-gray-200 border-indigo-200 border-solid border-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm rounded-md">
                                </div>
                            {{-- </div> --}}
                            <div class="col-span-3 sm:col-span-1">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <input type="text" name="email_address" id="email_address" autocomplete="email"
                                    class="pl-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">Country /
                                    Region</label>
                                <select id="country" name="country" autocomplete="country"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>

                            <div class="col-span-6">
                                <label for="street_address" class="block text-sm font-medium text-gray-700">Street
                                    address</label>
                                <input type="text" name="street_address" id="street_address"
                                    autocomplete="street-address"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" name="city" id="city"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="state" class="block text-sm font-medium text-gray-700">State /
                                    Province</label>
                                <input type="text" name="state" id="state"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP /
                                    Postal</label>
                                <input type="text" name="postal_code" id="postal_code" autocomplete="postal-code"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
