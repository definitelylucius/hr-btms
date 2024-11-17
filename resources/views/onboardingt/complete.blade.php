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


      <main class="mx-4 mb-4 mt-24 md:mt-0 flex flex-col gap-4">
      <div class="max-w-3xl mx-auto my-10 p-6 bg-white shadow-lg rounded-lg">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Complete Assignments</h2>

    <!-- Introduction to Company Values -->
    <div class="border rounded-lg p-4 mb-4">
        <h3 class="text-lg font-semibold text-gray-700 mb-2">Introduction to Company Values</h3>
        <p class="text-sm text-gray-500 mb-4">Familiarize yourself with our company’s core values and culture. This assignment includes a brief overview to help align your work with our mission.</p>
        <div class="flex items-center">
            <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 mr-2">View</button>
            <button class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 mr-2">Mark as Complete</button>
            <span class="text-sm text-gray-500">Status: Incomplete</span>
        </div>
    </div>

    <!-- Compliance Training -->
    <div class="border rounded-lg p-4 mb-4">
        <h3 class="text-lg font-semibold text-gray-700 mb-2">Compliance Training</h3>
        <p class="text-sm text-gray-500 mb-4">Complete the mandatory compliance training to understand regulations and ethical standards in our industry. This training ensures a safe and legal workplace environment.</p>
        <div class="flex items-center">
            <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 mr-2">View</button>
            <button class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 mr-2">Mark as Complete</button>
            <span class="text-sm text-gray-500">Status: Incomplete</span>
        </div>
    </div>

    <!-- Safety Protocol Overview -->
    <div class="border rounded-lg p-4 mb-4">
        <h3 class="text-lg font-semibold text-gray-700 mb-2">Safety Protocol Overview</h3>
        <p class="text-sm text-gray-500 mb-4">Review our workplace safety protocols to ensure your well-being and that of your colleagues. This assignment includes emergency procedures and general safety guidelines.</p>
        <div class="flex items-center">
            <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 mr-2">View</button>
            <button class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 mr-2">Mark as Complete</button>
            <span class="text-sm text-gray-500">Status: Incomplete</span>
        </div>
    </div>

    <!-- IT and Security Best Practices -->
    <div class="border rounded-lg p-4 mb-4">
        <h3 class="text-lg font-semibold text-gray-700 mb-2">IT and Security Best Practices</h3>
        <p class="text-sm text-gray-500 mb-4">Learn about IT policies and security best practices to protect company data and maintain system integrity. Completing this assignment is essential for safeguarding information.</p>
        <div class="flex items-center">
            <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 mr-2">View</button>
            <button class="px-4 py-2 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 mr-2">Mark as Complete</button>
            <span class="text-sm text-gray-500">Status: Incomplete</span>
        </div>
    </div>

    <!-- Submit All Assignments Button -->
    <div class="flex justify-center mt-6">
        <button class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Submit All Assignments
        </button>
    </div>
</div>


      
      </main>
    </div>

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

</script>
</body>

</html>