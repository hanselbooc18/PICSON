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
        Schema::create('staff_orders', function (Blueprint $table) {
            $table->id();
            $table->datetime('date_and_time');
            $table->string('nurses_or_rms_notes');
            $table->string('case_number');
            $table->string('bedroom_number');
            $table->datetime('date_and_time_doctors_order');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_orders');
    }
};
