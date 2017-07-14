<?php

namespace App\Core\Power;

use App\Core\SuperModuleInterface;

class Shot implements SuperModuleInterface{
    protected $atk;
    protected $range;
    protected $limit;


    public function activate(array $target){
        $this->atk = $target['atk'];
        $this->range = $target['range'];
        $this->limit = $target['limit'];
        return '射击-ath:'.$target['ath'].'-range:'.$target['range'].'-limit:'.$target['limit'];
    }
}