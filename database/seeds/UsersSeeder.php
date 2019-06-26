<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: askolotii
 * Date: 24.06.2019
 * Time: 15:23
 */

class UsersSeeder extends Seeder
{
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => bcrypt('secret'),
                'remember_token' => bcrypt('token'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}