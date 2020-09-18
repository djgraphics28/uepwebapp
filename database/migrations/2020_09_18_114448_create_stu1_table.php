<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStu1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('country_birth');
            $table->date('birthdate');
            $table->string('country_citizenship');
            $table->string('age');
            $table->string('blood_type');
            $table->string('remarks');
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
        Schema::dropIfExists('stu1');
    }
}
