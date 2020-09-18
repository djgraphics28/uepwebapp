<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('mname');
            $table->string('ename')->nullable()->default(null);
            $table->integer('course_id');
            $table->integer('major_id');
            $table->integer('sy_id');
            $table->integer('sem_id');
            $table->integer('codeN');
            $table->integer('rateCode');
            $table->integer('year_lvl');
            $table->integer('created_by_id');
            $table->string('studid', 50);
            $table->string('profile_pic')->nullable()->default(null);
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
        Schema::dropIfExists('students');
    }
}
