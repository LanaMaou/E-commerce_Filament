<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="mb-4 text-2xl font-bold text-gray-800 dark:text-white">
        Checkout
    </h1>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 md:col-span-12 lg:col-span-8">
            <!-- Card -->
            <div class="p-4 bg-white shadow rounded-xl sm:p-7 dark:bg-slate-900">
                <!-- Shipping Address -->
                <div class="mb-6">
                    <h2 class="mb-2 text-xl font-bold text-gray-700 underline dark:text-white">
                        Shipping Address
                    </h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block mb-1 text-gray-700 dark:text-white" for="first_name">
                                First Name
                            </label>
                            <input
                                class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-none"
                                id="first_name" type="text">
                            </input>
                        </div>
                        <div>
                            <label class="block mb-1 text-gray-700 dark:text-white" for="last_name">
                                Last Name
                            </label>
                            <input
                                class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-none"
                                id="last_name" type="text">
                            </input>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="block mb-1 text-gray-700 dark:text-white" for="phone">
                            Phone
                        </label>
                        <input
                            class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-none"
                            id="phone" type="text">
                        </input>
                    </div>
                    <div class="mt-4">
                        <label class="block mb-1 text-gray-700 dark:text-white" for="address">
                            Address
                        </label>
                        <input
                            class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-none"
                            id="address" type="text">
                        </input>
                    </div>
                    <div class="mt-4">
                        <label class="block mb-1 text-gray-700 dark:text-white" for="city">
                            City
                        </label>
                        <input
                            class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-none"
                            id="city" type="text">
                        </input>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div>
                            <label class="block mb-1 text-gray-700 dark:text-white" for="state">
                                State
                            </label>
                            <input
                                class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-none"
                                id="state" type="text">
                            </input>
                        </div>
                        <div>
                            <label class="block mb-1 text-gray-700 dark:text-white" for="zip">
                                ZIP Code
                            </label>
                            <input
                                class="w-full px-3 py-2 border rounded-lg dark:bg-gray-700 dark:text-white dark:border-none"
                                id="zip" type="text">
                            </input>
                        </div>
                    </div>
                </div>
                <div class="mb-4 text-lg font-semibold">
                    Select Payment Method
                </div>
                <ul class="grid w-full gap-6 md:grid-cols-2">
                    <li>
                        <input class="hidden peer" id="hosting-small" name="hosting" required="" type="radio"
                            value="hosting-small" />
                        <label
                            class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                            for="hosting-small">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">
                                    Cash on Delivery
                                </div>
                            </div>
                            <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2">
                                </path>
                            </svg>
                        </label>
                    </li>
                    <li>
                        <input class="hidden peer" id="hosting-big" name="hosting" type="radio" value="hosting-big">
                        <label
                            class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                            for="hosting-big">
                            <div class="block">
                                <div class="w-full text-lg font-semibold">
                                    Stripe
                                </div>
                            </div>
                            <svg aria-hidden="true" class="w-5 h-5 ms-3 rtl:rotate-180" fill="none"
                                viewbox="0 0 14 10" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 5h12m0 0L9 1m4 4L9 9" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2">
                                </path>
                            </svg>
                        </label>
                        </input>
                    </li>
                </ul>
            </div>
            <!-- End Card -->
        </div>
        <div class="col-span-12 md:col-span-12 lg:col-span-4">
            <div class="p-4 bg-white shadow rounded-xl sm:p-7 dark:bg-slate-900">
                <div class="mb-2 text-xl font-bold text-gray-700 underline dark:text-white">
                    ORDER SUMMARY
                </div>
                <div class="flex justify-between mb-2 font-bold">
                    <span>
                        Subtotal
                    </span>
                    <span>
                        45,000.00
                    </span>
                </div>
                <div class="flex justify-between mb-2 font-bold">
                    <span>
                        Taxes
                    </span>
                    <span>
                        0.00
                    </span>
                </div>
                <div class="flex justify-between mb-2 font-bold">
                    <span>
                        Shipping Cost
                    </span>
                    <span>
                        0.00
                    </span>
                </div>
                <hr class="h-1 my-4 rounded bg-slate-400">
                <div class="flex justify-between mb-2 font-bold">
                    <span>
                        Grand Total
                    </span>
                    <span>
                        45,000.00
                    </span>
                </div>
                </hr>
            </div>
            <button class="w-full p-3 mt-4 text-lg text-white bg-green-500 rounded-lg hover:bg-green-600">
                Place Order
            </button>
            <div class="p-4 mt-4 bg-white shadow rounded-xl sm:p-7 dark:bg-slate-900">
                <div class="mb-2 text-xl font-bold text-gray-700 underline dark:text-white">
                    BASKET SUMMARY
                </div>
                <ul class="divide-y divide-gray-200 dark:divide-gray-700" role="list">
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img alt="Neil image" class="w-12 h-12 rounded-full"
                                    src="https://iplanet.one/cdn/shop/files/iPhone_15_Pro_Max_Blue_Titanium_PDP_Image_Position-1__en-IN_1445x.jpg?v=1695435917">
                                </img>
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Apple iPhone 15 Pro Max
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    Quantity: 1
                                </p>
                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                $320
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img alt="Neil image" class="w-12 h-12 rounded-full"
                                    src="https://iplanet.one/cdn/shop/files/iPhone_15_Pro_Max_Blue_Titanium_PDP_Image_Position-1__en-IN_1445x.jpg?v=1695435917">
                                </img>
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Apple iPhone 15 Pro Max
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    Quantity: 1
                                </p>
                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                $320
                            </div>
                        </div>
                    </li>
                    <li class="py-3 sm:py-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img alt="Neil image" class="w-12 h-12 rounded-full"
                                    src="https://iplanet.one/cdn/shop/files/iPhone_15_Pro_Max_Blue_Titanium_PDP_Image_Position-1__en-IN_1445x.jpg?v=1695435917">
                                </img>
                            </div>
                            <div class="flex-1 min-w-0 ms-4">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Apple iPhone 15 Pro Max
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    Quantity: 1
                                </p>
                            </div>
                            <div
                                class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                $320
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
