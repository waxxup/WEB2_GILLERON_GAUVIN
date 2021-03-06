<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('valid');
            $table->string('client');
            $table->string('adress');
            $table->string('email');
            $table->string('phone');
            $table->longText('presentation');
            $table->string('type');
            $table->longText('contexte');
            $table->longText('demande');
            $table->longText('objectif');
            $table->longText('contraintes');
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
        Schema::drop('baps');
    }
}