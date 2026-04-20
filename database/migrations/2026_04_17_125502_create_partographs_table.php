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
        Schema::create('partographs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('presentation');
            $table->string('lie');
            $table->string('number_of_fetus');
            $table->string('aog');
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
        Schema::dropIfExists('partographs');
    }
};
