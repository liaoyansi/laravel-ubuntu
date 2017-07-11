<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {
    public function index(){
        $data['students'] = Student::paginate(5);

        return view('student.index',$data);
    }

    // 添加页面
    public function create(){
        return view('student.create');
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
}