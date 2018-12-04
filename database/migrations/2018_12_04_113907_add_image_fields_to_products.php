<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageFieldsToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->text('image_1')->nullable();
            $table->text('image_2')->nullable();
            $table->text('image_3')->nullable();
            $table->text('image_4')->nullable();
            $table->text('image_5')->nullable();
            $table->text('image_6')->nullable();
            $table->text('image_7')->nullable();
            $table->text('image_8')->nullable();
            $table->text('image_description_1')->nullable();
            $table->text('image_description_2')->nullable();
            $table->text('image_description_3')->nullable();
            $table->text('image_description_4')->nullable();
            $table->text('image_description_5')->nullable();
            $table->text('image_description_6')->nullable();
            $table->text('image_description_7')->nullable();
            $table->text('image_description_8')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('image_1');
            $table->dropColumn('image_2');
            $table->dropColumn('image_3');
            $table->dropColumn('image_4');
            $table->dropColumn('image_5');
            $table->dropColumn('image_6');
            $table->dropColumn('image_7');
            $table->dropColumn('image_8');
            $table->dropColumn('image_description_1');
            $table->dropColumn('image_description_2');
            $table->dropColumn('image_description_3');
            $table->dropColumn('image_description_4');
            $table->dropColumn('image_description_5');
            $table->dropColumn('image_description_6');
            $table->dropColumn('image_description_7');
            $table->dropColumn('image_description_8');

        });
    }
}
