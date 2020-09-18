<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStu4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stu4', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_id');
            $table->string('form137');
            $table->string('good_moral');
            $table->string('birth_cert');
            $table->string('passport_picture');
            $table->string('stamp');
            $table->string('app_form');
            $table->string('envelope');
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
        Schema::dropIfExists('stu4');
    }
}
