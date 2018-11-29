<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $id=DB::table('categories')->insertGetId(['name'=>'Flag Banners','slug'=>'flag_banners']);
        DB::table('categories')->insert(['parent_id'=>$id, 'name'=>'Feather Flag Banners','slug'=>'feather_flag_banners']);
        DB::table('categories')->insert(['parent_id'=>$id,'name'=>'Teardrop Flag Banners','slug'=>'teardrop_flag_banners']);


        DB::table('categories')->insert(['name'=>'Custom Printed Flags','slug'=>'custom_printed_flag']);

        $id=DB::table('categories')->insertGetId(['name'=>'Table Covers','slug'=>'table_covers']);

        DB::table('categories')->insert(['parent_id'=>$id,'name'=>'Fitted Elastic Table Covers', 'slug'=>'fitted_elastic_table_covers']);
        DB::table('categories')->insert(['parent_id'=>$id,'name'=>'Fitted Table Cover','slug'=>'fitted_table_cover']);

        DB::table('categories')->insert(['name'=>'Parts','slug'=>'parts']);
    }
}
