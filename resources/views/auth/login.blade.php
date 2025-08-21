<x-layouts.app>
    <div class="max-w-md mx-auto mt-12 p-8 bg-white rounded shadow">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full border rounded px-3 py-2" required autofocus>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2" required>
            </div>
            <button type="submit" class="w-full bg-blue-900 text-white py-2 rounded font-semibold">Login</button>
        </form>
    </div>
</x-layouts.app>
