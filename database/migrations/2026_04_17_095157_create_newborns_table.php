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
        Schema::create('newborns', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->dateTime('date_time_of_birth');
            $table->string('sex');
            $table->decimal('head', 10, 0);
            $table->decimal('chest', 10, 0);
            $table->decimal('abdomen', 10, 0);
            $table->decimal('length', 10, 0);
            $table->string('new_born_screening_done');
            $table->string('inguinal_area');
            $table->string('other_findings');
            $table->string('impression');
            $table->string('management');
            $table->string('case_number');
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('newborns');
    }
};
