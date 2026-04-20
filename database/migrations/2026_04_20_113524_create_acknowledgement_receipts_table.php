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
        Schema::create('acknowledgement_receipts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('status_upon_receipt_at_emergency_room');
            $table->string('receiving_hospital');
            $table->string('contact_person');
            $table->string('contact_number');
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
        Schema::dropIfExists('acknowledgement_receipts');
    }
};
