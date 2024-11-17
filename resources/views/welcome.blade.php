<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/jobp.css')

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/login.css">
    <title>NexFleetDynamics</title>

</head>

<body>

<header x-data="{ isOpen: false }" class="bg-white shadow-md fixed w-full z-50">
        <nav class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <a href="{{ route('welcome') }}" class="text-[#00446b] text-xl font-bold md:text-2xl hover:text-gray-700">
                        NexFleetDynamics
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('welcome') }}" class="navbar-item text-[#00446b] font-bold hover:text-#1F2936">Home</a>
                    <a href="#about" class="navbar-item text-[#00446b] font-bold hover:text-#1F2936">About</a>
                    <a href="#services" class="navbar-item text-[#00446b] font-bold hover:text-#1F2936">Jobs</a>
                    <a href="#contact" class="navbar-item text-[#00446b] font-bold hover:text-#1F2936">Contact</a>
                    <a href="{{ route('login') }}"
                        class="btn-primary bg-[#00446b] text-white px-4 py-2 rounded-md">Login</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button @click="isOpen = !isOpen" class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:#1F2936"
                            x-show="!isOpen"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6 text-gray-500 hover:#1F29366"
                            x-show="isOpen"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div x-show="isOpen" class="md:hidden mt-3">
          
                <a href="#home"
                    class="block py-2 px-4 text-sm hover:bg-indigo-600 hover:text-white rounded transition duration-200">Home</a>
                <a href="#about"
                    class="block py-2 px-4 text-sm hover:bg-indigo-600 hover:text-white rounded transition duration-200">About</a>
                <a href="#services"
                    class="block py-2 px-4 text-sm hover:bg-indigo-600 hover:text-white rounded transition duration-200">Jobs</a>
                <a href="#contact"
                    class="block py-2 px-4 text-sm hover:bg-indigo-600 hover:text-white rounded transition duration-200">Contact</a>
                <a href="{{ route('login') }}"
                    class="block py-2 px-4 text-sm bg-indigo-600 text-white rounded mt-2">Login</a>
            </div>
        </nav>
    </header>

    

    <div class="relative isolate px-6 pt-14 lg:px-8">
    <!-- Top Gradient Background Shape -->
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-50vw)] aspect-[1155/678] w-[80vw] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:w-[100vw]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
        <div class="hidden sm:flex sm:justify-center sm:mb-8"></div>
        <div class="text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">
                We're Hiring: Join Our Team Today!
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">
                Looking for a new opportunity? We're recruiting drivers, fleet managers, and transportation staff to join our growing team. Apply now and drive your career forward with us.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#" class="rounded-md bg-[#00446b] px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-[#1F2936] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:bg-[#1F2936]">
                    Get started
                </a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
                    Learn more <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
    <section class="bg-gray-50 py-16">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">How It Works</h2>
            <p class="text-lg text-gray-600 mt-4">Follow these simple steps to get started with us</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- First Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <div class="mx-auto bg-yellow-100 p-4 w-16 h-16 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-8 w-8 text-yellow-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mt-6">Create Account</h3>
                <p class="text-gray-600 mt-4">Sign up and create your account to get started on our platform.</p>
                <a href="#" class="text-[#00446b] font-semibold mt-4 inline-block">Read More</a>
            </div>

            <!-- Second Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <div class="mx-auto bg-purple-100 p-4 w-16 h-16 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-8 w-8 text-purple-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6h8m0 0V4m0 2v6m0 0h-8M4 4h4m0 0v6m0 0H4m0 0v6m0 0h4" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mt-6">Search Job</h3>
                <p class="text-gray-600 mt-4">Find the perfect job that fits your skills and passion.</p>
                <a href="#" class="text-[#00446b] font-semibold mt-4 inline-block">Read More</a>
            </div>

            <!-- Third Card -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <div class="mx-auto bg-blue-100 p-4 w-16 h-16 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-8 w-8 text-blue-500">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11v6m-6 0h12m-6-6a3 3 0 100-6 3 3 0 000 6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mt-6">Submit Resume</h3>
                <p class="text-gray-600 mt-4">Upload your resume and start applying to your desired jobs.</p>
                <a href="#" class="text-[#00446b] font-semibold mt-4 inline-block">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- Separator between sections -->
<div class="bg-white py-8"></div>

<section class="bg-white p-6 rounded-lg shadow-lg">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6 text-center">Job Listing</h1>

        <div class="flex justify-center space-x-4 mb-8">
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md">Featured</button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md">Full Time</button>
            <button class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md">Part Time</button>
        </div>

        <!-- Job Listing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @if($jobRequisitions->isEmpty())
                    <div class="text-center px-4 py-2 text-gray-500">No job requisitions found.</div>
                @else
                @foreach($jobRequisitions as $job)
                        <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                            <h2 class="text-lg font-semibold">{{ $job->title }}</h2>
                            <p class="text-sm text-gray-500">{{ $job->department }}</p>
                            <p class="text-gray-400 font-bold mt-4">PHP {{ number_format($job->salary_min, 2) }} - PHP {{ number_format($job->salary_max, 2) }}</p>
                            <div class="text-right mt-6">
                                <button class="bg-[#00446b] text-white px-4 py-2 rounded-md">Apply Now</button>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

        
        <div class="bg-white py-8"></div>

        <footer class="bg-gray-800 py-12 text-white">
    <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <!-- About Us -->
        <div>
            <h3 class="text-lg font-semibold mb-4">About Us</h3>
            <p class="text-sm text-gray-400">
                We are committed to providing quality transportation services. Join our team and drive your career forward with us.
            </p>
        </div>

        <!-- Quick Links -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
            <ul>
                <li><a href="#" class="text-sm text-gray-400 hover:text-white">Home</a></li>
                <li><a href="#" class="text-sm text-gray-400 hover:text-white">About</a></li>
                <li><a href="#" class="text-sm text-gray-400 hover:text-white">Jobs</a></li>
                <li><a href="#" class="text-sm text-gray-400 hover:text-white">Contact</a></li>
            </ul>
        </div>

        <!-- Social Media -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Follow Us</h3>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>

        <!-- Contact Us -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
            <ul>
                <li class="text-sm text-gray-400">Phone: (123) 456-7890</li>
                <li class="text-sm text-gray-400">Email: info@example.com</li>
                <li class="text-sm text-gray-400">Address: 123567987 Street Name, City, Country</li>
            </ul>
        </div>
    </div>

    <div class="mt-8 border-t border-gray-700 pt-6 text-center text-gray-500">
        <p>&copy; 2024 Your Company Name. All Rights Reserved.</p>
    </div>
</footer>



</body>
<script src="//unpkg.com/alpinejs" defer></script>

</html>
