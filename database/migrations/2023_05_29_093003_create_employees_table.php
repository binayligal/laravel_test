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
        Schema::create('employees_master', function (Blueprint $table) {
            $table->id('employee_id');
            $table->integer('employee_code');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('password');
            $table->foreignId('depar_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
