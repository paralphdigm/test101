<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicecategoriesTable extends Migration
{
    /**
   * Run the migrations.
   *
   * @return void
   */
    public function up()
    {
      Schema::create('servicecategories', function (Blueprint $table) {
         $table->increments('id')->unique();
         $table->string('name');
         $table->string('description');
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
        Schema::drop("servicecategories");
    }
}
