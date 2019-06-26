<?php
/**
 * Created by PhpStorm.
 * User: askolotii
 * Date: 25.06.2019
 * Time: 12:14
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
    protected $table = 'buildings';

    protected $fillable = ['name'];

    public $timestamps = false;

}