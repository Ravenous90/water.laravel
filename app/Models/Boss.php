<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


class Boss
{
    public static function getMainTable()
    {
        $res = DB::table('sensors')
            ->join('floors', 'sensors.floor_id', '=', 'floors.id')
            ->join('buildings', 'floors.building_id', 'buildings.id')
            ->join('users', 'sensors.user_id', 'users.id')
            ->select('sensors.name as sensor', 'floors.name as floor', 'buildings.name as building', 'users.name as user',
                     'sensors.id as sensor_id', 'floors.id as floor_id', 'buildings.id as building_id', 'users.id as user_id' )
            ->get();
        return $res ?: null;
    }
}