<?php

namespace App\Core\Power;

use App\Core\SuperModuleInterface;

class Flight implements SuperModuleInterface{
    protected $speed;
    protected $holdtime;


    public function activate(array $target){
        $this->speed = $target['speed'];
        $this->holdtime = $target['holdtime'];
        return '飞行-speed:'.$target['speed'].'-holdtime:'.$target['holdtime'];
    }
}