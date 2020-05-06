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
            
            $table->foreignId('skill_id')->constrained('skills')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('projet_id')->constrained('projets')->onDelete('cascade')->onUpdate('cascade');
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
