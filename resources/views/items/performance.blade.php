<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Dashboard</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <!-- Top Row -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <!-- Line Charts Section -->
            <div class="lg:col-span-2 space-y-4">
                <!-- Top Chart -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <div>
                            <h2 class="text-lg font-semibold">Paid channels</h2>
                            <div class="flex gap-8 mt-2">
                                <div>
                                    <div class="text-2xl font-semibold">1.2M</div>
                                    <div class="text-sm text-gray-500">Total users</div>
                                </div>
                                <div>
                                    <div class="text-2xl font-semibold">$894.08K</div>
                                    <div class="text-sm text-gray-500">Total revenue</div>
                                </div>
                            </div>
                        </div>
                        <select class="border rounded-md px-3 py-1 text-sm">
                            <option>Gender/Source</option>
                        </select>
                    </div>
                    <div id="topLineChart" class="h-[200px]"></div>
                    <div class="flex justify-end gap-4 mt-2">
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-orange-500 mr-2"></div>
                            <span class="text-sm text-gray-600">Total revenue</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-blue-500 mr-2"></div>
                            <span class="text-sm text-gray-600">Total users</span>
                        </div>
                    </div>
                </div>

                <!-- Bottom Chart -->
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-semibold">Report</h2>
                        <select class="border rounded-md px-3 py-1 text-sm">
                            <option>Handle with</option>
                        </select>
                    </div>

                    <div id="bottomLineChart" class="h-[200px]"></div>
                    <div class="flex justify-end gap-4 mt-2">
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-blue-500 mr-2"></div>
                            <span class="text-sm text-gray-600">Total revenue</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-3 h-3 rounded-full bg-orange-500 mr-2"></div>
                            <span class="text-sm text-gray-600">Sales return</span>
                        </div>
                    </div>
                    <!-- Bar Chart -->
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold mb-4">Organic Social Channel</h2>
                        <div id="barChart" class="h-[300px]"></div>
                    </div>
                </div>
            </div>


            <!-- Pie Charts Section -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold">Subscribers</h2>
                        <div class="text-sm text-gray-500">Last 2023 - Jan 2023</div>
                    </div>

                    <!-- Total Numbers Row -->
                    <div class="flex gap-4 mb-4 text-sm">
                        <div>
                            <span class="text-gray-600">123,456</span>
                            <span class="text-gray-400 ml-1">Views</span>
                        </div>
                        <div>
                            <span class="text-gray-600">123,456</span>
                            <span class="text-gray-400 ml-1">Views</span>
                        </div>
                        <div>
                            <span class="text-gray-600">123,456</span>
                            <span class="text-gray-400 ml-1">Views</span>
                        </div>
                    </div>

                    <div id="subscribersPie" class="h-[200px]"></div>

                    <!-- Legend Items -->
                    <div class="mt-4 space-y-2 text-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#E34F26] mr-2"></div>
                                <span class="text-gray-600">YouTube</span>
                            </div>
                            <span class="text-gray-600">121,799</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#FF9B26] mr-2"></div>
                                <span class="text-gray-600">Facebook</span>
                            </div>
                            <span class="text-gray-600">64,754</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#FFB98B] mr-2"></div>
                                <span class="text-gray-600">Spotify</span>
                            </div>
                            <span class="text-gray-600">21,047</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#FF5733] mr-2"></div>
                                <span class="text-gray-600">Y</span>
                            </div>
                            <span class="text-gray-600">15,387</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#FFC3A6] mr-2"></div>
                                <span class="text-gray-600">Instagram</span>
                            </div>
                            <span class="text-gray-600">7,806</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold">Traffic Source</h2>
                        <div class="flex items-center">
                            <span class="text-sm text-gray-500">Categories</span>
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </div>

                    <!-- Main donut chart -->
                    <div id="trafficPie" class="h-[200px]"></div>

                    <!-- Legend items -->
                    <div class="mt-4 space-y-2">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#22C55E] mr-2"></div>
                                <span class="text-sm text-gray-600">Organic Search</span>
                            </div>
                            <span class="text-sm text-gray-600">42.5%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#EF4444] mr-2"></div>
                                <span class="text-sm text-gray-600">Direct</span>
                            </div>
                            <span class="text-sm text-gray-600">42.5%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#F59E0B] mr-2"></div>
                                <span class="text-sm text-gray-600">Referral</span>
                            </div>
                            <span class="text-sm text-gray-600">42.5%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#FCD34D] mr-2"></div>
                                <span class="text-sm text-gray-600">Unassigned</span>
                            </div>
                            <span class="text-sm text-gray-600">42.5%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="w-2 h-2 rounded-full bg-[#3B82F6] mr-2"></div>
                                <span class="text-sm text-gray-600">Paid Search</span>
                            </div>
                            <span class="text-sm text-gray-600">42.5%</span>
                        </div>
                    </div>

                    <!-- Bottom progress ring -->
                    <div id="progressRing" class="mt-6 h-[100px]"></div>
                    <div class="flex justify-center gap-8 mt-2 text-sm text-gray-600">
                        <div class="flex items-center">
                            <div class="w-4 h-0.5 bg-orange-500 mr-1"></div>
                            <span>60</span>
                        </div>
                        <div class="flex items-center">
                            <div class="w-4 h-0.5 bg-gray-300 mr-1"></div>
                            <span>40</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Row -->
        <div class="bg-white rounded shadow">
            <div class="p-4">
                <h2 class="text-lg font-medium mb-4">Ads performance</h2>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-blue-100">
                                <th class="border border-blue-200 px-4 py-2 text-left">Report date</th>
                                <th class="border border-blue-200 px-4 py-2 text-left bg-purple-100">Impressions</th>
                                <th class="border border-blue-200 px-4 py-2 text-left bg-purple-50">Click</th>
                                <th class="border border-blue-200 px-4 py-2 text-left bg-blue-50">CTR</th>
                                <th class="border border-blue-200 px-4 py-2 text-left bg-orange-100">Amount spent</th>
                                <th class="border border-blue-200 px-4 py-2 text-left">CPC</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (['Sep 2024', 'Sep 2024', 'Sep 2024', 'Sep 2024', 'Sep 2024', 'Sep 2024', 'Sep 2024'] as $date)
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-blue-200 px-4 py-2">{{ $date }}</td>
                                    <td class="border border-blue-200 px-4 py-2 bg-purple-50">855.7k</td>
                                    <td class="border border-blue-200 px-4 py-2 bg-purple-50">10.1k</td>
                                    <td class="border border-blue-200 px-4 py-2 bg-blue-50">1.17%</td>
                                    <td class="border border-blue-200 px-4 py-2 bg-orange-50">$3,946.5</td>
                                    <td class="border border-blue-200 px-4 py-2">$0.4</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Top Line Chart Configuration
        const topLineChartOptions = {
            series: [{
                name: 'Total revenue',
                data: [200, 250, 200, 300, 250, 400, 300, 250, 300, 350, 200, 800]
            }, {
                name: 'Total users',
                data: [250, 300, 250, 200, 350, 300, 400, 350, 400, 300, 200, 300]
            }],
            chart: {
                height: 200,
                type: 'line',
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                }
            },
            colors: ['#FF6B6B', '#4ECDC4'],
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            grid: {
                borderColor: '#f1f1f1',
                row: {
                    colors: ['transparent'],
                    opacity: 0.5
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                labels: {
                    style: {
                        colors: '#666',
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: '#666',
                        fontSize: '12px'
                    }
                }
            },
            legend: {
                show: false
            }
        };

        // Bottom Line Chart Configuration
        const bottomLineChartOptions = {
            series: [{
                name: 'Total revenue',
                data: [25, 35, 30, 25, 35, 30, 40, 35, 40, 35, 45, 40]
            }, {
                name: 'Sales return',
                data: [20, 25, 20, 30, 25, 35, 30, 25, 30, 25, 35, 20]
            }],
            chart: {
                height: 200,
                type: 'line',
                toolbar: {
                    show: false
                },
                zoom: {
                    enabled: false
                }
            },
            colors: ['#4ECDC4', '#FF6B6B'],
            stroke: {
                width: 2,
                curve: 'smooth'
            },
            grid: {
                borderColor: '#f1f1f1',
                row: {
                    colors: ['transparent'],
                    opacity: 0.5
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                labels: {
                    style: {
                        colors: '#666',
                        fontSize: '12px'
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: '#666',
                        fontSize: '12px'
                    }
                }
            },
            legend: {
                show: false
            },
            annotations: {
                points: [{
                    x: 'Aug',
                    y: 35,
                    marker: {
                        size: 0
                    },
                    label: {
                        borderColor: '#00796b',
                        style: {
                            color: '#fff',
                            background: '#00796b'
                        },
                        text: '$42,500'
                    }
                }]
            }
        };

        // Initialize Charts
        const topLineChart = new ApexCharts(document.querySelector("#topLineChart"), topLineChartOptions);
        const bottomLineChart = new ApexCharts(document.querySelector("#bottomLineChart"), bottomLineChartOptions);

        topLineChart.render();
        bottomLineChart.render();

        // Line Chart
        const lineChartOptions = {
            series: [{
                name: 'Series 1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'Series 2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
            chart: {
                height: 300,
                type: 'line',
                toolbar: {
                    show: false
                }
            },
            colors: ['#FF6B6B', '#4ECDC4'],
            stroke: {
                curve: 'smooth',
                width: 2
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
            }
        };

        // Area Chart
        const areaChartOptions = {
            series: [{
                name: 'Series 1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }],
            chart: {
                height: 300,
                type: 'area',
                toolbar: {
                    show: false
                }
            },
            colors: ['#6C63FF'],
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.3,
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul']
            }
        };

        // Subscribers Pie Chart
        const subscribersPieOptions = {
            series: [121799, 64754, 21047, 15387, 7806],
            chart: {
                type: 'pie',
                height: 200,
                toolbar: {
                    show: false
                }
            },
            colors: ['#E34F26', '#FF9B26', '#FFB98B', '#FF5733', '#FFC3A6'],
            labels: ['YouTube', 'Facebook', 'Spotify', 'Y', 'Instagram'],
            legend: {
                show: false
            },
            stroke: {
                width: 0
            },
            dataLabels: {
                enabled: false
            }
        };

        // Traffic Source Donut Chart Configuration
        const trafficPieOptions = {
            series: [42.5, 42.5, 42.5, 42.5, 42.5],
            chart: {
                type: 'donut',
                height: 200,
                toolbar: {
                    show: false
                }
            },
            colors: ['#22C55E', '#EF4444', '#F59E0B', '#FCD34D', '#3B82F6'],
            labels: ['Organic Search', 'Direct', 'Referral', 'Unassigned', 'Paid Search'],
            legend: {
                show: false
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '75%',
                        labels: {
                            show: true,
                            name: {
                                show: false
                            },
                            value: {
                                show: true,
                                fontSize: '22px',
                                fontWeight: 600,
                                offsetY: 8
                            },
                            total: {
                                show: true,
                                label: 'Total',
                                formatter: function(w) {
                                    return '72';
                                }
                            }
                        }
                    }
                }
            },
            dataLabels: {
                enabled: false
            }
        };

        // Bottom Progress Ring Configuration
        const progressRingOptions = {
            series: [60],
            chart: {
                height: 100,
                type: 'radialBar',
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                radialBar: {
                    startAngle: -135,
                    endAngle: 135,
                    hollow: {
                        size: '72%'
                    },
                    track: {
                        background: '#f2f2f2',
                        strokeWidth: '100%',
                        margin: 0
                    },
                    dataLabels: {
                        name: {
                            show: false
                        },
                        value: {
                            show: true,
                            color: '#333',
                            fontSize: '16px',
                            fontWeight: '500',
                            offsetY: 10,
                            formatter: function() {
                                return '3,280';
                            }
                        }
                    }
                }
            },
            stroke: {
                lineCap: 'round'
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    type: 'horizontal',
                    shadeIntensity: 0.5,
                    gradientToColors: ['#FF6B6B'],
                    inverseColors: true,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100]
                }
            },
            colors: ['#FF6B6B']
        };



        // Bar Chart
        const barChartOptions = {
            series: [{
                name: 'Views',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
            }],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: {
                    show: false
                }
            },
            colors: ['#FF6B6B'],
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: false,
                }
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
            }
        };

        // Initialize Charts
        const lineChart = new ApexCharts(document.querySelector("#lineChart"), lineChartOptions);
        const areaChart = new ApexCharts(document.querySelector("#areaChart"), areaChartOptions);
        const subscribersPie = new ApexCharts(document.querySelector("#subscribersPie"), subscribersPieOptions);

        const barChart = new ApexCharts(document.querySelector("#barChart"), barChartOptions);
        // Initialize Charts
        const trafficPie = new ApexCharts(document.querySelector("#trafficPie"), trafficPieOptions);
        const progressRing = new ApexCharts(document.querySelector("#progressRing"), progressRingOptions);


        progressRing.render();

        lineChart.render();
        areaChart.render();
        subscribersPie.render();
        trafficPie.render();
        barChart.render();
    </script>
</body>

</html>
