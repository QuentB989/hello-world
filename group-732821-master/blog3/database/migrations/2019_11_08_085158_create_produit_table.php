<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categorie_name',45);
            $table->string('produit_name',45);
            $table->string('picture');
            $table->string('description',45);
            $table->integer('stock_dispo');
            $table->integer('quantite');
            $table->tinyInteger('add_panier');
            $table->tinyInteger('direct_buy');
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
        Schema::dropIfExists('produit');
    }
}
