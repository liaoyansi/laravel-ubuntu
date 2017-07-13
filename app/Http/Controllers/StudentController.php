<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class StudentController extends Controller {
    public function index(){
        $data['students'] = Student::orderBy('id','desc')->paginate(5);

        return view('student.index',$data);
    }

    // 添加页面
    public function create(Request $request){
        $student = new Student();
        if($request->isMethod('POST')){
            // 1.控制器验证
//            $this->validate($request, [
//                'Student.name' => 'required|min:2|max:20',
//                'Student.age' =>'required|integer',
//                'Student.sex' =>'required|integer'
//            ],[
//                'required' => ':attribute 不能为空',
//                'min' => ':attribute 长度不符合要求',
//                'integer' => ':attribute 只能为整数',
//            ],[
//                'Student.name' => '姓名',
//                'Student.age' => '年龄',
//                'Student.sex' => '性别',
//            ]);

            // 2. validator类验证
            $validator = Validator::make($request->input(),[
                'Student.name' => 'required|min:2|max:20',
                'Student.age' =>'required|integer',
                'Student.sex' =>'required|integer'
            ],[
                'required' => ':attribute 不能为空',
                'min' => ':attribute 长度不符合要求',
                'integer' => ':attribute 只能为整数',
            ],[
                'Student.name' => '姓名',
                'Student.age' => '年龄',
                'Student.sex' => '性别',
            ]);
            if($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }



            $data = $request->input('Student');
            if(Student::create($data)) {
                return redirect('student/index')->with('success','添加成功');
            }else {
                return redirect()->back();
            }
        }
        return view('student.create',[
            'student' => $student
        ]);
    }

    // 保存添加
    public function save(Request $request){
        $data = $request->input('Student');
        $student = new Student();
        $student->name = $data['name'];
        $student->age = $data['age'];
        $student->sex = $data['sex'];
        if($student->save()){
            return redirect('student/index');
        } else {
            return redirect()->back();
        }

        var_dump($data);
    }

    public function update(Request $request,$id){
        $student = Student::find($id);
        if($request->isMethod('POST')){
            $validator = Validator::make($request->input(),[
                'Student.name' => 'required|min:2|max:20',
                'Student.age' =>'required|integer',
                'Student.sex' =>'required|integer'
            ],[
                'required' => ':attribute 不能为空',
                'min' => ':attribute 长度不符合要求',
                'integer' => ':attribute 只能为整数',
            ],[
                'Student.name' => '姓名',
                'Student.age' => '年龄',
                'Student.sex' => '性别',
            ]);
            if($validator->fails()){
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $request->input('Student');
            $student->name = $data['name'];
            $student->age = $data['age'];
            $student->sex = $data['sex'];
            if($student->save()) {
                return redirect('student/index')->with('success','修改成功-'.$id);
            }else {
                return redirect()->back();
            }

        }
        return view('student.update', [
            'student' => $student
        ]);
    }

    public function detail($id){
        $student = Student::find($id);

        return view('student.detail', [
            'student' => $student
        ]);
    }

    public function delete($id){
        $student = Student::find($id);
        if($student->delete()) {
            return redirect('student/index')->with('success','删除成功-'.$id);
        }else {
            return redirect('student/index')->with('error','删除失败-'.$id);
        }

    }

    public function upload(Request $request){
        if($request->isMethod('POST')){
            $file = $request->file('source');

            // 文件是否上传成功
            if($file ->isValid()){
               // dd($file);
                // 原文件名
                $originalName = $file->getClientOriginalName();
                  $size = $file->getSize();
                // 扩展名
                $ext = $file->getClientOriginalExtension();
                // 文件类型
                $type = $file->getClientMimeType();
                // 临时文件的绝对路径
                $realPath = $file->getRealPath();

                $fileName  = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$ext;

                $bool = Storage::disk('uploads')->put($fileName,file_get_contents($realPath));

                var_dump($bool);
            }
            exit;
        }
        return view('student.upload');
    }


    public function mail(){
        // 发送文本内容
        Mail::raw('邮件内容,测试测试',function ($message){
            // 指定发送人的邮箱和名称
            $message->from('yancy_dev_mail@163.com','yancy');
            // 邮件的主题
            $message->subject('邮件的主题 测试');
            // 发送给谁
            $message->to('liaoyansem@163.com');

        });
        // 发送html
//        Mail::send('student.mail',['name'=>'sean'],function($message){
//            $message->to('liaoyansem@163.com');
//        });
    }

    public function setCache(){

        /**
         * put() 保存对象到缓存
         * 第一个参数是键
         * 第二个参数是值
         * 第三个参数是有效期(分钟)
         */
//        Cache::put('key','value',10);
        /**
         * 假如key存在，则添加失败，key不存在，添加成功
         */
//        $bool = Cache::add('key','value1',10);
//        var_dump($bool);
        /**
         * 永久的保存对象到缓存
         */
        Cache::forever('key','value1');
        /**
         * has() 判断key是否存在
         */

    }

    public function getCache(){
        // has() 判断指定键值是否存在
//        if(Cache::has('key3')){
//            $val = Cache::get('key3');
//            var_dump($val);
//        }else{
//            echo 'no';
//        }

        // pull() 会在取出后删除缓存
//        $val = Cache::pull('key');
//        var_dump($val);
        // forget() 从缓存中删除对象，删除成功返回TRUE
//        $bool = Cache::forget('key');
//        var_dump($bool);

    }

    public function log(){
        Log::info('这是一个Info级别的方法');
        Log::warning('这是一个Info级别的方法');
        Log::error('这是一个数组',['name'=>'sean','age'=>18]);
        echo '成功';
        exit;
    }

    public function queue(){
        dispatch(new SendEmail('liaoyansem@163.com'));

    }
}