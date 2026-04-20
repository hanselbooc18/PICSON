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
        Schema::create('newborn_record_data', function (Blueprint $table) {
            $table->id();
            $table->string('assessment_type');
            $table->string('data');
            $table->string('value');
            $table->string('item');
            $table->foreignId('newborn_id')->constrained('newborns');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newborn_record_data');
    }
};
