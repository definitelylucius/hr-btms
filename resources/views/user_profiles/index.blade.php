<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    @vite('resources/css/modal.css')
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/login.css">
    <title>User Profiles</title>
</head>

<body class="bg-gray-100">
<div class="container mx-auto p-5">
        <h1 class="text-3xl font-bold mb-5 text-gray-800 text-center">User  Management Dashboard</h1>

        <div class="flex justify-center space-x-4 mb-5">
            <button id="createAccountBtn" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition" onclick="openCreateAccountModal()">
                Create New Account
            </button>
            <button id="addRoleBtn" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition" onclick="openAddRoleModal()">
                Add New Role
            </button>
        </div>

        <!-- User List Section -->
        <div class="overflow-x-auto rounded-lg shadow-md">
            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border px-4 py-2 text-left">User  ID</th>
                        <th class="border px-4 py-2 text-left">Name</th>
                        <th class="border px-4 py-2 text-left">Email</th>
                        <th class="border px-4 py-2 text-left">Role</th>
                        <th class="border px-4 py-2 text-left">Status</th>
                        <th class="border px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                    <!-- Dynamic user rows will be inserted here -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for Creating New Account -->
    <div id="createAccountModal" class="modal hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="modal-content bg-white rounded-lg p-6 w-11/12 md:w-1/3">
            <span class="close cursor-pointer text-gray-600 float-right" onclick="closeCreateAccountModal()">&times;</span>
            <h2 class="text-xl font-semibold mb-4">Create New Account</h2>
            <form id="createAccountForm">
                <div class="mb-4">
                    <label for="newAccountName" class="block text-gray-700">Name:</label>
                    <input type="text" id="newAccountName" class="border border-gray-300 rounded p-2 w-full" required />
                </div>
                <div class="mb-4">
                    <label for="newAccountEmail" class="block text-gray-700">Email:</label>
                    <input type="email" id="newAccountEmail" class="border border-gray-300 rounded p-2 w-full" required />
                </div>
                <div class="mb-4">
                    <label for="newAccountRole" class="block text-gray-700">Role:</label>
                    <select id="newAccountRole" class="border border-gray-300 rounded p-2 w-full" required>
                        <option value="">Select Role</option>
                        <!-- Dynamic roles will be populated here -->
                    </select>
                </div>
                <button id="createAccountBtn" type="button" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition" onclick="openCreateAccountModal()">
        Create New Account
    </button>
            </form>
        </div>
    </div>

    <!-- Modal for Adding New Role -->
    <div id="addRoleModal" class="modal hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="modal-content bg-white rounded-lg p-6 w-11/12 md:w-1/3">
            <span class="close cursor -pointer text-gray-600 float-right" onclick="closeAddRoleModal()">&times;</span>
            <h2 class="text-xl font-semibold mb-4">Add New Role</h2>
            <form id="addRoleForm">
                <div class="mb-4">
                    <label for="newRoleName" class="block text-gray-700">Role Name:</label>
                    <input type="text" id="newRoleName" class="border border-gray-300 rounded p-2 w-full" required />
                </div>
                <button id="addRoleBtn" type="button" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition" onclick="openAddRoleModal()">
        Add New Role
    </button>
            </form>
        </div>
    </div>