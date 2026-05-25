<header class="border-b border-gray-200 bg-white">
    <div class="mx-auto flex max-w-3xl items-center justify-between px-6 py-4">
        <a href="{{ route('vehicles.index') }}" class="text-lg font-semibold text-gray-900">
            MaintenanceTracker
        </a>

        <nav class="flex items-center gap-6 text-sm font-medium text-gray-600">
            <a href="{{ route('vehicles.index') }}">
                Vehicles
            </a>
            <a href="{{ route('vehicles.create') }}">
                Add a Vehicle
            </a>
        </nav>
    </div>
</header>
