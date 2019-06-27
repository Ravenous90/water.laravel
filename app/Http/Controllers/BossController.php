<?php

namespace App\Http\Controllers;

use App\Models\Boss;

class BossController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Boss::getMainTable();

        return view('boss.index',[
            'items' => $items ?: null,
        ]);
    }

}