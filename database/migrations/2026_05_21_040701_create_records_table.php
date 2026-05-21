<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("maintenance_records", function (Blueprint $table) {
            $table->id();
            $table->foreignId("vehicle_id")->constrained("vehicles");
            $table->foreignId("shop_id")->constrained("shops");
            $table->string("category");
            $table->integer("cost_in_cents");
            $table->string("notes")->nullable();
            $table->string("performed_by")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("maintenance_records");
    }
};
