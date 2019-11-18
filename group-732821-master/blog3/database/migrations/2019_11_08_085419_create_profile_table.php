<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',45);
            $table->string('email',45);
            $table->string('password',45);
            $table->tinyInteger('admin');

            $table->integer('category_id')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->integer('panier_id')->unsigned();

            $table->timestamps();
            //$table->unique(["id"], 'id_UNIQUE');
        });


        Schema::table('profile', function (Blueprint $table) {
          $table->foreign('category_id')->references('id')->on('category');
          $table->foreign('produit_id')->references('id')->on('produit');
          $table->foreign('panier_id')->references('id')->on('panier');
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
