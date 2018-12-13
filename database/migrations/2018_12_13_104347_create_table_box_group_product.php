<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBoxGroupProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box_group_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('box_group_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->decimal('weight',10,2);
            $table->foreign('box_group_id')->references('id')->on('box_groups')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('box_group_product');
    }
}
