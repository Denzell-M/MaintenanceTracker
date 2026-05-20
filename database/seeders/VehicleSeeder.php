<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Database\Factories\VehicleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::factory()->create([
            "make" => "Mazda",
            "model" => "Mazda3",
            "year" => 2015,
            "odometer" => 191101,
        ]);

        Vehicle::factory()->create([
            "make" => "Nissan",
            "model" => "Kicks",
            "year" => 2019,
            "odometer" => 187243,
        ]);

        Vehicle::factory()->create([
            "make" => "Kawasaki",
            "model" => "Ninja EX250",
            "year" => 2009,
            "odometer" => 14532,
        ]);

        Vehicle::factory()->create([
            "make" => "Triumph",
            "model" => "Daytona 660",
            "year" => 2026,
            "odometer" => 0,
        ]);

        foreach (
            array_filter(VehicleFactory::carPresets(), function (
                array $vehicle,
            ) {
                return !(
                    ($vehicle["make"] === "Mazda" &&
                        $vehicle["model"] === "Mazda3") ||
                    ($vehicle["make"] === "Nissan" &&
                        $vehicle["model"] === "Kicks")
                );
            })
            as $vehicle
        ) {
            Vehicle::factory()->create([
                "make" => $vehicle["make"],
                "model" => $vehicle["model"],
                "year" => fake()->numberBetween(2012, 2026),
                "odometer" => fake()->numberBetween(0, 150000),
            ]);
        }

        foreach (
            array_filter(VehicleFactory::motorcyclePresets(), function (
                array $vehicle,
            ) {
                return !(
                    ($vehicle["make"] === "Kawasaki" &&
                        $vehicle["model"] === "Ninja EX250") ||
                    ($vehicle["make"] === "Triumph" &&
                        $vehicle["model"] === "Daytona 660")
                );
            })
            as $vehicle
        ) {
            Vehicle::factory()->create([
                "make" => $vehicle["make"],
                "model" => $vehicle["model"],
                "year" => fake()->numberBetween(2015, 2026),
                "odometer" => fake()->numberBetween(500, 10000),
            ]);
        }

        foreach (VehicleFactory::truckPresets() as $vehicle) {
            Vehicle::factory()->create([
                "make" => $vehicle["make"],
                "model" => $vehicle["model"],
                "year" => fake()->numberBetween(2005, 2026),
                "odometer" => fake()->numberBetween(1000, 200000),
            ]);
        }
    }
}
