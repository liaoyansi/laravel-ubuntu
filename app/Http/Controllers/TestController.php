<?php

namespace App\Http\Controllers;

use App\Test;

class TestController extends Controller{

  public function info($id=null){
    // return route('testinfo');
    // return 'test-info-id-'.$id;
    return Test::getTest();
    // $data = [];
    // $data['model'] = Test::getTest();
    // $data['name'] = 'Tracy';
    // $data['age'] = 21;
    // // return view('test/info',[
    // //   'name' => 'Yancy',
    // //   'age' => 20
    // // ]);
    // return view('test/info',$data);
  }
}
