
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    @vite('resources/css/sidebar.css')
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/login.css">
  <title>Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
<div class="bg-white shadow-lg rounded-lg p-6 mb-8">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Application Pipeline</h2>

    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Manager Dashboard</h2>

    <!-- Pipeline Stages -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
        <div class="p-4 bg-blue-100 rounded-lg text-center">
            <h3 class="text-lg font-bold text-blue-600">New Applications</h3>
            <p class="text-3xl font-semibold text-blue-700">{{ $newApplicationsCount }}</p>
        </div>
        <div class="p-4 bg-yellow-100 rounded-lg text-center">
            <h3 class="text-lg font-bold text-yellow-600">Screening</h3>
            <p class="text-3xl font-semibold text-yellow-700">{{ $screeningCount }}</p>
        </div>
        <div class="p-4 bg-green-100 rounded-lg text-center">
            <h3 class="text-lg font-bold text-green-600">Interview</h3>
            <p class="text-3xl font-semibold text-green-700">{{ $interviewCount }}</p>
        </div>
        <div class="p-4 bg-purple-100 rounded-lg text-center">
            <h3 class="text-lg font-bold text-purple-600">Offer</h3>
            <p class="text-3xl font-semibold text-purple-700">{{ $offerCount }}</p>
        </div>
        <div class="p-4 bg-gray-100 rounded-lg text-center">
            <h3 class="text-lg font-bold text-gray-600">Hired</h3>
            <p class="text-3xl font-semibold text-gray-700">{{ $hiredCount }}</p>
        </div>
    </div>

    <!-- Progress Chart (ApexCharts) -->
    <div class="mt-6">
        <div id="applicationChart" class="w-full h-64"></div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var options = {
            series: [{
                name: 'Applications',
                data: [{{ $newApplicationsCount }}, {{ $screeningCount }}, {{ $interviewCount }}, {{ $offerCount }}, {{ $hiredCount }}]
            }],
            chart: {
                type: 'bar',
                height: 300,
            },
            plotOptions: {
                bar: {
                    distributed: true,
                    borderRadius: 4,
                    horizontal: false,
                }
            },
            colors: ['#60A5FA', '#FBBF24', '#34D399', '#A78BFA', '#9CA3AF'],
            xaxis: {
                categories: ['New', 'Screening', 'Interview', 'Offer', 'Hired'],
                title: {
                    text: 'Stages'
                }
            },
            yaxis: {
                title: {
                    text: 'Number of Applicants'
                }
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + " Applicants"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#applicationChart"), options);
        chart.render();
    });
</script>
</body>

</html>
