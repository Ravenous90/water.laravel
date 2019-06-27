<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensors extends Model
{
    private static $tableName = 'sensors';

    public static function getTableName()
    {
        return self::$tableName;
    }
}
