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
    Schema::create('drivers', function (Blueprint $table) {

        $table->id();

        $table->string('name');

        $table->string('email')->nullable();

        $table->string('phone')->nullable();

        $table->string('status')->default('Active');

        $table->date('dob')->nullable();

        $table->string('cdl')->nullable();

        $table->string('state')->nullable();

        $table->date('license_expiry')->nullable();

        $table->date('medical_expiry')->nullable();

        $table->date('hire_date')->nullable();

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
