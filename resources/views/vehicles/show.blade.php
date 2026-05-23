<x-layout title="{{ $vehicle->year }} {{ $vehicle->make }} {{ $vehicle->model }}">
    <div class="mt-5">
        <div>
            <h1 class="text-2xl font-bold"> Vehicle Maintenance Records </h1>
            <p>Make: {{ $vehicle->make }} </p>
            <p>Model: {{ $vehicle->model }} </p>
            <p>Year: {{ $vehicle->year }} </p>
            <p>Odometer: {{ $vehicle->formattedOdometer }} </p>
        </div>
    </div>
</x-layout>
