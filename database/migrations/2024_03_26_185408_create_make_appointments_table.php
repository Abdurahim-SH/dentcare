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
        Schema::create('make_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('select_service');
            $table->string('select_doctor');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('select_date');
            $table->string('select_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('make_appointments');
    }
};
