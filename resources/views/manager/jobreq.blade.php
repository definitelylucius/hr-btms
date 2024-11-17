
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
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Create Job Requisition</h2>

                <!-- Success Message -->
                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Form -->
                <form method="POST" action="{{ route('job-requisitions.store') }}">
                    @csrf

                    <!-- Job Title -->
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                        <input type="text" name="title" id="title" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400" placeholder="Enter the job title">
                    </div>

                    <!-- Department -->
                    <div class="mb-4">
                        <label for="department" class="block text-sm font-medium text-gray-700">Department</label>
                        <input type="text" name="department" id="department" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400" placeholder="Enter the department">
                    </div>

                    <!-- Salary -->
                    <!-- Minimum Salary -->
                    <div class="mb-4">
    <label for="salary_min" class="block text-sm font-medium text-gray-700">Minimum Salary</label>
    <div class="flex items-center">
        <span class="text-gray-700 mr-2">PHP</span>
        <input type="number" name="salary_min" id="salary_min" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400" placeholder="Enter the minimum salary" step="0.01">
    </div>
</div>

    <!-- Maximum Salary -->
    <div class="mb-4">
    <label for="salary_max" class="block text-sm font-medium text-gray-700">Maximum Salary</label>
    <div class="flex items-center">
        <span class="text-gray-700 mr-2">PHP</span>
        <input type="number" name="salary_max" id="salary_max" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400" placeholder="Enter the maximum salary" step="0.01">
    </div>
</div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Job Description</label>
                        <textarea name="description" id="description" rows="5" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400" placeholder="Enter a detailed job description"></textarea>
                    </div>

                    <!-- Vacancies -->
                    <div class="mb-4">
                        <label for="vacancies" class="block text-sm font-medium text-gray- 700">Number of Vacancies</label>
                        <input type="number" name="vacancies" id="vacancies" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200 focus:border-blue-400" placeholder="Enter the number of vacancies">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-right">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring focus:ring-blue-300">Create Job Requisition</button>
                    </div>
                </form>
            </div>

            <!-- Job Requisitions Table -->
            <div class="mt-8 bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">New Job Requisitions</h2>

                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr>
                        <th class="border-b px-4 py-2 text-gray-600 font-medium">Job Title</th>
                        <th class="border-b px-4 py-2 text-gray-600 font-medium">Department</th>
                        <th class="border-b px-4 py-2 text-gray-600 font-medium">Vacancies</th>
                        <th class="border-b px-4 py-2 text-gray-600 font-medium">Minimum Salary</th>
                        <th class="border-b px-4 py-2 text-gray-600 font-medium">Maximum Salary</th>
                        <th class="border-b px-4 py-2 text-gray-600 font-medium">Created At</th>     
                    </tr>
                    </thead>
                    <tbody>
                    @if($jobRequisitions->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center px-4 py-2 text-gray-500">No job requisitions found.</td>
                        </tr>
                    @else
                        @foreach($jobRequisitions as $job)
                            <tr>
                            <td class="border-b px-4 py-2">{{ $job->title }}</td>
                    <td class="border-b px-4 py-2">{{ $job->department }}</td>
                    <td class="border-b px-4 py-2">{{ $job->vacancies }}</td>
                    <!-- Format the salary values with PHP prefix and comma -->
                    <td class="border-b px-4 py-2">PHP {{ number_format($job->salary_min, 2) }}</td>
                    <td class="border-b px-4 py-2">PHP {{ number_format($job->salary_max, 2) }}</td>
                    <td class="border-b px-4 py-2">{{ $job->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>


<script>
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




