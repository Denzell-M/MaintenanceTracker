<x-layout title="Index">
    <div>
        @foreach ($vehicles as $vehicle)
            <p>{{ $vehicle->make }}: {{ $vehicle->model }}</p>
        @endforeach
    </div>
</x-layout>
