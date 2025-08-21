<x-layouts.app>
    <div class="p-6">
        <h2 class="text-2xl font-bold mb-4">Unified Dashboard</h2>
        <p>All roles and functionalities are accessible here.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Role-specific content will be dynamically loaded based on user role -->
            @if($role === 'admin')
                <livewire:admin-dashboard />
            @elseif($role === 'sales')
                <livewire:sales-dashboard />
            @elseif($role === 'technician')
                <livewire:technician-dashboard />
            @elseif($role === 'manager')
                <livewire:manager-dashboard />
            @else
                <p class="text-gray-600">No specific dashboard available for your role.</p>
            @endif
        </div>
    </div>

</x-layouts.app>
