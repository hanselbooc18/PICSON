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
        Schema::create('post_partum_monitorings', function (Blueprint $table) {
            $table->id();
            $table->string('monitoring_time');
            $table->date('date');
            $table->time('time');
            $table->tinyInteger('consciousness');
            $table->tinyInteger('bleeding');
            $table->tinyInteger('uterus_hard');
            $table->integer('systolic_blood_pressure');
            $table->integer('diastolic_blood_pressure');
            $table->tinyInteger('severe_headache');
            $table->integer('pulse_rate');
            $table->integer('respiratory_rate');
            $table->decimal('temperature');
            $table->string('perineum_status');
            $table->foreignId('delivery_id')->constrained('deliveries');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_partum_monitorings');
    }
};
