<!-- Toggle Button -->
<div class="fixed top-4 left-4 z-50 lg:hidden">
    <button id="toggleSidebarBtn"
        class="bg-gray-700 text-gray-100 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
    </button>
</div>

<!-- Overlay -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>


<div id="sidebar"
    class="fixed inset-y-0 left-0 z-40 flex flex-col h-screen bg-gray-900 text-gray-100 w-64 transform transition-transform duration-300 ease-in-out lg:translate-x-0 -translate-x-full">

    <!-- Logo -->
    <div class="px-6 py-4">
        <h1 class="text-xl font-bold flex items-center">
            <span class="text-red-500">Bitz</span>
            <span>Mag</span>
        </h1>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 py-4 overflow-y-auto">
        <a href="{{ route('dashboard') }}"
            class="flex items-center px-6 py-2 text-sm hover:bg-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
        </a>

        <a href="{{ route('dashboard.source') }}"
            class="flex items-center px-6 py-2 text-sm hover:bg-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l-5 5 5 5m4-10l5 5-5 5" />
            </svg>
            Source
        </a>

        <a href="{{ route('dashboard.connection') }}"
            class="flex items-center px-6 py-2 text-sm hover:bg-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
            Connections
        </a>

        <a href="{{ route('dashboard.performance') }}"
            class="flex items-center px-6 py-2 text-sm hover:bg-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            Performance
            <span class="ml-auto bg-gray-800 text-xs px-2 py-1 rounded-full">10</span>
        </a>

        <a href="{{ route('dashboard.user') }}"
            class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Users
        </a>

        <a href="{{ route('dashboard.billing') }}"
            class="flex items-center px-4 py-2 rounded-lg hover:bg-gray-800 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            Billing
        </a>

        <!-- Welcome Card -->
        <div class="mx-4 my-4 p-4 bg-gray-800 rounded-lg">
            <h3 class="font-medium text-sm">Welcome</h3>
            <p class="text-sm text-gray-400 mt-1">Get to know your BitzMag Dashboard with our short walkthrough tour.
            </p>
            <button class="mt-3 text-sm text-blue-400 hover:text-blue-300">Start Tour</button>
        </div>

        <!-- Bottom Links -->
        <div class="mt-auto">
            <a href="{{ route('dashboard.support') }}"
                class="flex items-center px-6 py-2 text-sm hover:bg-gray-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18.364 5.636l-3.536 3.536m0 0l5.656 5.656M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                Support
            </a>

            <a href="{{ route('dashboard.settings') }}"
                class="flex items-center px-6 py-2 text-sm hover:bg-gray-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
            </a>
        </div>

        <div>
            <form method="POST" action="{{ route('logout') }}" class="flex items-center">
                @csrf
                <button type="submit"
                    class="flex items-center px-6 py-2 text-sm hover:bg-gray-800 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>


        <!-- User Profile -->
        <div class="px-6 py-4 mt-4">
            <a href="{{ route('dashboard.profile') }}">
                <div class="flex items-center">
                    <div>
                        <img src="{{ asset('/images/adewale.png') }}" alt="Profile photo"
                            class="h-8 w-8 rounded-full bg-gray-700">
                    </div>

                    <div class="ml-3">
                        <p class="text-sm font-medium">johnmarvel</p>
                        <p class="text-xs text-gray-500">johnmarvel@gmail.com</p>
                    </div>
                </div>
            </a>
        </div>
    </nav>
</div>

<!-- Main Content Container -->
<div id="mainContent" class="lg:ml-64 transition-all duration-300">
    @yield('content')
</div>
<script>
    // JavaScript to handle sidebar toggling
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('toggleSidebarBtn');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const mainContent = document.getElementById('mainContent');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // Toggle button click handler
        toggleBtn.addEventListener('click', function() {
            if (sidebar.classList.contains('-translate-x-full')) {
                openSidebar();
            } else {
                closeSidebar();
            }
        });

        // Overlay click handler
        overlay.addEventListener('click', closeSidebar);

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) { // lg breakpoint
                closeSidebar();
                document.body.classList.remove('overflow-hidden');
            }
        });
    });
</script>
