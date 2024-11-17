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
</head>

<body>
<div class="flex flex-col h-screen">

@include('mcomp.nav-bar')

<!-- Main Content Wrapper -->
<div class="flex flex-1">
@include('mcomp.sidebar')

  <main class="flex-1 p-8">
  <div class="container mx-auto p-5">
        <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Recruitment Overview</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <!-- Key Metrics Cards -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">Total Applications</h2>
                <p class="text-3xl font-bold text-blue-600"></p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">Interviews Scheduled</h2>
                <p class="text-3xl font-bold text-blue-600"></p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2">Hires Made</h2>
                <p class="text-3xl font-bold text-blue-600"></p>
            </div>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-xl font-semibold mb-4">Applications Overview</h2>
            <canvas id="applicationsChart" width="400" height="200"></canvas>
        </div>

        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Recent Applications</h2>
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border px-4 py-2">Applicant Name</th>
                        <th class="border px-4 py-2">Position</th>
                        <th class="border px-4 py-2">Status</th>
                        <th class="border px-4 py-2">Date Applied</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Application Rows -->
                    <tr class="border-b hover:bg-gray-100">
                        <td class="border px-4 py-2">John Doe</td>
                        <td class="border px-4 py-2">Software Engineer</td>
                        <td class="border px-4 py-2">Interview Scheduled</td>
                        <td class="border px-4 py-2">2023-10-01</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="border px-4 py-2">Jane Smith</td>
                        <td class="border px-4 py-2">Product Manager</td>
                        <td class="border px-4 py-2">Application Reviewed</td>
                        <td class="border px-4 py-2">2023-09-28</td>
                    </tr>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="border px-4 py-2">Alice Johnson</td>
                        <td class="border px-4 py-2">UX Designer</td>
                        <td class="border px-4 py-2">Hired</td>
                        <td class="border px-4 py-2">2023-09-25</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    
  
</main>

<script>
    
  function toggleDropdown() {
    const dropdown = document.getElementById("dropdownMenu");
    dropdown.classList.toggle("hidden");

  }
  
  function setActiveLink(link) {
    // Remove 'active' class from all links
    document.querySelectorAll('.sidebar-link').forEach(item => {
      item.classList.remove('active');
    });
    // Add 'active' class to the clicked link
    link.classList.add('active');
  }

  // for navbar and sidebar
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
