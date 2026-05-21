<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    /** @use HasFactory<\Database\Factories\DocumentationFactory> */
    use HasFactory;

    protected $table = "documentations";

    protected $fillable = [
        "vehicle_id",
        "maintenance_record_id",
        "title",
        "file_url",
        "file_name",
        "mime_type",
        "file_size",
    ];
}
