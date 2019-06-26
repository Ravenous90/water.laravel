<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MainSeeder extends Seeder
{
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            DB::table('buildings')->insert([
                'name' => 'Building #' . Str::random(5),
            ]);
        }

        for($i = 0; $i < 50; $i++) {
            DB::table('floors')->insert([
                'name' => 'Floor №' . rand(1, 20),
                'building_id' => rand(1, 10),
            ]);
        }

        for($i = 0; $i < 200; $i++) {
            DB::table('sensors')->insert([
                'name' => 'Sensor #' . Str::random(8),
                'floor_id' => rand(1, 50),
                'user_id' => rand(1, 10),
            ]);
        }

    }
}