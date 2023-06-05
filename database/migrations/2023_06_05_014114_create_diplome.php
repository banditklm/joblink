<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplome', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();



            $table->id();
            $table->unsignedBigInteger('candidat_id');
            $table->string('title')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('cascade');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diplome');
    }
}
