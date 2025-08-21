            <!-- Sidebar header with portal name -->
            <div class="h-16 flex items-center justify-center font-bold text-xl border-b border-blue-800">
                <span class="sidebar-label">CCTV Portal</span>
            </div>
            <!-- Main navigation links -->
            <nav class="mt-6" aria-label="Main navigation">
                <!-- Dashboard link -->
                <a href="{{ route('dashboard') }}" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400" tabindex="0" aria-label="Dashboard">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7M13 5v6h6"/></svg>
                    <span class="sidebar-label ml-2">@lang('Dashboard')</span>
                </a>
                <!-- Orders link -->
                <a href="#" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-green-400" tabindex="0" aria-label="Orders">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 17v-6h13v6M9 17H5a2 2 0 01-2-2V7a2 2 0 012-2h4m0 0V3m0 2v2"/></svg>
                    <span class="sidebar-label ml-2">@lang('Orders')</span>
                </a>
                <!-- Customers link -->
                <a href="#" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" tabindex="0" aria-label="Customers">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 20h5v-2a4 4 0 00-3-3.87M9 20H4v-2a4 4 0 013-3.87M12 12a4 4 0 100-8 4 4 0 000 8z"/></svg>
                    <span class="sidebar-label ml-2">@lang('Customers')</span>
                </a>
                <!-- Products link -->
                <a href="#" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-purple-400" tabindex="0" aria-label="Products">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 13V7a2 2 0 00-2-2H6a2 2 0 00-2 2v6M9 21h6"/></svg>
                    <span class="sidebar-label ml-2">@lang('Products')</span>
                </a>
                <!-- Wallet link -->
                <a href="#" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400" tabindex="0" aria-label="Wallet">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                    <span class="sidebar-label ml-2">@lang('Wallet')</span>
                </a>
                <!-- Notifications link -->
                <a href="#" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" tabindex="0" aria-label="Notifications">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                    <span class="sidebar-label ml-2">@lang('Notifications')</span>
                </a>
                <!-- Settings link -->
                <a href="#" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-indigo-400" tabindex="0" aria-label="Settings">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3"/></svg>
                    <span class="sidebar-label ml-2">@lang('Settings')</span>
                </a>
                <!-- POS link -->
                <a href="#" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-yellow-400" tabindex="0" aria-label="POS">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 3h18v18H3V3z"/></svg>
                    <span class="sidebar-label ml-2">@lang('POS')</span>
                </a>
                <!-- Logout link -->
                <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 gap-2 hover:bg-blue-800 rounded focus:outline-none focus:ring-2 focus:ring-red-400" tabindex="0" aria-label="Logout">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 16l4-4m0 0l-4-4m4 4H7"/></svg>
                    <span class="sidebar-label ml-2">@lang('Logout')</span>
                </a>
            </nav>
