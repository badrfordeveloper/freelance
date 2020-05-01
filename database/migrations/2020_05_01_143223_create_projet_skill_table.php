<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_skill', function (Blueprint $table) {
            $table->id();
            $table->integer('skill_id')->unsigned();
            $table->integer('projet_id')->unsigned();
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('projet_skill');
    }
}
