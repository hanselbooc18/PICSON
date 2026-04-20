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
        Schema::create('birth_and_emergency_plans', function (Blueprint $table) {
            $table->id();
            $table->string('deliver_at');
            $table->tinyInteger('philhealth_accredited');
            $table->tinyInteger('philhealth_member');
            $table->integer('estimated_cost');
            $table->string('payment_method');
            $table->string('available_transport');
            $table->string('communicated_with');
            $table->string('accompanied_with');
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
        Schema::dropIfExists('birth_and_emergency_plans');
    }
};
