<div class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 w-full">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <div class="flex gap-4">
                <button class="flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M12 5v14m7-7H5"></path>
                    </svg>
                    Share
                </button>
                <button class="flex items-center gap-2 px-4 py-2 border rounded-lg hover:bg-gray-50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    Export
                </button>
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600">
                    Connect
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg border">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-sm text-gray-500">User Engagement</p>
                        <h3 class="text-2xl font-bold">6,200</h3>
                    </div>
                    <span class="text-green-500">↑ 1.5%</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg border">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-sm text-gray-500">Traffic Sources</p>
                        <h3 class="text-2xl font-bold">3,024</h3>
                    </div>
                    <span class="text-green-500">↑ 0.8%</span>
                </div>

            </div>
            <div class="bg-white p-6 rounded-lg border">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-sm text-gray-500">Audience Growth</p>
                        <h3 class="text-2xl font-bold">5,837</h3>
                    </div>
                    <span class="text-green-500">↑ 1.8%</span>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-3 gap-6">
            <!-- Line Chart -->
            <div class="col-span-2 bg-white p-6 rounded-lg border">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold">Report</h3>
                    <div class="flex gap-2">
                        <button class="px-3 py-1 text-sm rounded bg-blue-50 text-blue-600">Operational</button>
                        <button class="px-3 py-1 text-sm rounded">Recent</button>
                    </div>
                </div>
                <canvas id="lineChart" height="200"></canvas>
            </div>
            <!-- Donut Chart -->
            <div class="bg-white p-6 rounded-lg border">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-semibold">Traffic Source</h3>
                    <a href="#" class="text-orange-500 text-sm">See all →</a>
                </div>

                <div class="relative">
                    <canvas id="donutChart" height="200"></canvas>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
                        <div class="text-sm text-gray-500">Total Campaign</div>
                        <div class="text-2xl font-bold">72</div>
                    </div>
                </div>

                <div class="mt-6">
                    <div class="text-gray-500 mb-2">Categories</div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                                <span class="text-gray-600">Social Media</span>
                            </div>
                            <span>42.9%</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                                <span class="text-gray-600">Movie Streaming</span>
                            </div>
                            <span>42.9%</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <span class="text-gray-600">Music Streaming</span>
                            </div>
                            <span>42.9%</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <span class="text-gray-600">Wallets</span>
                            </div>
                            <span>42.9%</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-blue-400"></div>
                                <span class="text-gray-600">Reserved</span>
                            </div>
                            <span>42.9%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Ads Performance Table -->
        <div class="bg-white rounded-lg border mt-6 p-6">
            <h3 class="font-semibold mb-4">Ads Performance</h3>
            <table class="w-full">
                <thead>
                    <tr class="text-left text-gray-500">
                        <th class="pb-4">Data Source</th>
                        <th class="pb-4">Impression</th>
                        <th class="pb-4">Views</th>
                        <th class="pb-4">Share</th>
                        <th class="pb-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="py-4 flex items-center gap-2">
                            <div class="w-8 h-8 bg-blue-500 rounded-full"></div>
                            Facebook
                        </td>
                        <td>700,000.00</td>
                        <td>1,000,000</td>
                        <td>
                            <div class="w-32 bg-orange-100 rounded-full h-2">
                                <div class="bg-orange-500 rounded-full h-2 w-3/4"></div>
                            </div>
                        </td>
                        <td>...</td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-4 flex items-center gap-2">
                            <div class="w-8 h-8 bg-pink-500 rounded-full"></div>
                            Instagram
                        </td>
                        <td>120,000.00</td>
                        <td>2,300,000</td>
                        <td>
                            <div class="w-32 bg-orange-100 rounded-full h-2">
                                <div class="bg-orange-500 rounded-full h-2 w-1/2"></div>
                            </div>
                        </td>
                        <td>...</td>
                    </tr>
                    <tr class="border-t">
                        <td class="py-4 flex items-center gap-2">
                            <div class="w-8 h-8 bg-green-500 rounded-full"></div>
                            Spotify
                        </td>
                        <td>100,000.00</td>
                        <td>10,100,000</td>
                        <td>
                            <div class="w-32 bg-orange-100 rounded-full h-2">
                                <div class="bg-orange-500 rounded-full h-2 w-1/4"></div>
                            </div>
                        </td>
                        <td>...</td>
                    </tr>
                </tbody>
            </table>
            <!-- Pagination -->
            <div class="flex justify-center gap-2 mt-4">
                <button class="px-3 py-1 border rounded">←</button>
                <button class="px-3 py-1 border rounded bg-gray-50">1</button>
                <button class="px-3 py-1 border rounded">2</button>
                <button class="px-3 py-1 border rounded">3</button>
                <button class="px-3 py-1 border rounded">→</button>
            </div>
        </div>
    </div>

    <script>
        // Line Chart
        const lineCtx = document.getElementById('lineChart').getContext('2d');
        new Chart(lineCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Operational',
                    data: [65, 59, 80, 81, 56, 55, 40, 60, 55, 30, 78, 95],
                    borderColor: 'rgb(59, 130, 246)',
                    tension: 0.4
                }, {
                    label: 'Recent',
                    data: [28, 48, 40, 19, 86, 27, 90, 82, 75, 85, 73, 62],
                    borderColor: 'rgb(147, 197, 253)',
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Donut Chart
        const donutCtx = document.getElementById('donutChart').getContext('2d');
        new Chart(donutCtx, {
            type: 'doughnut',
            data: {
                labels: ['Social Media', 'Movie Streaming', 'Music Streaming', 'Wallets', 'Reserved'],
                datasets: [{
                    data: [42.9, 42.9, 42.9, 42.9, 42.9],
                    backgroundColor: [
                        'rgb(59, 130, 246)', // blue-500
                        'rgb(168, 85, 247)', // purple-500
                        'rgb(239, 68, 68)', // red-500
                        'rgb(234, 179, 8)', // yellow-500
                        'rgb(96, 165, 250)' // blue-400
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                cutout: '75%'
            }
        });
    </script>
</div>

</html>
