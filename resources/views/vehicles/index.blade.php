<x-layout title="Index">
    <div class="mx-auto max-w-3xl p-6">
        <div class="overflow-hidden rounded-lg border border-grey-200 bg-white shadow-sm">
            <table class="min-w-full table-fixed divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr class="divide-x divide-gray-200">
                        <th class="table-header">Make</th>
                        <th class="table-header">Model</th>
                        <th class="table-header">Odometer</th>
                        <th class="table-header">Year</th>
                        <th class="table-header">Details</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 bg-white">
                    @forelse ($vehicles as $vehicle)
                    <tr class="divide-x divide-gray-200 hover:bg-gray-50">
                        <td class="w-1/4 px-6 py-4 text-sm text-gray-700"> {{ $vehicle->make }}</td>
                        <td class="w-1/4 px-6 py-4 text-sm text-gray-700"> {{ $vehicle->model }}</td>
                        <td class="w-1/4 px-6 py-4 text-sm text-gray-700"> {{ $vehicle->odometer }}</td>
                        <td class="w-1/4 px-6 py-4 text-sm text-gray-700"> {{ $vehicle->year }}</td>
                        <td class="w-1/4 px-6 py-4 text-sm text-gray-700">
                            <a href="{{ route('vehicles.show', $vehicle->id) }}"> View </a>
                        </td>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-6 text-center text-sm text-gray-500">No vehicles found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
