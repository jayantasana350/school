<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dateofbirth');
            $table->string('country_id');
            $table->string('state_id');
            $table->string('city_id');
            $table->string('gender');
            $table->string('religion');
            $table->string('image');
            $table->string('admission_name');
            $table->string('section');
            $table->string('class_lavel');
            $table->string('class_alphabet');
            $table->string('admission_date');
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->string('student_phone');
            $table->string('gardian_phone');
            $table->string('email');
            $table->string('address');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
