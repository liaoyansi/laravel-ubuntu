<?php
namespace App\Core;
use App\Core\Power\Flight;
use App\Core\Power\Force;
use App\Core\Power\Shot;

class SuperModuleFactory{

    public function makeModule($moduleName, $options)
    {
        switch ($moduleName) {
            case 'flight':
                return new Flight($options[0], $options[1]);
            case 'Force':
                return new Force($options[0]);
            case 'Shot':
                return new Shot($options[0], $options[1], $options[2]);
        }
    }
}