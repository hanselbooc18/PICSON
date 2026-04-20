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
        Schema::create('medication_time_sheets', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('am');
            $table->time('pm');
            $table->foreignId('medication_sheet_id')->constrained('medication_sheets');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medication_time_sheets');
    }
};
