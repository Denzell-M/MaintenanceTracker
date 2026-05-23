<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Vehicle extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory;

    protected $table = "vehicles";

    protected $fillable = ["make", "model", "year"];

    public function formattedOdometer(): Attribute
    {
        return Attribute::make(
            get: fn() => number_format($this->odometer) . " km",
        );
    }
}
