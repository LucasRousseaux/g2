<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDoctors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('doctors', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('doctor_name');
            $table->string('doctor_phone');
            $table->string('doctor_image');
            $table->char('doctor_gender',6);
            $table->date('doctor_birthdate');
            $table->string('doctor_experience');
            $table->string('doctor_upin');
            $table->string('doctor_titles');
            $table->bigInteger('user_id');
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
        //
        Schema::drop('doctors');
    }
}
