<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model{
  public static function getTest(){
    return 'This is Test model';
  }
}
