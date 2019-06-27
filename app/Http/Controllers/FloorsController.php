<?php

namespace App\Http\Controllers;

class FloorsController extends HomeController
{
    public static $table = 'floors';
    public static $childTable = 'sensors';
}