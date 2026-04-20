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
        Schema::create('return_slips', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->date('date_admitted');
            $table->date('date_discharged');
            $table->string('final_diagnosis');
            $table->string('actions_taken');
            $table->string('recommendation');
            $table->string('designation');
            $table->string('contact_number');
            $table->foreignId('two_way_referral_form_id')->constrained('two_way_referral_forms');
            $table->foreignId('patient_id')->constrained('patients');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_slips');
    }
};
