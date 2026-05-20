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
        Schema::create("vehicle", function (Blueprint $table) {
            $table->id();
            $table->string("make");
            $table->string("model");
            $table->integer("year");
            $table->integer("odometer");
            $table->timestamps();
        });

        Schema::create("maintenance_records", function (Blueprint $table) {
            $table->id();
            $table->foreignId("vehicle_id")->constrained("vehicle");
            $table->string("category");
            $table->integer("cost_in_cents");
            $table->string("notes");
            $table->string("performed_by");
            $table->foreignId("shop_id")->constrained("shop");
            $table->date("date");
            $table->timestamps();
        });

        Schema::create("shop", function (Blueprint $table) {
            $table->id();
            $table->string("shop_name")->nullable(false);
            $table->string("street");
            $table->string("city");
            $table->string("province");
            $table->string("postal_code");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("maintenance_records");
        Schema::dropIfExists("vehicle");
        Schema::dropIfExists("shop");
    }
};
