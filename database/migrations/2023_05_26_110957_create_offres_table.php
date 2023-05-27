<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recruteur_id');
            $table->unsignedBigInteger('adresse_id');
            $table->string('description')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->string('path')->nullable();
            $table->string('categorie')->nullable();
            $table->string('domaine')->nullable();
            $table->foreign('recruteur_id')->references('id')->on('recruteurs');
            $table->foreign('adresse_id')->references('id')->on('adresses');
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
        Schema::dropIfExists('offres');
    }
}
