<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('category')->truncate();
        $id=DB::table('category')->insertGetId(['name'=>'Flag Banners','slug'=>'flag_banners']);
        DB::table('category')->insert(['parent_id'=>$id, 'name'=>'Feather Flag Banners','slug'=>'feather_flag_banners']);
        DB::table('category')->insert(['parent_id'=>$id,'name'=>'Teardrop Flag Banners','slug'=>'teardrop_flag_banners']);


        DB::table('category')->insert(['name'=>'Custom Printed Flags','slug'=>'custom_printed_flag']);

        $id=DB::table('category')->insertGetId(['name'=>'Table Covers','slug'=>'table_covers']);

        DB::table('category')->insert(['parent_id'=>$id,'name'=>'Fitted Elastic Table Covers', 'slug'=>'fitted_elastic_table_covers']);
        DB::table('category')->insert(['parent_id'=>$id,'name'=>'Fitted Table Cover','slug'=>'fitted_table_cover']);

        DB::table('category')->insert(['name'=>'Parts','slug'=>'parts']);
    }
}
