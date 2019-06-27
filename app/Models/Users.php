<?php
/**
 * Created by PhpStorm.
 * User: askolotii
 * Date: 27.06.2019
 * Time: 12:03
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Users extends Model
{
    private static $tableName = 'users';

    public static function getTableName()
    {
        return self::$tableName;
    }

    public static function getUsersSensors($id)
    {
        $res = DB::table(Sensors::getTableName())->get()->where('user_id', $id);
        return $res ?: null;
    }

    public static function getUserById($id)
    {
        $res = DB::table(self::getTableName())->find($id);
        return $res ?: null;
    }

}