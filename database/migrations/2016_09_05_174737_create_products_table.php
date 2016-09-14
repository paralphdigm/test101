<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
         $table->increments('id')->unique();
         $table->integer('productcategory_id')->unsigned()->index();
         $table->string('name');
         $table->string('description');
         $table->double('price');
         $table->binary('ClientPic');
         $table->enum('availability',['yes','no']);
         $table->enum('featured',['yes','no']);
         $table->timestamps();
     });

     Schema::table('products', function($table) {
        $table->foreign('productcategory_id')->references('id')->on('productcategories');

     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("products");
    }

}
