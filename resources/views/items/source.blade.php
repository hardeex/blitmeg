<!-- resources/views/components/data-source-selector.blade.php -->
<div class="max-w-4xl mx-auto p-6">
    <div class="mb-8">
        <h2 class="text-xl font-semibold mb-2">Source</h2>

        <!-- Progress steps -->
        <div class="flex items-center mb-8">
            <div class="flex items-center">
                <div class="w-8 h-8 rounded-full bg-orange-500 flex items-center justify-center text-white">1</div>
                <div class="ml-2 text-gray-800">Add data</div>
            </div>
            <div class="flex-1 h-px bg-gray-300 mx-4"></div>
            <div class="flex items-center opacity-50">
                <div class="w-8 h-8 rounded-full border-2 border-gray-300 flex items-center justify-center">2</div>
                <div class="ml-2 text-gray-600">Preview</div>
            </div>
        </div>

        <!-- Main content grid -->
        <div class="grid grid-cols-2 gap-8">
            <!-- Left side - Data source list -->
            <div class="border rounded-lg p-4">
                <div class="mb-4">
                    <div class="relative">
                        <input type="text" placeholder="Your platform name"
                            class="w-full pl-10 pr-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <svg class="w-5 h-5 absolute left-3 top-3 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Platform list -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                        <div class="flex items-center">
                            <img src="https://www.tiktok.com/favicon.ico" alt="TikTok" class="w-6 h-6">
                            <span class="ml-3">TikTok</span>
                        </div>
                        <span class="text-green-500">+25%</span>
                    </div>

                    <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                        <div class="flex items-center">
                            <img src="https://slack.com/favicon.ico" alt="Slack" class="w-6 h-6">
                            <span class="ml-3">Slack</span>
                        </div>
                        <span class="text-green-500">+25%</span>
                    </div>

                    <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                        <div class="flex items-center">
                            <img src="https://www.apple.com/favicon.ico" alt="Apple" class="w-6 h-6">
                            <span class="ml-3">Apple</span>
                        </div>
                        <span class="text-green-500">+25%</span>
                    </div>

                    <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                        <div class="flex items-center">
                            <img src="https://www.youtube.com/favicon.ico" alt="YouTube" class="w-6 h-6">
                            <span class="ml-3">YouTube</span>
                        </div>
                        <span class="text-green-500">+25%</span>
                    </div>

                    <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                        <div class="flex items-center">
                            <img src="https://www.spotify.com/favicon.ico" alt="Spotify" class="w-6 h-6">
                            <span class="ml-3">Spotify</span>
                        </div>
                        <span class="text-green-500">+25%</span>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-center space-x-2 mt-6">
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-50">1</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-50">2</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-lg bg-orange-500 text-white">3</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-50">4</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-50">5</button>
                    <button
                        class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-50">6</button>
                    <button class="w-8 h-8 flex items-center justify-center rounded-lg border hover:bg-gray-50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Right side - Empty state -->
            <div class="flex flex-col items-center justify-center text-center p-8">
                <img src="/images/data-bitz.jpeg" alt="No data" class="w-64 mb-6">
                <h3 class="text-lg font-medium mb-2">You do not have any data yet</h3>
                <p class="text-gray-600 mb-4">Click "Add data" button to get started in adding your first data source
                </p>
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600">
                    Add data
                </button>
            </div>
        </div>
    </div>
</div>
