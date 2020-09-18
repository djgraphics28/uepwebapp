<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStu5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu5', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('student_type');
            $table->string('percent');
            $table->string('sponsor');
            $table->string('school_year');
            $table->string('semester');
            $table->string('year_lvl');
            $table->string('course');
            $table->string('block');
            $table->integer('status')->nullable()->default(1)->comment("1=active;0=inactive");
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
        Schema::dropIfExists('stu5');
    }
}
