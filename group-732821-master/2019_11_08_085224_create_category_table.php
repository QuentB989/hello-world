<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_name',45);
            $table->string('produit_name',45);
            $table->tinyInteger('view');
            $table->tinyInteger('direct_buy');
            $table->integer('produit_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('category', function (Blueprint $table) {
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
        Schema::dropIfExists('category');
    }
}
