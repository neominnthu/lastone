<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'CCTV Master Portal') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .sidebar-collapsed { width: 64px; }
        .sidebar-expanded { width: 256px; }
        .sidebar-collapsed .sidebar-label { display: none; }
        .sidebar-expanded .sidebar-label { display: inline; }
        .sidebar-anim { transition: width 0.3s cubic-bezier(0.4,0,0.2,1); }
        @media (max-width: 1024px) {
            #sidebar { width: 64px !important; }
            #sidebar.sidebar-expanded { width: 256px !important; }
        }
        @media (max-width: 767px) {
            #sidebar { display: none !important; position: fixed; top: 0; left: 0; height: 100vh; z-index: 40; width: 256px; background: #1e3a8a; }
            #sidebar.mobile-active { display: block !important; }
            #sidebarBackdrop { display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background: rgba(0,0,0,0.4); z-index: 30; }
            #sidebarBackdrop.active { display: block; }
        }
        @media (max-width: 767px) {
            header { flex-direction: column; align-items: flex-start; height: auto; padding: 1rem; }
            header h1 { font-size: 1.25rem; margin-bottom: 0.5rem; }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 transition-colors duration-300">
    <a href="#main-content" class="sr-only focus:not-sr-only absolute top-0 left-0 bg-yellow-400 text-black px-2 py-1 z-50"></a>
    <div class="min-h-screen flex">
        <!-- Sidebar (desktop & mobile) -->
        <div id="sidebarBackdrop"></div>
        <aside id="sidebar" class="bg-blue-900 text-white flex-shrink-0 sidebar-collapsed sidebar-anim md:block transition-all duration-200 ease-in-out h-screen relative z-20 overflow-auto">
            @include('components.sidebar')
        </aside>
        <!-- Mobile Sidebar Toggle & Hamburger -->
        <div class="md:hidden fixed top-0 left-0 z-30 flex items-center">
            <button id="sidebarToggle" class="m-2 p-2 bg-blue-900 text-white rounded focus:outline-none focus:ring-2 focus:ring-yellow-400" aria-label="Toggle sidebar">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
            <button id="mobileMenuToggle" class="m-2 p-2 bg-blue-900 text-white rounded focus:outline-none focus:ring-2 focus:ring-yellow-400" aria-label="Open menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>
        </div>
        <!-- Main Content -->
        <div class="flex-1 flex flex-col min-h-screen">
            <!-- Topbar -->
            <header class="bg-white shadow sticky top-0 z-40 flex items-center justify-between px-4 md:px-6 h-16">
                <div class="flex items-center space-x-2">
                    <img src="/logo.svg" alt="Logo" class="h-8 w-8"/>
                    <h1 class="font-bold text-blue-900 text-xl md:text-2xl">@lang('CCTV Master Unified Portal')</h1>
                </div>
                <!-- Expandable search bar -->
                <form class="mx-auto w-full max-w-xs md:max-w-md" role="search">
                    <div class="relative">
                        <input type="text" aria-label="@lang('Search')" placeholder="@lang('Search')..." class="px-2 py-1 rounded border border-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm w-full transition-all duration-200" id="searchInput" />
                        <button type="button" id="searchExpand" class="absolute right-1 top-1/2 -translate-y-1/2 text-blue-900 md:hidden">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </button>
                    </div>
                </form>
                <!-- Header actions -->
                <div class="flex items-center space-x-2 md:space-x-4">
                    <!-- Hamburger for mobile -->
                    <button id="headerHamburger" class="md:hidden p-2 rounded bg-blue-100 hover:bg-blue-200 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-400" aria-label="Open menu">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <!-- Notifications -->
                    <div class="relative group">
                        <button id="notificationBtn" class="p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" aria-label="Notifications">
                            <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1 group-hover:scale-110 transition">3</span>
                        </button>
                        <!-- Dropdown -->
                        <div id="notificationDropdown" class="absolute right-0 mt-2 w-64 bg-white border border-blue-200 rounded shadow-lg z-50 hidden group-hover:block">
                            <div class="p-2 font-bold text-blue-900">@lang('Notifications')</div>
                            <div class="divide-y divide-blue-100">
                                <div class="p-2 text-sm">@lang('New order received')</div>
                                <div class="p-2 text-sm">@lang('System update available')</div>
                                <div class="p-2 text-sm">@lang('Technician completed task')</div>
                            </div>
                        </div>
                    </div>
                    <!-- User menu -->
                    <div class="relative group">
                        <button class="flex items-center space-x-2 focus:outline-none" aria-label="User menu">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'User') }}&background=1e3a8a&color=fff&size=32" alt="Avatar" class="w-8 h-8 rounded-full border border-blue-200" />
                            <span class="hidden md:inline text-blue-900 font-semibold">{{ auth()->user()->name ?? 'User' }}</span>
                            <svg class="w-4 h-4 text-blue-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"/></svg>
                        </button>
                        <div class="absolute right-0 mt-2 w-40 bg-white border border-blue-200 rounded shadow-lg z-50 hidden group-hover:block">
                            <a href="#" class="block px-4 py-2 text-sm text-blue-900 hover:bg-blue-50">@lang('Profile')</a>
                            <a href="#" class="block px-4 py-2 text-sm text-blue-900 hover:bg-blue-50">@lang('Settings')</a>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">@lang('Logout')</a>
                        </div>
                    </div>
                    <!-- Theme switcher -->
                    <button id="darkModeToggle" class="ml-2 p-2 rounded bg-blue-100 hover:bg-blue-200 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-400" title="@lang('Toggle dark mode')" aria-label="Toggle dark mode">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 3v1m0 16v1m8.485-8.485l-.707.707M4.222 4.222l-.707.707M21 12h-1M4 12H3m16.485 4.485l-.707-.707M4.222 19.778l-.707-.707"/></svg>
                    </button>
                    <!-- Language switcher -->
                    <select id="langSwitcher" class="ml-2 p-2 rounded border border-blue-200 text-blue-900 bg-white focus:outline-none focus:ring-2 focus:ring-blue-400" aria-label="Language switcher">
                        <option value="en">🇬🇧 EN</option>
                        <option value="es">🇪🇸 ES</option>
                    </select>
                </div>
            </header>
            <main id="main-content" class="flex-1 overflow-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
                <!-- Example dashboard widgets -->
                <div class="bg-white rounded shadow-md p-4 animate-pulse">@lang('Loading...')</div>
                <div class="bg-white rounded shadow-md p-4">@lang('Widget 1')</div>
                <div class="bg-white rounded shadow-md p-4">@lang('Widget 2')</div>
                <!-- ...more widgets... -->
                {{ $slot }}
            </main>
            <footer class="bg-blue-900 text-white text-xs py-2 border-t border-blue-800 flex items-center justify-center">
                &copy; {{ date('Y') }} CCTV Master Unified Portal
                <span id="offlineStatus" class="ml-2 text-yellow-300 hidden">@lang('Offline')</span>
            </footer>
        </div>
    </div>
    <script>
        // Mini sidebar expand on hover (desktop/tablet only)
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const sidebarBackdrop = document.getElementById('sidebarBackdrop');
            const toggle = document.getElementById('sidebarToggle');
            function isDesktop() { return window.innerWidth >= 1024; }
            function setSidebarLabels(show) {
                document.querySelectorAll('#sidebar .sidebar-label').forEach(function(el) {
                    el.style.display = show ? 'inline' : 'none';
                });
            }
            if (isDesktop()) {
                sidebar.addEventListener('mouseenter', function() {
                    sidebar.classList.remove('sidebar-collapsed');
                    sidebar.classList.add('sidebar-expanded');
                    setSidebarLabels(true);
                });
                sidebar.addEventListener('mouseleave', function() {
                    sidebar.classList.remove('sidebar-expanded');
                    sidebar.classList.add('sidebar-collapsed');
                    setSidebarLabels(false);
                });
                setSidebarLabels(false);
            } else {
                setSidebarLabels(true);
                if (toggle && sidebar && sidebarBackdrop) {
                    toggle.addEventListener('click', function() {
                        sidebar.classList.toggle('mobile-active');
                        sidebarBackdrop.classList.toggle('active');
                    });
                    sidebarBackdrop.addEventListener('click', function() {
                        sidebar.classList.remove('mobile-active');
                        sidebarBackdrop.classList.remove('active');
                    });
                }
                // Swipe gesture for mobile sidebar
                let touchStartX = null;
                document.body.addEventListener('touchstart', function(e) {
                    touchStartX = e.touches[0].clientX;
                });
                document.body.addEventListener('touchend', function(e) {
                    if (touchStartX !== null) {
                        let touchEndX = e.changedTouches[0].clientX;
                        if (touchEndX - touchStartX > 80) {
                            sidebar.classList.add('mobile-active');
                            sidebarBackdrop.classList.add('active');
                        }
                        if (touchStartX - touchEndX > 80) {
                            sidebar.classList.remove('mobile-active');
                            sidebarBackdrop.classList.remove('active');
                        }
                        touchStartX = null;
                    }
                });
            }
            // Dark mode toggle
            document.getElementById('darkModeToggle').addEventListener('click', function() {
                document.body.classList.toggle('bg-gray-900');
                document.body.classList.toggle('text-white');
            });
            // Language switcher
            document.getElementById('langSwitcher').addEventListener('change', function(e) {
                // Example: reload page with selected language (implement backend logic as needed)
                window.location.search = '?lang=' + e.target.value;
            });
            // Offline status indicator
            function updateOfflineStatus() {
                document.getElementById('offlineStatus').classList.toggle('hidden', navigator.onLine);
            }
            window.addEventListener('online', updateOfflineStatus);
            window.addEventListener('offline', updateOfflineStatus);
            updateOfflineStatus();
        });
    </script>
</body>
</html>
