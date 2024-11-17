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
  <div class="flex h-screen bg-[#fbfbfe]">
   @include('components.side-bar')
    <div class='flex flex-col w-full h-screen overflow-y-scroll'>
    <nav
    class='md:sticky block md:w-auto top-4 z-10 bg-white-10/50 backdrop-blur-sm border border-gray-300 rounded-md m-4'>
    <div class="flex w-full">
      <div class="-me-2 flex items-center sm:hidden">
        <button
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
        </button>
      </div>
      <div class="relative flex justify-between w-full">
        <div class="mx-4 my-4 font-medium text-3xl">Dashboard</div>
        
        <!-- Dropdown Button -->
        <div class="relative">
          <button type="button" onclick="toggleDropdown()"
            class="inline-flex items-center px-3 py-2 font-medium transition ease-in-out duration-150">
            {{ Auth::user()->name }}
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
              class="icon icon-tabler icons-tabler-filled icon-tabler-caret-down">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M18 9c.852 0 1.297 .986 .783 1.623l-.076 .084l-6 6a1 1 0 0 1 -1.32 .083l-.094 -.083l-6 -6l-.083 -.094l-.054 -.077l-.054 -.096l-.017 -.036l-.027 -.067l-.032 -.108l-.01 -.053l-.01 -.06l-.004 -.057v-.118l.005 -.058l.009 -.06l.01 -.052l.032 -.108l.027 -.067l.07 -.132l.065 -.09l.073 -.081l.094 -.083l.077 -.054l.096 -.054l.036 -.017l.067 -.027l.108 -.032l.053 -.01l.06 -.01l.057 -.004l12.059 -.002z" />
            </svg>
          </button>

          <!-- Dropdown Menu -->
          
          <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded-md shadow-lg">
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">{{ __('Profile') }}</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Settings</a>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <main class="flex-1 p-8">
  <section id="upload" class="mb-8">
    <h1 class="text-3xl font-bold mb-6">Onboarding Progress</h1>

    <!-- Progress Bar -->
    <div class="bg-gray-200 rounded-full h-6 w-full mb-6">
      <div id="progress-bar" class="bg-green-500 h-6 rounded-full" style="width: 0%;"></div>
    </div>
    <p class="text-gray-600 mb-6">Upload Progress: <span id="progress-percentage" class="font-semibold">0%</span></p>

    
  </section>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Assignment 1 Preview -->
    <div class="bg-white shadow-lg rounded-lg p-4">
        <h2 class="text-xl font-semibold text-gray-700 mb-2">Introduction to Company Values</h2>
        <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none" onclick="openAssignment(1)">View</button>
    </div>

    <!-- Assignment 2 Preview -->
    <div class="bg-white shadow-lg rounded-lg p-4">
        <h2 class="text-xl font-semibold text-gray-700 mb-2">Compliance Training</h2>
        <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none" onclick="openAssignment(2)">View</button>
    </div>

    <!-- Assignment 3 Preview -->
    <div class="bg-white shadow-lg rounded-lg p-4">
        <h2 class="text-xl font-semibold text-gray-700 mb-2">Safety Protocol Overview</h2>
        <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none" onclick="openAssignment(3)">View</button>
    </div>

    <!-- Assignment 4 Preview -->
    <div class="bg-white shadow-lg rounded-lg p-4">
        <h2 class="text-xl font-semibold text-gray-700 mb-2">IT and Security Best Practices</h2>
        <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none" onclick="openAssignment(4)">View</button>
    </div>
</div>

<!-- Assignment Details Modal (Hidden by default) -->
<div id="assignmentModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center hidden" style="z-index: 1000;">
    <div class="bg-white w-3/4 max-w-lg p-6 rounded-lg shadow-lg overflow-y-auto max-h-screen">
        <h2 id="assignmentTitle" class="text-2xl font-semibold mb-4 text-gray-800">Assignment Title</h2>
        <div id="assignmentContent" class="text-gray-600 mb-4" onscroll="checkScrollEnd(this)">
            <!-- Assignment Content will be dynamically inserted here -->
        </div>
        <button id="completeButton" class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 focus:outline-none hidden" onclick="markAsComplete()">Mark as Complete</button>
        <button class="px-4 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 focus:outline-none mt-4" onclick="closeAssignment()">Close</button>
    </div>
</div>
</main>
<div class="flex h-screen bg-[#fbfbfe]">
@include('onboardingt.uploadd')
</div>

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
    const totalAssignments = 4; // Total number of assignments
    let completedAssignments = 0; // Track completed assignments

    function openAssignment(assignmentId) {
        // Show the modal
        document.getElementById('assignmentModal').classList.remove('hidden');

        // Fetch the assignment content from the URL
        let url = `/assignments/${assignmentId}`;
        fetch(url)
            .then(response => response.text())
            .then(html => {
                document.getElementById('assignmentContent').innerHTML = html;
                let assignmentTitle = '';
                switch (assignmentId) {
                    case 1:
                        assignmentTitle = 'Introduction to Company Values';
                        break;
                    case 2:
                        assignmentTitle = 'Compliance Training';
                        break;
                    case 3:
                        assignmentTitle = 'Safety Protocol Overview';
                        break;
                    case 4:
                        assignmentTitle = 'IT and Security Best Practices';
                        break;
                }
                document.getElementById('assignmentTitle').innerText = assignmentTitle;
                document.getElementById('completeButton').classList.remove('hidden');
            });
    }

    function closeAssignment() {
        // Hide the modal
        document.getElementById('assignmentModal').classList.add('hidden');
    }

    function markAsComplete() {
        // Mark the assignment as complete
        completedAssignments++;
        updateProgress();
        console.log('Assignment marked as complete!');
    }

    function updateProgress() {
        const progressPercentage = (completedAssignments / totalAssignments) * 100;
        document.getElementById('progress-bar').style.width = progressPercentage + '%';
        document.getElementById('progress-percentage').innerText = Math.round(progressPercentage) + '%';
    }

    function updateOnboardingProgress() {
        // Simulate onboarding progress update
        let currentProgress = 0;
        const totalSteps = 4; // Total number of onboarding steps
        const interval = setInterval(() => {
            if (currentProgress < totalSteps) {
                currentProgress++;
                const progressPercentage = (currentProgress / totalSteps) * 100;
                document.getElementById('onboardingProgressBar').style.width = progressPercentage + '%';
                document.getElementById('onboardingPercentage').innerText = Math.round(progressPercentage) + '%';
            } else {
                clearInterval(interval);
            }
        }, 1000); // Update every second
    }

    function uploadFile() {
    const fileInput = document.getElementById('fileInput');
    const file = fileInput.files[0];
    if (!file) return alert("Please select a file.");

    const formData = new FormData();
    formData.append('file', file);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/upload'); // Laravel route for file upload
    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}'); // For Laravel CSRF protection

    // Track upload progress
    xhr.upload.addEventListener('progress', (event) => {
        if (event.lengthComputable) {
            const progressPercentage = (event.loaded / event.total) * 100;
            document.getElementById('progress-bar').style.width = progressPercentage + '%';
            document.getElementById('progress-percentage').innerText = Math.round(progressPercentage) + '%';
        }
    });

    // On successful upload
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert("File uploaded successfully!");
            document.getElementById('progress-bar').style.width = '100%';
            document.getElementById('progress-percentage').innerText = '100%';
        } else {
            alert("File upload failed.");
        }
    };

    // Send the file
    xhr.send(formData);
}

    
</script>

</body>
</html>