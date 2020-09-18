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
            $table->string('id')->nullable()->default(null);
            $table->string('studid', 50)->nullable()->default(null);
            $table->string('docdate')->nullable()->default(null);
            $table->string('stud_status')->nullable()->default(null);
            $table->string('lname')->nullable()->default(null);
            $table->string('fname')->nullable()->default(null);
            $table->string('mname')->nullable()->default(null);;
            $table->string('ename')->nullable()->default(null);
            $table->string('course_id')->nullable()->default(null);
            $table->string('major_id')->nullable()->default(null);
            $table->string('profile_pic')->nullable()->default(null);
            $table->string('sy_id')->nullable()->default(null);
            $table->string('year_lvl')->nullable()->default(null);
            $table->integer('codeN')->nullable()->default(null);
            $table->integer('rateCode')->nullable()->default(null);
            $table->integer('sem_id')->nullable()->default(null);
            $table->integer('created_by_id')->nullable()->default(null);
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
