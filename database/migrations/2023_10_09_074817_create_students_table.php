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
            $table->string('last_name')->nullable();
            $table->integer('class')->nullable();
            $table->string('div')->nullable();
            $table->string('academic_year');
            $table->date('dob')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('caste')->nullable();
            $table->string('religion')->nullable();
            $table->string('subcaste')->nullable();
            $table->integer('gr_no')->unique();
            $table->integer('lc_no')->nullable();
            $table->integer('bona_no')->nullable();
            $table->string('aadhar_no')->unique()->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('nationality');
            $table->string('last_school_attended')->nullable();
            $table->date('date_of_admission');
            $table->integer('class_of_admission')->nullable();
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
