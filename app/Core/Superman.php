<?php

namespace App\Core;

class Superman implements SuperModuleInterface{

    protected $module;
    protected $app;

    public function __construct($module = null)
    {
        $this->app = 'app';
        $this->module = $module;
    }

//    public function run($target){
//        return $this->module->activate($target);
//    }

    public function run(){
        return 'This is run';
    }

    public function hello(){
        return 'Hello World';
    }

    public function getModule(){
        return $this->module;
    }

    public function getApp(){
        return $this->app;
    }
}