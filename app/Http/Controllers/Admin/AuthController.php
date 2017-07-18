<?php

namespace App\Http\Controllers\Admin;

use App\module\admin\AdminUser;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ResetsPasswords;


class AuthController  extends Controller
{
    //
    use AuthenticatesUsers,RegistersUsers;

//    protected $redirectTo = '/admin';
//    protected $guard = 'admin';
//    protected $loginView = 'admin.login';
//    protected $registerView = 'admin.register';

//    public function __construct()
//    {
//        $this->middleware('guest:admin', ['except' => 'logout']);
//    }

//    protected function validator(array $data)
//    {
//
//        return Validator::make($data, [
//            'username' => 'required|max:255',
//            'email' => 'required|email|max:255|unique:admins',
//            'password' => 'required|confirmed|min:6',
//        ]);
//
//    }

    //登录
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = $this->validateLogin($request->input());
            if ($validator->fails()) {
                return Redirect()->back()->withErrors($validator)->withInput();
            }
            if (Auth::guard('admin')->attempt(['username'=>$request->username, 'password'=>$request->password])) {
                return Redirect('admin')->with('success', '登录成功！');     //login success, redirect to admin
            } else {
                return Redirect()->back()->with('error', '账号或密码错误')->withInput();
            }
        }
        return view('admin.login');
    }

    //登录页面验证
    protected function validateLogin(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|alpha_num',
            'password' => 'required',
        ], [
            'required' => ':attribute 为必填项',
            'min' => ':attribute 长度不符合要求'
        ], [
            'username' => '账号',
            'password' => '密码'
        ]);
    }

    //退出登录
    public function logout()
    {
        if(Auth::guard('admin')->user()){
            Auth::guard('admin')->logout();
        }
        return Redirect('admin/login');
    }

    //注册
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = $this->validateRegister($request->input());
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $user = new AdminUser();
            $user->nickname = $request->nickname;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->create_time = time();
            $user->update_time = time();
            if($user->save()){
                return redirect('admin/login')->with('success', '注册成功！');
            }else{
                return redirect()->back()->with('error', '注册失败！')->withInput();
            }
        }
        return view('admin.register');
    }

    protected function validateRegister(array $data)
    {
        return Validator::make($data, [
            'nickname' => 'required|alpha_num|max:255',
            'username' => 'required|alpha_num|unique:admin_users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6|'
        ], [
            'required' => ':attribute 为必填项',
            'min' => ':attribute 长度不符合要求',
            'confirmed' => '两次输入的密码不一致',
            'unique' => '该账户已存在',
            'alpha_num' => ':attribute 必须为字母或数字',
            'max' => ':attribute 长度过长'
        ], [
            'nickname' => '昵称',
            'username' => '账号',
            'password' => '密码',
            'password_confirmation' => '确认密码'
        ]);
    }
}
