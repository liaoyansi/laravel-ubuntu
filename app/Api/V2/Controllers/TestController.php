<?php
namespace App\Api\V2\Controllers;

use App\Api\BaseController;

class TestController extends BaseController{
    public function index(){
        return 'this is test for V2';
    }
}
