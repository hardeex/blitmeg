<div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-8">
            <h1 class="text-xl font-semibold text-gray-900 mb-10">Connections</h1>


        </div>

        <!-- Add New Button -->
        <button
            class="inline-flex items-center px-4 py-2 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                    clip-rule="evenodd" />
            </svg>
            Add new
        </button>
    </div>


    <!-- Navigation Tabs -->
    <nav class="flex space-x-4">
        <a href="#" class="px-3 py-2 text-sm font-medium text-red-600 border-b-2 border-red-600">
            Sources
        </a>
        <a href="#" class="px-3 py-2 text-sm font-medium text-gray-500 hover:text-gray-700">
            Destination
        </a>
    </nav>
    <!-- Empty State -->
    <div class="mt-12 flex flex-col items-center justify-center">
        <!-- Custom Illustration -->
        <div class="w-72 h-48 mb-6 relative">
            <!-- World Map Background (simplified using dots) -->
            <div class="absolute inset-0 grid grid-cols-12 gap-2 opacity-10">
                @for ($i = 0; $i < 60; $i++)
                    <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                @endfor
            </div>






            <!-- Text Content -->
            <img src="/images/data-bitz.jpeg" alt="No data" class="w-64 mb-6">
            <h3 class="text-lg font-medium text-gray-900 mb-2">
                You do not have any Source yet
            </h3>
            <p class="text-sm text-gray-500 text-center mb-6">
                Select or add source to connect and start<br>
                your free 30-day trial
            </p>

            <div class="flex justify-center">
                <button
                    class="inline-flex items-center px-6 py-3 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-md">
                    Add Source
                </button>
            </div>

        </div>
    </div>
