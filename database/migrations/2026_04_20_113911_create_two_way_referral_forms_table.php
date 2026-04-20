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
        Schema::create('two_way_referral_forms', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('priority');
            $table->tinyInteger('non_emergency');
            $table->string('reason_for_referral');
            $table->string('referred_to');
            $table->datetime('date_and_time');
            $table->tinyInteger('patient_category');
            $table->string('health_insurance');
            $table->tinyInteger('charity');
            $table->tinyInteger('pay');
            $table->string('responsible_person');
            $table->string('relationship');
            $table->string('contact_number_of_responsible_person');
            $table->string('admitting_impression');
            $table->string('referred_by');
            $table->string('designation');
            $table->string('contact_number');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('vital_sign_id')->constrained('vital_signs');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('two_way_referral_forms');
    }
};
