<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStu3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('guardian_name');
            $table->string('guardian_address');
            $table->string('guardian_tel_num');
            $table->string('guardian_mobile_num');
            $table->string('relationship');
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
        Schema::dropIfExists('stu3');
    }
}
