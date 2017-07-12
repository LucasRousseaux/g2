<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRecommendations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recommendations', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->bigInteger('recommended_from_user_id');
            $table->bigInteger('recommended_to_user_id');
            $table->integer('recommended_grade');
            $table->string('recommended_comment');
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
        Schema::drop('recommendations');
    }
}
