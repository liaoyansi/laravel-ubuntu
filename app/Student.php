<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model{

    // 指定表名
    protected $table = 'student';

    // 指定ID
    protected $primaryKey = 'id';
}