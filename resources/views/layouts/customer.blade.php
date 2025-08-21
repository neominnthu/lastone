
@props(['title' => __('Customer Dashboard')])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <h1 class="text-2xl font-bold text-gray-900">{{ $title }}</h1>
                <nav aria-label="{{ __('Main navigation') }}">
                    <a href="{{ route('customer.dashboard') }}" class="focus:outline-none focus:ring-2 focus:ring-yellow-400 text-blue-600 hover:underline mx-2 px-3 py-1 rounded" tabindex="0">{{ __('Dashboard') }}</a>
                    <a href="{{ route('customer.orders.index') }}" class="focus:outline-none focus:ring-2 focus:ring-yellow-400 text-blue-600 hover:underline mx-2 px-3 py-1 rounded" tabindex="0">{{ __('Orders') }}</a>
                    <a href="{{ route('customer.wallet') }}" class="focus:outline-none focus:ring-2 focus:ring-yellow-400 text-blue-600 hover:underline mx-2 px-3 py-1 rounded" tabindex="0">{{ __('Wallet') }}</a>
                    <a href="{{ route('logout') }}" class="focus:outline-none focus:ring-2 focus:ring-red-400 text-red-600 hover:underline mx-2 px-3 py-1 rounded" tabindex="0">{{ __('Logout') }}</a>
                </nav>
            </div>
        </header>
        <main class="flex-1">
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
        <footer class="bg-white shadow mt-auto">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center text-gray-500">
                CCTV Master Portal &copy; {{ date('Y') }}
            </div>
        </footer>
    </div>
</body>
</html>
