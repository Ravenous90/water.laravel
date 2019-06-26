<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static $table;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $items = DB::table(static::$table)->get();
        return view(static::$table . '.index',['items' => $items]);
    }

    public function view($id)
    {
        $item = DB::table(static::$table)->find($id);
        return view(static::$table . '.view',['item' => $item]);
    }
}
