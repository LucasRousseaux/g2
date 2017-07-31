<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('patients', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->string('patient_name');
            $table->string('patient_phone');
            $table->string('patient_image');
            $table->char('patient_gender',5);
            $table->date('patient_birthdate');
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
        Schema::drop('patients');

    }
}
