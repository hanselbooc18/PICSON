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
        Schema::create('newborn_monitorings', function (Blueprint $table) {
            $table->id();
            $table->integer('respiratory_rate');
            $table->integer('pulse_rate');
            $table->decimal('temperature', 10, 0);
            $table->decimal('oxygen_saturation', 10, 0);
            $table->text('abnormal_findings');
            $table->tinyInteger('feeding_observed');
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
        Schema::dropIfExists('newborn_monitorings');
    }
};
