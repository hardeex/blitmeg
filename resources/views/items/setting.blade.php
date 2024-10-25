<div class="container mx-auto px-4 py-8 max-w-3xl">
    {{-- Header Section --}}
    <div class="mb-8">
        <h1 class="text-xl font-semibold text-gray-900 mb-1">Settings</h1>
        <p class="text-sm text-gray-500">Take a look at your settings and the new policy to see what is covered</p>
    </div>

    {{-- Settings List --}}
    <div class="bg-white rounded-xl shadow-sm">
        {{-- Email Settings --}}
        <div class="flex items-center justify-between p-4 border-b border-gray-100 cursor-pointer hover:bg-gray-50">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 flex items-center justify-center bg-red-50 rounded-full">
                    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-medium text-gray-900">Email settings</div>
                    <div class="text-sm text-gray-500 flex items-center">
                        myemail@domain.com
                        <span class="ml-2 px-2 py-0.5 text-xs bg-green-100 text-green-800 rounded">Verified</span>
                    </div>
                </div>
            </div>
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>

        {{-- Connected Accounts --}}
        <div class="flex items-center justify-between p-4 border-b border-gray-100 cursor-pointer hover:bg-gray-50">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 flex items-center justify-center bg-red-50 rounded-full">
                    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-medium text-gray-900">Connected accounts</div>
                    <div class="text-sm text-gray-500">Integrations connected to your Frame account</div>
                </div>
            </div>
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>

        {{-- Language Settings --}}
        <div class="flex items-center justify-between p-4 border-b border-gray-100 cursor-pointer hover:bg-gray-50">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 flex items-center justify-center bg-red-50 rounded-full">
                    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-medium text-gray-900">Language Settings</div>
                    <div class="text-sm text-gray-500">English (USA)</div>
                </div>
            </div>
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>

        {{-- Change Password --}}
        <div class="flex items-center justify-between p-4 border-b border-gray-100 cursor-pointer hover:bg-gray-50">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 flex items-center justify-center bg-red-50 rounded-full">
                    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-medium text-gray-900">Change Password</div>
                    <div class="text-sm text-gray-500">••••••••••••••</div>
                </div>
            </div>
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>

        {{-- Close Account --}}
        <div class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
            <div class="flex items-center space-x-4">
                <div class="w-10 h-10 flex items-center justify-center bg-red-50 rounded-full">
                    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div>
                    <div class="text-sm font-medium text-gray-900">Close your account</div>
                    <div class="text-sm text-gray-500">If you want to stop using FrameAI</div>
                </div>
            </div>
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </div>
</div>
