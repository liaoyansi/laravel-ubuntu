<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentTestController extends Controller
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
//        $result = DB::table('student')
//            ->max('age');
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
        $result = Student::all();
        dd($result);
    }

    public function section1(){
        $students = [];
//        $students = Student::all();
        $name = 'liao';
        $arr = ['liao','yan','si'];
        return view('student.section1',
            [
                'name'=>$name,
                'arr'=>$arr,
                'students'=>$students
            ]
        );
    }

    public function section2(){
        return 'section2';
    }

    public function request1(Request $request){

//        //取值
//        echo $request->input('test');
//        // 取值，如果没有返回默认参数
//        echo $request->input('name','未知参数');
//        // 判断是否有指定参数
//        if($request->has('test')){
//            echo $request->input('test');
//        }else{
//            echo '无该参数';
//        }
//        // 获取所有输入参数
//        $result = $request->all();
//        dd($result);
        // 返回请求类型
//        echo $request->method();
//        // 判断请求类型是否是指定类型
//        if($request->isMethod('GET')){
//            echo 'Yes';
//        }else{
//            echo 'No';
//        }
//        $result = $request->ajax();
//        var_dump($request);

//        $result = $request->is('student/*');
//        //var_dump($request);

        echo $request->url();
    }

    public function session1(Request $request){
       // $request->session()->put('key','value2');
    //    Session::put(['key'=>'value1','key1'=>'value2']);
        return '你好！';

    }



    public function session2(Request $request){
      //  echo $request->session()->get('key');
     //   echo Session::get('key');
      //  echo Session::get('key1');
        return redirect()->back();

    }

    public function session3(Request $request){
        // $request->session()->put('key','value2');
        //    Session::put(['key'=>'value1','key1'=>'value2']);
        return '你好啊！';

    }

    public function activity1(){
        return '活动即将开始，敬请期待...';
    }

    public function activity2(){
        $data['1'] = '活动1进行中，谢谢您的参与...';
        return $data;
       // return response()->json($data);
    }

    public function activity3(){
        $data['1'] = '活动2进行中，谢谢您的参与...';
        return $data;
    }
}
