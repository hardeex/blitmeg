<div class="bg-gray-50 min-h-screen">
    <div class="max-w-3xl mx-auto px-8 py-6">
        {{-- Header --}}
        <div class="mb-4">
            <h1 class="text-xl font-medium mb-1">Profile</h1>
            <p class="text-sm text-gray-500">Take a look at your settings and the new policy to see what's covered</p>
        </div>

        {{-- Profile Photo Section --}}
        <div class="mb-8">
            <h2 class="text-sm font-medium">Profile photo</h2>
            <p class="text-sm text-gray-500 mb-3">This image will be displayed on your profile</p>

            <div class="flex items-start gap-8">
                <form action="/upload" method="POST" enctype="multipart/form-data">
                    <label for="photo-upload"
                        class="inline-flex items-center text-sm text-gray-700 bg-white px-3 py-2 border border-gray-200 rounded-md hover:bg-gray-50 cursor-pointer">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        Change Photo
                    </label>
                    <input id="photo-upload" type="file" name="photo" accept="image/*" class="hidden" required />
                </form>


                <div class="relative">
                    <div class="w-16 h-16 rounded-full bg-orange-50 overflow-hidden">
                        <img src="{{ asset('/images/adewale.png') }}" alt="Profile photo"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-1 -right-1 bg-blue-500 rounded-full p-1">
                        <svg class="w-4 h-4 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        {{-- Personal Information Section --}}
        <div>
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h2 class="text-sm font-medium">Personal Information</h2>
                    <p class="text-sm text-gray-500">Update your personal details here</p>
                </div>
                <button type="button" class="px-3 py-1.5 text-sm bg-gray-100 rounded-md hover:bg-gray-200">
                    Save changes
                </button>
            </div>

            {{-- Form Fields using Flex Layout --}}
            <div class="flex flex-col space-y-6">
                {{-- First & Last Name Row --}}
                <div class="flex gap-4">
                    <div class="flex-1">
                        <label class="block text-sm mb-1">First name</label>
                        <input type="text" value="Gabriella"
                            class="w-full px-3 py-1.5 border border-gray-200 rounded-md">
                    </div>

                    <div class="flex-1">
                        <label class="block text-sm mb-1">Last name</label>
                        <input type="text" value="McPherson"
                            class="w-full px-3 py-1.5 border border-gray-200 rounded-md">
                    </div>
                </div>

                {{-- Email Address --}}
                <div>
                    <label class="block text-sm mb-1">Email address</label>
                    <input type="email" value="thegabriellapherson@gmail.com"
                        class="w-full px-3 py-1.5 bg-gray-50 border border-gray-200 rounded-md">
                </div>

                {{-- Username --}}
                <div>
                    <label class="block text-sm mb-1">Username</label>
                    <input type="text" value="@heekisnexo"
                        class="w-full px-3 py-1.5 border border-gray-200 rounded-md mb-1">
                    <p class="flex items-center text-sm text-green-600 mt-1">
                        <svg class="w-3 h-3 mr-1" viewBox="0 0 20 20" fill="currentColor">
                            <circle cx="10" cy="10" r="10" />
                        </svg>
                        This username is available
                    </p>
                </div>

                {{-- Role --}}
                <div>
                    <label class="block text-sm mb-1">Role</label>
                    <input type="text" value="Account Manager"
                        class="w-full px-3 py-1.5 border border-gray-200 rounded-md">
                </div>
            </div>
        </div>
    </div>
</div>
