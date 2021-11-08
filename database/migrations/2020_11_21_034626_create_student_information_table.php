<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('student_class_id')->nullable();
            $table->unsignedBigInteger('educational_guidance_donation_id')->nullable();
            $table->string('student_identification_number');
            $table->string('school_year');
            $table->string('gender');
            $table->string('phone_number');
            $table->longText('address');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('student_class_id')->references('id')->on('student_classes')->onDelete('set null');
            $table->foreign('educational_guidance_donation_id')->references('id')->on('educational_guidance_donations')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_information');
    }
}
