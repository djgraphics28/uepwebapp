<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStu2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('address_num');
            $table->string('street');
            $table->string('town');
            $table->string('province');
            $table->string('country');
            $table->string('postal_code');
            $table->string('tel_num');
            $table->string('fax');
            $table->date('valid_until');
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
        Schema::dropIfExists('stu2');
    }
}
