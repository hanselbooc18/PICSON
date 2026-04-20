<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vital_signs', function (Blueprint $table) {
            $table->id();
            $table->integer('systolic_blood_pressure');
            $table->integer('diastolic_blood_pressure');
            $table->integer('pulse_rate');
            $table->decimal('temperature', 10, 0);
            $table->decimal('respiratory_rate', 10, 0);
            $table->decimal('oxygen_saturation', 10, 0);
            $table->decimal('weight', 10, 0);
            $table->decimal('height', 10, 0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vital_signs');
    }
};
