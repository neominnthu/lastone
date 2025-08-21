
<x-layouts.app>
    <nav class="bg-gray-800 text-white p-2 flex justify-between" aria-label="Admin navigation">
        <div>
            <span class="font-semibold">Admin Dashboard</span>
        </div>
        <div>
            <a href="{{ route('dashboard') }}" class="focus:outline-none focus:ring-2 focus:ring-yellow-400 px-3 py-1 rounded hover:underline mx-2" tabindex="0">Dashboard</a>
            <a href="{{ route('products.index') }}" class="focus:outline-none focus:ring-2 focus:ring-yellow-400 px-3 py-1 rounded hover:underline mx-2" tabindex="0">Products</a>
            <a href="{{ route('reports.index') }}" class="focus:outline-none focus:ring-2 focus:ring-yellow-400 px-3 py-1 rounded hover:underline mx-2" tabindex="0">Reports</a>
            <a href="{{ route('logout') }}" class="focus:outline-none focus:ring-2 focus:ring-red-400 px-3 py-1 rounded hover:underline mx-2" tabindex="0">Logout</a>
        </div>
    </nav>
    <div class="p-6">
        {{ $slot }}
    </div>
</x-layouts.app>
