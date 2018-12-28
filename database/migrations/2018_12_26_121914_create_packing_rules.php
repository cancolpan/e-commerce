<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackingRules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packing_rules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('packing_type_id')->unsigned();
            $table->smallInteger('min_quantity')->unsigned();
            $table->smallInteger('max_quantity')->unsigned();
            $table->integer('box_id')->unsigned();
            $table->integer('box_id_big_order')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packing_rules');
    }
}
