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
    

  
</main>

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
