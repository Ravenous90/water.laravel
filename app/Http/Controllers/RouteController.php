<?php
/**
 * Created by PhpStorm.
 * User: askolotii
 * Date: 26.06.2019
 * Time: 11:29
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class RouteController extends Controller
{
    private static $tables = [
        'buildings',
        'floors',
        'sensors',
        'users',
    ];

    private static $boss = 'boss';

    public static function MainRoutes()
    {
        $result = [];
        foreach (self::$tables as $table) {
            $result[] = Route::get('/' . $table, ucfirst($table) . 'Controller@index');
            $result[] = Route::get('/' . $table . '/{id}', ucfirst($table) . 'Controller@view');
        }
        if (!is_null(self::$boss)) {
            $result[] = Route::get('/' . self::$boss, ucfirst(self::$boss) . 'Controller@index');
        }
        return $result;
    }

}