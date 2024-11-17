<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruiter Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Main Container -->
    <div class="flex h-screen">
    @include('rcomponent.nav-bar') <!-- Sidebar inclusion -->
    
   

   

    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col">
        <!-- Navbar -->
        @include('rcomponent.sidebar')

        <!-- Dashboard Content -->
        <div class="p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Recruiter Dashboard</h1>

            <!-- Applicant Pipeline Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="font-bold text-lg">New Applications</h2>
                    <p class="text-4xl font-bold text-blue-500">{{ $newApplicationsCount }}</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="font-bold text-lg">Interview Scheduled</h2>
                    <p class="text-4xl font-bold text-green-500">{{ $scheduledInterviewsCount }}</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="font-bold text-lg">Offers Extended</h2>
                    <p class="text-4xl font-bold text-indigo-500">{{ $offersExtendedCount }}</p>
                </div>
            </div>

            <!-- Applicant List with Search and Filter -->
            <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="font-bold text-lg">Applicant List</h2>
                    <div class="flex space-x-2">
                        <input type="text" placeholder="Search by name" class="p-2 border rounded">
                        <select class="p-2 border rounded">
                            <option>Filter by Status</option>
                            <option value="pending">Pending</option>
                            <option value="interview">Interview Scheduled</option>
                            <option value="offer">Offer Extended</option>
                        </select>
                    </div>
                </div>

                <!-- Table of Applicants -->
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-gray-600">
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Position</th>
                            <th class="py-2 px-4 border-b">Status</th>
                            <th class="py-2 px-4 border-b">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applicants as $applicant)
                        <tr>
                            <td class="py-2 px-4 border-b">{{ $applicant->name }}</td>
                            <td class="py-2 px-4 border-b">{{ $applicant->position }}</td>
                            <td class="py-2 px-4 border-b">{{ ucfirst($applicant->status) }}</td>
                            <td class="py-2 px-4 border-b">
                                <button class="text-blue-500" onclick="openInterviewModal({{ $applicant->id }})">Schedule Interview</button>
                                <button class="text-green-500 ml-4">View Profile</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Interview Modal -->
<div id="interviewModal" class="hidden fixed inset-0 bg-black bg-opacity-50  justify-center items-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
        <h2 class="text-xl font-bold mb-4">Schedule Interview</h2>
        <form>
            <label class="block mb-2">Date</label>
            <input type="date" class="w-full p-2 border rounded mb-4">
            <label class="block mb-2">Time</label>
            <input type="time" class="w-full p-2 border rounded mb-4">
            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded" onclick="scheduleInterview()">Schedule</button>
            <button type="button" class="ml-4 text-gray-500" onclick="closeInterviewModal()">Cancel</button>
        </form>
    </div>
</div>

<script>
    function openInterviewModal(applicantId) {
        document.getElementById("interviewModal").classList.remove("hidden");
    }
    function closeInterviewModal() {
        document.getElementById("interviewModal").classList.add("hidden");
    }
</script>

</body>
</html>
