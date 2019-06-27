<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static $table;
    public static $childTable;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = DB::table(static::$table)->get();
        return view(static::$table . '.index',[
            'items' => $items,
            'title' => static::$table,
        ]);
    }

    public function view($id)
    {
        $item = DB::table(static::$table)->find($id);
        $children = null;
        $user = null;
        if (!is_null(static::$childTable)) {
            $children = DB::table(static::$childTable)->get()->where(substr(static::$table, 0, -1) . '_id', $id);
        }
        if (static::$childTable == 'users') {
            $user = DB::table(static::$childTable)->find($item->user_id);
        }
           return view(static::$table . '.view', [
            'item' => $item,
            'title' => static::$table,
            'children' => $children,
            'childTitle' => static::$childTable ?: null,
            'user' => $user,
        ]);
    }
}
