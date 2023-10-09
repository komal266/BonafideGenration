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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->integer('class');
            $table->string('div');
            $table->string('academic_year');
            $table->date('dob');
            $table->string('place_of_birth');
            $table->string('caste');
            $table->string('religion');
            $table->string('subcaste')->nullable();
            $table->integer('gr_no');
            $table->integer('lc_no');
            $table->string('aadhar_no')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('nationality');
            $table->string('last_school_attended')->nullable();
            $table->date('date_of_admission');
            $table->integer('class_of_admission');
            $table->string('result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
