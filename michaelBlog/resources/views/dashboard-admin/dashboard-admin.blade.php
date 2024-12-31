<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed inset-y-0 left-0 z-50 w-64 transform -translate-x-full transition-transform duration-300 ease-in-out md:relative md:translate-x-0">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
                <div class="flex items-center mb-5">
                    <img src="./assets/logo.png" alt="Logo" class="h-8 w-8 mr-3" />
                    <span class="text-xl font-semibold dark:text-white">Syntax Journal</span>
                </div>

                <nav class="space-y-2">
                    <button data-section="section-1"
                        class="nav-item w-full flex items-center p-2 rounded-lg transition-colors duration-200 text-white hover:bg-gray-100 hover:text-gray-900">
                        <i class="fa-solid fa-file" style="color: #B197FC;"></i>
                        <span class="ml-3">JumboTron</span>
                    </button>

                    <button data-section="section-2"
                        class="nav-item w-full flex items-center p-2 rounded-lg transition-colors duration-200 text-white hover:bg-gray-100 hover:text-gray-900">
                        <i class="fa-solid fa-newspaper" style="color: #B197FC;"></i>
                        <span class="ml-3">Article</span>
                    </button>

                    <button data-section="section-3"
                        class="nav-item w-full flex items-center p-2 rounded-lg transition-colors duration-200 text-white hover:bg-gray-100 hover:text-gray-900">
                        <i class="fa-solid fa-comment" style="color: #B197FC;"></i>
                        <span class="ml-3">Inbox</span>
                    </button>

                    <button data-section="section-4"
                        class="nav-item w-full flex items-center p-2 rounded-lg transition-colors duration-200 text-white hover:bg-gray-100 hover:text-gray-900">
                        <i class="fa-solid fa-user" style="color: #B197FC;"></i>
                        <span class="ml-3">Users</span>
                    </button>

                    <button data-section="section-5"
                        class="nav-item w-full flex items-center p-2 rounded-lg transition-colors duration-200 text-white hover:bg-gray-100 hover:text-gray-900">
                        <i class="fa-solid fa-right-from-bracket fa-xl" style="color: #ff1f1f;"></i>
                        <span class="ml-3">Sign Out</span>
                    </button>
                </nav>
            </div>
        </aside>

        <!-- Mobile menu button -->
        <button id="mobile-menu-button" class="md:hidden fixed top-4 left-4 z-50 p-2 rounded-md bg-gray-200">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Main Content -->
        <main class="flex-1 p-4 overflow-auto">
            <div id="section-1" class="section-content">
                {{-- konten jumbotron --}}
                <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md p-6">
                    <!-- Admin Panel Header -->
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Jumbotron Admin Panel</h2>
                        <p class="text-gray-600">Manage your jumbotron content</p>
                    </div>
                    <!-- Admin Form -->
                    <form class="space-y-6">
                        <!-- Title Input -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                            <input type="text" id="title" name="title"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter title">
                        </div>
                        <!-- Category Select -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                            <select id="category" name="category"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <option value="tutorial">Tutorial</option>
                                <option value="news">News</option>
                                <option value="update">Update</option>
                                <option value="announcement">Announcement</option>
                            </select>
                        </div>
                        <!-- Paragraph Input -->
                        <div>
                            <label for="paragraph"
                                class="block text-sm font-medium text-gray-700 mb-2">Paragraph</label>
                            <textarea id="paragraph" name="paragraph" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter content"></textarea>
                        </div>
                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-4">
                            <!-- Create Button -->
                            <button type="submit"
                                class="px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                Create
                            </button>
                            <!-- Update Button -->
                            <button type="button"
                                class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Update
                            </button>
                            <!-- Delete Button -->
                            <button type="button"
                                class="px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                                Delete
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="section-2" class="section-content hidden">
                <div class="bg-white p-6 rounded-lg shadow">
                    @include('dashboard-admin.upload-article')
                </div>
                <div class="bg-white p-6 rounded-lg shadow mt-3">
                    @include('dashboard-admin.manage-article')
                </div>
            </div>

            <div id="section-3" class="section-content hidden">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-4">Inbox</h2>
                    <p>Inbox content goes here...</p>
                </div>
            </div>

            <div id="section-4" class="section-content hidden">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-4">User Management</h2>
                    <p>User management content goes here...</p>
                </div>
            </div>

            <div id="section-5" class="section-content hidden">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-2xl font-bold mb-4">Sign In</h2>
                    <p>Sign in content goes here...</p>
                </div>
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu functionality
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const sidebar = document.getElementById('sidebar');
            let isSidebarOpen = false;

            mobileMenuButton.addEventListener('click', () => {
                isSidebarOpen = !isSidebarOpen;
                sidebar.classList.toggle('-translate-x-full');
            });

            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', (event) => {
                if (isSidebarOpen &&
                    !sidebar.contains(event.target) &&
                    !mobileMenuButton.contains(event.target)) {
                    isSidebarOpen = false;
                    sidebar.classList.add('-translate-x-full');
                }
            });

            // Section navigation functionality
            const navItems = document.querySelectorAll('.nav-item');
            const sections = document.querySelectorAll('.section-content');

            function showSection(sectionId) {
                // Hide all sections
                sections.forEach(section => {
                    section.classList.add('hidden');
                });

                // Show selected section
                const activeSection = document.getElementById(sectionId);
                if (activeSection) {
                    activeSection.classList.remove('hidden');
                }

                // Update nav item styles
                navItems.forEach(item => {
                    if (item.dataset.section === sectionId) {
                        item.classList.add('bg-blue-100', 'text-blue-700');
                    } else {
                        item.classList.remove('bg-blue-100', 'text-blue-700');
                    }
                });
            }

            // Add click handlers to nav items
            navItems.forEach(item => {
                item.addEventListener('click', () => {
                    const sectionId = item.dataset.section;
                    showSection(sectionId);

                    // Close sidebar on mobile after selection
                    if (window.innerWidth < 768) {
                        isSidebarOpen = false;
                        sidebar.classList.add('-translate-x-full');
                    }
                });
            });

            // Show first section by default
            showSection('section-1');
        });
    </script>
</body>

</html>
