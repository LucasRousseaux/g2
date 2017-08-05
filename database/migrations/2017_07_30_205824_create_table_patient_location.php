<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePatientLocation extends Migration
{


  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      //
      Schema::create('patient_location', function (Blueprint $table) {
          //
          $table->increments('id');
          $table->bigInteger('patient_id');
          $table->string('patient_address');
          $table->bigInteger('location_id');
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
      Schema::drop('patient_location');

  }


}
