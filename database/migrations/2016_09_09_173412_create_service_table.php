<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('services', function (Blueprint $table) {
         $table->increments('id')->unique();
         $table->integer('servicecategory_id')->unsigned()->index();
         $table->string('name');
         $table->string('description');
         $table->double('price');
         $table->timestamps();
     });

     Schema::table('services', function($table) {
        $table->foreign('servicecategory_id')->references('id')->on('servicecategories');

     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("services");
    }
}
