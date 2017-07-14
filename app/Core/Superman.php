<?php

namespace App\Core;

class Superman {

    protected $module;

    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }

    public function run($target){
        return $this->module->activate($target);
    }
}