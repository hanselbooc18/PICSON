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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('address');
            $table->string('sex');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('civil_status');
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('spouse_contact_number')->nullable();
            $table->string('philhealth_number')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('allergies')->nullable();
            $table->string('gravida')->nullable();
            $table->string('term_births')->nullable();
            $table->string('preterm_births')->nullable();
            $table->string('abortion')->nullable();
            $table->string('living_children')->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
