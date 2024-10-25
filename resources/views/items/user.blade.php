<div class="container mx-auto px-4 py-8">
    {{-- Header Section --}}
    <div class="flex flex-col space-y-1 mb-8">
        <h1 class="text-xl font-semibold text-gray-900">Users</h1>
        <p class="text-sm text-gray-500">@Personal Organization</p>
    </div>

    {{-- Empty State --}}
    <div class="mt-12 flex flex-col items-center justify-center">
        {{-- Illustration --}}
        <img src="/images/data-bitz.jpeg" alt="No data" class="w-64 mb-6">

        {{-- Text Content --}}
        <h3 class="text-lg font-medium text-gray-900 mb-2">
            You do not have any Source yet
        </h3>
        <p class="text-sm text-gray-500 text-center mb-6">
            Select or add source to connect and start<br>
            your free 30-day trial
        </p>

        {{-- Add User Button --}}
        <button
            class="inline-flex items-center px-6 py-2.5 bg-red-500 hover:bg-red-600 text-white text-sm font-medium rounded-md">
            Add User
        </button>
    </div>
</div>
