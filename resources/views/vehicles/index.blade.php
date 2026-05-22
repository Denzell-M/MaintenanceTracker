<x-layout title="Index">
    <div class="mx-auto max-w-3xl p-6">
        <div class="overflow-hidden rounded-lg border border-grey-200 bg-white shadown-sm">
            <table class="min-w-full table-fixed divide-y divide-grey-200">
                <thead class="bg-grey-50">
                    <tr class="divide-x divide-gray-200">
                        <th class="w-1/4 px-6 py-3 text-left text-sm font-semibold text-gray-700">Make</th>
                        <th class="w-1/4 px-6 py-3 text-left text-sm font-semibold text-gray-700">Model</th>
                        <th class="w-1/4 px-6 py-3 text-left text-sm font-semibold text-gray-700">Odometer</th>
                        <th class="w-1/4 px-6 py-3 text-left text-sm font-semibold text-gray-700">Year</th>
                        <th class="w-1/4 px-6 py-3 text-left text-sm font-semibold text-gray-700"> Details </th>
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
                            <a href="{{ route('vehicle.show', $vehicle->id) }}"> View </a>
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
