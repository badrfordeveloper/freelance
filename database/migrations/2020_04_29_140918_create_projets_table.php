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
            $table->id();
            $table->string('titre')->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->float('prix')->nullable();
            $table->dateTime('dateDebut')->nullable();
            $table->dateTime('dateFin')->nullable();
            $table->string('etat')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('projets');
    }
}
