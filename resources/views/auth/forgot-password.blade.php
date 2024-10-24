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
