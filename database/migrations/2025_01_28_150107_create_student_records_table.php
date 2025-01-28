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
        Schema::create('student_records', function (Blueprint $table) {
            $table->id();
            $table->integer('student_number')->unique();
            $table->string('name');
            $table->string('course');
            $table->string('email')->unique();
            $table->string('student_type');
            $table->date('date_of_birth');
            $table->string('sex');
            $table->string('religion');
            $table->string('citizenship');
            $table->string('marital_status');
            $table->string('guardian_name');
            $table->bigInteger('cellphone_number');
            $table->string('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_records');
    }
};
