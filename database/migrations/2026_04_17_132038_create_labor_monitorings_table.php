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
        Schema::create('labor_monitorings', function (Blueprint $table) {
            $table->id();
            $table->integer('hours_since_arrival');
            $table->time('time');
            $table->integer('hours_since_membrane_rupture');
            $table->enum('vaginal_bleeding', ['0', '+', '++', '+++']);
            $table->integer('contractions_per_10_minutes');
            $table->integer('fetal_heart_tone');
            $table->decimal('maternal_temperature', 10, 0);
            $table->integer('pulse_rate');
            $table->integer('systolic_blood_pressure');
            $table->integer('diastolic_blood_pressure');
            $table->integer('urine_voided');
            $table->decimal('cervical_dilation', 10, 0);
            $table->foreignId('admission_id')->constrained('admissions');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('labor_monitorings');
    }
};
