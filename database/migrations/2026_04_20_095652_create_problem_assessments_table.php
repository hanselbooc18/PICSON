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
        Schema::create('problem_assessments', function (Blueprint $table) {
            $table->id();
            $table->string('problem_type');
            $table->text('description');
            $table->time('time');
            $table->text('treatment_given');
            $table->foreignId('delivery_id')->constrained('deliveries');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problem_assessments');
    }
};
