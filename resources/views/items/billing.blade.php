{{-- resources/views/components/pricing-table.blade.php --}}
<div class="max-w-6xl mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        {{-- Try Free Plan --}}
        <div class="rounded-lg border border-gray-200 p-6 bg-white">
            <div class="mb-4">
                <h3 class="text-lg font-semibold">Try Free</h3>
                <div class="mt-2">
                    <span class="text-3xl font-bold">$0.00</span>
                </div>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    1 user
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    1 data source
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    1 account
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    5 GB destination
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    No DB destination backfills
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Daily DB refresh
                </li>
            </ul>

            <button
                class="w-full py-2 px-4 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                Activate
            </button>
        </div>

        {{-- Basic Plan --}}
        <div class="rounded-lg border border-gray-200 p-6 bg-orange-100 relative">
            <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                <span class="bg-orange-500 text-white px-3 py-1 rounded-full text-sm">Monthly</span>
            </div>

            <div class="mb-4">
                <h3 class="text-lg font-semibold">Basic Plan</h3>
                <div class="mt-2">
                    <span class="text-3xl font-bold">$50.00</span>
                </div>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    1 user
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    1 data source
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    1 account
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    5 GB destination
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    No DB destination backfills
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    Daily DB refresh
                </li>
            </ul>

            <button class="w-full py-2 px-4 bg-orange-500 text-white rounded-md hover:bg-orange-600 transition-colors">
                Activate
            </button>
        </div>

        {{-- Professional Plan --}}
        <div class="rounded-lg border border-gray-200 p-6 bg-white">
            <div class="mb-4">
                <h3 class="text-lg font-semibold">Professional</h3>
                <div class="mt-2">
                    <span class="text-3xl font-bold">$120.00</span>
                </div>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    1 user
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    1 data source
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    1 account
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    5 GB destination
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    No DB destination backfills
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    Daily DB refresh
                </li>
            </ul>

            <button
                class="w-full py-2 px-4 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                Activate
            </button>
        </div>
    </div>

    {{-- VIP Section --}}
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="rounded-lg border border-gray-200 p-6 bg-white">
            <div class="mb-4">
                <h3 class="text-lg font-semibold">VIP</h3>
                <div class="mt-2">
                    <span class="text-3xl font-bold">$150.00</span>
                </div>
            </div>

            <ul class="space-y-3 mb-6">
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    1 user
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    1 data source
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    1 account
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    5 GB destination
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    No DB destination backfills
                </li>
                <li class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                        </path>
                    </svg>
                    Daily DB refresh
                </li>
            </ul>

            <button
                class="w-full py-2 px-4 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors">
                Activate
            </button>
        </div>

        {{-- Enterprise Section --}}
        <div class="rounded-lg border border-gray-200 p-6 bg-white">
            <div class="mb-4">
                <h3 class="text-lg font-semibold">Enterprise</h3>
                <p class="text-gray-600 mt-2">Perfect for larger teams with custom requirements. This plan is suitable
                    for large teams and enterprise businesses that need advanced features and a wide range of complex
                    business uses.</p>
            </div>

            <button
                class="w-full py-2 px-4 bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition-colors mt-4">
                Let's Talk
            </button>
        </div>
    </div>
</div>
