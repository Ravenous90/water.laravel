<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Sensors;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    }

    public function view($id)
    {
        $usersSensors = null;
        $user = null;
        if (!is_null($id) && $id !== 0) {
            $user= Users::getUserById($id);
            $usersSensors = Users::getUsersSensors($id);
        }
        return view(Users::getTableName() . '.view', [
            'username' => $user->name ?: null,
            'sensorTitle' => Sensors::getTableName(),
            'usersSensors' => $usersSensors ?: null,
        ]);

    }
}