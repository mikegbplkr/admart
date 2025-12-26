<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for the gear icon and sidebar */
        .gear-icon {
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gear-icon:hover {
            transform: rotate(90deg);
        }
         
        .sidebar-transition {
            transition: transform 0.3s ease;
        }

        .close-btn, .close-btn {
            cursor: pointer;
        }

        .settings-sidebar {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }

        .settings-sidebar.open {
            transform: translateX(0);
        }
    </style>
</head>

<body class="bg-gray-100 transition-all duration-300">

    <!-- Sidebar -->
    <div class="flex h-screen">
        <div class="w-64 bg-gray-800 text-white p-5">
            <div class="mb-8 text-xl font-semibold">Advertiser Menu</div>
            <div class="space-y-4">
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-700 rounded">Advertising Contract Management</a>
                <a href="#" class="block px-4 py-2 text-gray-300 hover:bg-blue-700 rounded">Report Management</a>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex-1 p-8">
            <!-- Top Bar -->
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-2xl font-semibold text-gray-800">For detailed inquiries regarding the contract,551-81-02693 or Please contact us at gbpl@admart.kr</h1>
                <div class="flex items-center space-x-4">
                    <input type="text" class="px-4 py-2 border border-gray-300 rounded" placeholder="Search..." />
                    <div class="flex items-center space-x-2">
                        <span class="text-gray-600">suarezmike</span>
                        <div class="relative">
                               <!-- Gear Icon for Settings -->
                                <div class=" p-2 bg-gray-800 text-white rounded-full shadow-lg gear-icon" id="gear-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>
                            <!-- <button class="text-gray-600 hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5.121 5.121a3 3 0 010 4.242l4.242 4.242a3 3 0 014.242 0l4.243-4.242a3 3 0 010-4.242l-4.242-4.242a3 3 0 00-4.242 0L5.121 5.121z" />
                                </svg>
                            </button> -->
                            <!-- Dropdown Menu -->
                            <div class="dropdown-content absolute hidden bg-white text-black border shadow-md mt-1 w-32">
                                <a href="management.php" class="block px-4 py-2">Management</a>
                                <a href="logout.php" class="block px-4 py-2">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Area -->
            <div class="overflow-x-auto bg-white shadow rounded-lg">
                <div class="px-6 py-4">
                    <p class="mb-4 text-sm text-gray-500">You can check the information about the advertising medium you applied for.</p>
                    <table class="min-w-full table-auto">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 text-left">#</th>
                                <th class="px-4 py-2 text-left">Media Name</th>
                                <th class="px-4 py-2 text-left">Media Location</th>
                                <th class="px-4 py-2 text-left">Media Type</th>
                                <th class="px-4 py-2 text-left">Installation Type</th>
                                <th class="px-4 py-2 text-left">Size</th>
                                <th class="px-4 py-2 text-left">Operating Hours</th>
                                <th class="px-4 py-2 text-left">Advertising Start Date</th>
                                <th class="px-4 py-2 text-left">Advertising Costs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2">1</td>
                                <td class="px-4 py-2">Media Name</td>
                                <td class="px-4 py-2">Location</td>
                                <td class="px-4 py-2">Type</td>
                                <td class="px-4 py-2">Installation</td>
                                <td class="px-4 py-2">Size</td>
                                <td class="px-4 py-2">9:00 AM - 5:00 PM</td>
                                <td class="px-4 py-2">2025-01-01</td>
                                <td class="px-4 py-2">$1000</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2">2</td>
                                <td class="px-4 py-2">Media Name 2</td>
                                <td class="px-4 py-2">Location 2</td>
                                <td class="px-4 py-2">Type 2</td>
                                <td class="px-4 py-2">Installation 2</td>
                                <td class="px-4 py-2">Size 2</td>
                                <td class="px-4 py-2">8:00 AM - 6:00 PM</td>
                                <td class="px-4 py-2">2025-02-01</td>
                                <td class="px-4 py-2">$1200</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mt-4 text-gray-500 text-sm">There is no data.</p>
                </div>
            </div>
        </div>
    </div>

 

    <!-- Settings Sidebar (for Light/Dark Mode) -->
    <div class="fixed inset-0 bg-black bg-opacity-50   settings-sidebar" id="settings-sidebar">
        <div class="w-64 bg-white text-black p-5 absolute top-0 right-0 h-full">
            <div class="flex justify-between">
                <h2 class="text-xl font-semibold mb-4">Settings</h2>
                <div class="close-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </div>

            </div>
            <button id="light-mode" class="w-full py-2 px-4 bg-gray-200 text-black rounded mb-4 hover:bg-gray-300 transition-colors">Light Mode</button>
            <button id="dark-mode" class="w-full py-2 px-4 bg-gray-800 text-white rounded hover:bg-gray-700 transition-colors">Dark Mode</button>
        </div>
    </div>

    <script>
        // Get elements
        const gearIcon = document.getElementById('gear-icon');
        const settingsSidebar = document.getElementById('settings-sidebar');
        const closeBtn = document.querySelector('.close-btn');
        const lightModeButton = document.getElementById('light-mode');
        const darkModeButton = document.getElementById('dark-mode');

        // Show/Hide settings sidebar when gear icon is clicked
        gearIcon.addEventListener('click', () => {
            settingsSidebar.classList.toggle('open');
        });

        // Close the settings sidebar when the close button is clicked
        closeBtn.addEventListener('click', () => {
            settingsSidebar.classList.remove('open');
        });
 
        lightModeButton.addEventListener('click', () => { 
            document.body.classList.remove('bg-gray-800', 'text-white');
            document.body.classList.add('bg-gray-100', 'text-gray-800');
             
            const table = document.querySelector('table');
            table.classList.remove('bg-gray-800', 'text-white');
            table.classList.add('bg-white', 'text-gray-800');
            table.querySelectorAll('th').forEach(th => {
                th.classList.remove('bg-gray-700', 'text-white');
                th.classList.add('bg-gray-100', 'text-gray-800');
            });
            table.querySelectorAll('td').forEach(td => {
                td.classList.remove('text-white');
                td.classList.add('text-gray-800');
            });
        });
 
        darkModeButton.addEventListener('click', () => { 
            document.body.classList.remove('bg-gray-100', 'text-gray-800');
            document.body.classList.add('bg-gray-800', 'text-white');
             
            const table = document.querySelector('table');
            table.classList.remove('bg-white', 'text-gray-800');
            table.classList.add('bg-gray-800', 'text-white');
            table.querySelectorAll('th').forEach(th => {
                th.classList.remove('bg-gray-100', 'text-gray-800');
                th.classList.add('bg-gray-700', 'text-white');
            });
            table.querySelectorAll('td').forEach(td => {
                td.classList.remove('text-gray-800');
                td.classList.add('text-white');
            });
        });

    </script>

</body>

</html>
