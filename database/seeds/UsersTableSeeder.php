<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name'=>'Can',
            'email'=>'can@can.com',
            'status'=>'1',
            'role_id'=>'1',
            'password'=>'$2y$10$dVQJ/46h783s3yCqN2zEj.at.HWyghHCcb9qkgQNflDtnPOX2prtm',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'=>'Banu',
            'email'=>'banu@banu.com',
            'status'=>'1',
            'role_id'=>'2',
            'password'=>'$2y$10$dVQJ/46h783s3yCqN2zEj.at.HWyghHCcb9qkgQNflDtnPOX2prtm',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'=>'Toprak',
            'email'=>'toprak@toprak.com',
            'status'=>'1',
            'role_id'=>'3',
            'password'=>'$2y$10$dVQJ/46h783s3yCqN2zEj.at.HWyghHCcb9qkgQNflDtnPOX2prtm',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('users')->insert([
            'name'=>'Irmak',
            'email'=>'irmak@irmak.com',
            'status'=>'1',
            'role_id'=>'4',
            'password'=>'$2y$10$dVQJ/46h783s3yCqN2zEj.at.HWyghHCcb9qkgQNflDtnPOX2prtm',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
