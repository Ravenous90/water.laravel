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

    public static function buildingsRoutes()
    {
        $result = [];
        foreach (self::$tables as $table) {
            $result[] = Route::get('/' . $table, ucfirst($table) . 'Controller@index');
            $result[] = Route::get('/' . $table . '/{id}', ucfirst($table) . 'Controller@view');
        }
        return $result;

//            Route::get('/buildings/{id}', 'BuildingsController@view')

    }

}