<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        DB::table('roles')->insert(['name'=>'superadmin']);
        DB::table('roles')->insert(['name'=>'admin']);
        DB::table('roles')->insert(['name'=>'editor']);
        DB::table('roles')->insert(['name'=>'customer']);

    }
}
