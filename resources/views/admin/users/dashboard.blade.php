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

    
    <div class="flex flex-1">
    @include('admin.admincomp.side-bar')
        

        <!-- Main Dashboard Content -->
        <main class="flex-1 p-4 overflow-y-auto bg-[#fbfbfe]">
           

<script>
   

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