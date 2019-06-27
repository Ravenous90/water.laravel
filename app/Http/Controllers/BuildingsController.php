<?php

namespace App\Http\Controllers;

class BuildingsController extends HomeController
{
    public static $table = 'buildings';
    public static $childTable = 'floors';
}
