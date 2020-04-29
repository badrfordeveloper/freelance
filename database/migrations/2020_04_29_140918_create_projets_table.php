<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titre')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->float('prix')->nullable();
            $table->dateTime('dateDebut')->nullable();
            $table->dateTime('dateFin')->nullable();
            $table->string('etat')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->integer('categorie_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projets');
    }
}
