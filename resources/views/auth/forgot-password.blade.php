<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - BitzMag</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <div class="h-screen w-screen flex flex-col lg:flex-row overflow-hidden">
        <!-- Left side image section -->

        @include('partials.person')
        <!-- Right side login form section -->
        <div class="w-full lg:w-1/2 min-h-screen overflow-y-auto bg-white px-4">
            <div class="w-full max-w-md mx-auto py-12">
                <h2 class="text-2xl font-semibold text-gray-900 mb-2">Sign Up</h2>
                <p class="text-gray-600 mb-8">Enter your credentials to access your account</p>
                <!--- server feedback to the user -->
                <div class="space-y-4 max-w-2xl mx-auto p-4">
                    @if ($errors->any())
                        <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-4 shadow-sm">
                            <div class="flex items-center mb-2">
                                <svg class="w-5 h-5 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                        clip-rule="evenodd" />
                                </svg>
                                <h3 class="text-red-800 font-medium">There were some errors with your submission</h3>
                            </div>
                            <ul class="list-disc list-inside text-red-700 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="bg-green-50 border-l-4 border-green-500 rounded-lg p-4 shadow-sm">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <p class="text-green-700 font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif
                </div>
                <!--- end of server feedback -->
                <!-- Right side login form section -->
                <div class="w-full lg:w-1/2 min-h-screen overflow-y-auto bg-white px-4 py-12">
                    <div class="w-full max-w-md mx-auto py-12">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-2">Reset Password</h2>
                        <p class="text-gray-600 mb-8">Enter your email to access your account</p>

                        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
                            @csrf

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    EMAIL ADDRESS
                                </label>
                                <div class="relative">
                                    <input id="email" type="email" name="email"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500"
                                        required />
                                    <span class="absolute right-3 top-1/2 -translate-y-1/2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                        </svg>
                                    </span>
                                </div>

                            </div>





                            <!-- Login Button -->
                            <button type="submit"
                                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                                Log Into Account
                            </button>
                            <div class="flex justify-center">
                                <small class="text-orange-500 text-center">
                                    Check your E-mail for a password reset link
                                </small>
                            </div>


                        </form>




                    </div>
                </div>
            </div>


</body>

</html>
