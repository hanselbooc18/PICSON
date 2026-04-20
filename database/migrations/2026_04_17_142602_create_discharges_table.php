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
        Schema::create('discharges', function (Blueprint $table) {
            $table->id();
            $table->datetime('date_and_time_admitted');
            $table->datetime('discharge_date');
            $table->integer('days_admitted');
            $table->string('type_of_admission');
            $table->string('referred_by');
            $table->string('service_classification');
            $table->string('informant_address');
            $table->string('relationship_to_patient');
            $table->string('admitting_diagnosis');
            $table->string('admitting_diagnosis_icd_code');
            $table->string('final_discharged_diagnosis');
            $table->string('final_discharged_diagnosis_icd_code');
            $table->string('result');
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
        Schema::dropIfExists('discharges');
    }
};
