<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LuffyBaseModel extends Model{

    protected $connection = 'mysql_luffy';

    public $timestamps = true;
}