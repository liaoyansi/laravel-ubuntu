<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function test1(){
      $students = DB::select('select * from student');
      var_dump($students);
//        $bool = DB::insert('insert into student(name,age) values(?,?)',
//        ['yancy','18']);
//        var_dump($bool);
    }

    /**
     * 使用查询构造器插入数据
     */
    public function queryInsert(){
//        $data = [];
//        $data['name'] = 'xiaozhong';
//        $data['age'] = 18;
//        $data['sex'] = 1;
//        $data['created_at'] = time();
//
////        $bool = DB::table('student')->insert($data);
////        var_dump($bool);
//
//        $id = DB::table('student')->insertGetId($data);
//        return $id;
        $data = [
            ['name'=>'name1','age'=>19,'sex'=>1,'created_at'=>time()],
            ['name'=>'name2','age'=>20,'sex'=>0,'created_at'=>time()]
        ];
        $bool = DB::table('student')->insert($data);
    }

    /**
     * 使用查询构造器更新数据
     */
    public function queryUpdate(){
//        $num = DB::table('student')
//            ->where('id',1002)
//            ->update(['age'=>23]);
//        $num = DB::table('student')->increment('age',2);
        $num = DB::table('student')
            ->where('id',1002)
            ->decrement('age',2,['name'=>'imooc']);
        var_dump($num);
    }

    /**
     * 使用查询构造器删除数据
     */
    public function queryDelete(){
//        $num = DB::table('student')
//            ->where('id','1005')
//            ->delete();
//        $num = DB::table('student')
//            ->where('id','>=','1008')
//            ->delete();
        DB::table('student')->truncate();
//        var_dump($num);
    }

    /**
     * 使用查询构造器查询数据
     */
    public function query(){
//        $students = DB::table('student')->get();
//        $students = DB::table('student')
//            ->orderBy('id','desc')
//            ->first();
        $result = DB::table('student')
            ->max('age');
//        $students = DB::table('student')
//            ->where('id','>=','1001')
//            ->get();
//        $students = DB::table('student')
//            ->whereRaw('id >= ? and age > ?',[1001,19])
//            ->get();
//        $result = DB::table('student')
////            ->pluck('name');
//        $result = DB::table('student')
//            ->pluck('name','id');
//        $result = DB::table('student')
//            ->select('id','name','age')
//            ->get();
//        echo '<pre>';
//        DB::table('student')
//            ->orderBy('id','desc')
//            ->chunk(2,function($result){
//            var_dump($result);
//        });
        dd($result);
    }
}
