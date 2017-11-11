<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nric');
            $table->string('usernamae');
            $table->string('pwd');
            $table->string('type_id');
        });

        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quest');
            $table->string('a1');
            $table->string('a2');
            $table->string('a3');
            $table->string('a4');
            $table->string('answer');
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
    }
}
