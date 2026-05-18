<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vehicle = fake()->randomElement(self::allPresets());

        return [
            'make' => $vehicle['make'],
            'model' => $vehicle['model'],
            'year' => fake()->numberBetween(1995, 2026),
        ];
    }

    public static function carPresets(): array
    {
        return [
            ['make' => 'Mazda', 'model' => 'Mazda3'],
            ['make' => 'Tesla', 'model' => 'Model 3'],
            ['make' => 'Nissan', 'model' => 'Kicks'],
            ['make' => 'Honda', 'model' => 'Civic'],
            ['make' => 'Toyota', 'model' => 'Corolla'],
            ['make' => 'Subaru', 'model' => 'Impreza'],
            ['make' => 'Ford', 'model' => 'Focus'],
            ['make' => 'Hyundai', 'model' => 'Elantra'],
            ['make' => 'Volkswagen', 'model' => 'Jetta'],
            ['make' => 'Kia', 'model' => 'Forte'],
        ];
    }

    public static function motorcyclePresets(): array
    {
        return [
            ['make' => 'Kawasaki', 'model' => 'Ninja EX250'],
            ['make' => 'Triumph', 'model' => 'Daytona 660'],
            ['make' => 'Yamaha', 'model' => 'MT-07'],
            ['make' => 'Honda', 'model' => 'CB650R'],
            ['make' => 'Suzuki', 'model' => 'GSX-8S'],
            ['make' => 'Ducati', 'model' => 'Monster'],
            ['make' => 'Harley-Davidson', 'model' => 'Street 750'],
            ['make' => 'BMW', 'model' => 'R 1250 GS'],
            ['make' => 'KTM', 'model' => '390 Duke'],
            ['make' => 'Indian', 'model' => 'Scout Bobber'],
        ];
    }

    public static function truckPresets(): array
    {
        return [
            ['make' => 'Ford', 'model' => 'F-150'],
            ['make' => 'Ram', 'model' => '2500'],
            ['make' => 'Chevrolet', 'model' => 'Silverado 1500'],
            ['make' => 'Toyota', 'model' => 'Tacoma'],
            ['make' => 'GMC', 'model' => 'Sierra 2500HD'],
            ['make' => 'Nissan', 'model' => 'Frontier'],
            ['make' => 'Honda', 'model' => 'Ridgeline'],
            ['make' => 'Jeep', 'model' => 'Gladiator'],
            ['make' => 'Toyota', 'model' => 'Tundra'],
            ['make' => 'Rivian', 'model' => 'R1T'],
        ];
    }

    public static function allPresets(): array
    {
        return array_merge(
            self::carPresets(),
            self::motorcyclePresets(),
            self::truckPresets(),
        );
    }
}
