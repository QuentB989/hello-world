<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name',45);
            $table->string('produit_name',45);
            $table->string('picture');
            $table->string('description',45);
            $table->integer('quantite');
            $table->integer('price');
            $table->tinyInteger('buy');
            $table->integer('category_id')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->timestamps();
            //$table->unique(["id"], 'id_UNIQUE');
        });


        Schema::table('panier', function (Blueprint $table) {
          $table->foreign('category_id')->references('id')->on('category');
          $table->foreign('produit_id')->references('id')->on('produit');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panier');
    }
}
