<x-layout title="Index">
    <div class="mx-auto max-w-6xl p-6">
        <div class="overflow-hidden rounded-lg border border-grey-200 bg-white shadown-sm">
            <table class="min-w-full divide-y divide-grey-200">
                <thead class="bg-grey-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Make</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Model</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Odometer</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Year</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse ($vehicles as $vehicle)
                    <tr>
                        <td> {{ $vehicle->make }}</td>
                        <td> {{ $vehicle->model }}</td>
                        <td> {{ $vehicle->odometer }}</td>
                        <td> {{ $vehicle->year }}</td>
                    @empty
                    <tr>
                        <td colspan="4">No vehicles found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
