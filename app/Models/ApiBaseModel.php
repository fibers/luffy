<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiBaseModel extends Model{

    protected $connection = 'mysql_api';

    public $timestamps = false;
}