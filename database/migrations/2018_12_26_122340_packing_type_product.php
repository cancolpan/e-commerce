<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackingTypeProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packing_type_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('packing_type_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->decimal('weight',10,2);
            $table->foreign('packing_type_id')->references('id')->on('packing_types')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packing_type_product');
    }
}
