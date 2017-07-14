<?php

namespace App\Core\Power;

use App\Core\SuperModuleInterface;

class Force implements SuperModuleInterface{
    protected $force;


    public function activate(array $target){
        $this->force = $target['force'];
        return '蛮力-force:'.$target['force'];
    }
}