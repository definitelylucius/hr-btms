<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  @vite('resources/css/sidebar.css')
  <title>Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body class="bg-[#fbfbfe]">

<div class="flex flex-col h-screen">

    @include('mcomp.nav-bar')

    <!-- Main Content Wrapper -->
    <div class="flex flex-1">
    @include('mcomp.sidebar')
        

        <!-- Main Dashboard Content -->
        <main class="flex-1 p-4 overflow-y-auto bg-[#fbfbfe]">
            <div class="container mx-auto">
                <h1 class="text-3xl font-bold text-center mb-6">Welcome, {{ Auth::user()->name }}!</h1>

                <!-- Dashboard Widgets -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Job Requisitions Overview Widget -->
                    <div class="bg-white shadow-lg rounded-lg p-6 flex items-center">
                        <div class="flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5 -3l2 2 4-4M2 12l2 2 4-4" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h2 class="text-2xl font-semibold mb-2">Job Requisitions Overview</h2>
                            <p class="text-lg text-gray-600">Open Job Requisitions:</p>
                            <p class="font-bold text-3xl text-blue-600">{{ $openJobsCount }}</p>
                            <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                View Details
                            </button>
                        </div>
                    </div>
                    
                    <!-- Chart Widget -->
                    <div class="bg-white shadow-lg rounded-lg p-6">
                        <div id="chart" class="w-full h-full"></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    var options = {
        series: [{
            name: 'Open Jobs',
            data: [{{ $openJobsCount }}, {{ $openJobsCount }}, {{ $openJobsCount }}, {{ $openJobsCount }}, {{ $openJobsCount }}, {{ $openJobsCount }}, {{ $openJobsCount }}]
        }],
        chart: {
            height: '100%',
            type: 'area'
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();

    function toggleSettingsDropdown() {
        const settingsDropdown = document.getElementById("settingsDropdown");
        settingsDropdown.classList.toggle("hidden");
    }

    function setActiveLink(link) {
    // Remove 'active' class from all links
    document.querySelectorAll('.sidebar-link').forEach(item => {
      item.classList.remove('active');
    });
    // Add 'active' class to the clicked link
    link.classList.add('active');
  }
</script>

  </body>

</html>