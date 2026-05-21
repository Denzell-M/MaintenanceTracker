<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRecord extends Model
{
    /** @use HasFactory<\Database\Factories\MaintenanceRecordFactory> */
    use HasFactory;

    protected $table = "maintenance_records";

    protected $fillable = [
        "vehicle_id",
        "shop_id",
        "category",
        "cost_in_cents",
        "notes",
        "performed_by",
    ];
}
