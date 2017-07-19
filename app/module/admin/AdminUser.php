<?php

namespace App\module\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;

class AdminUser extends Authenticatable
{
    //
    protected $table = 'admin_users';

    protected $fillable = [
        'username', 'nickname', 'email','phone',
        'type','password','login_time','login_ip',
        'last_login_time','last_login_ip','active'
    ];

    public $timestamps = false;

    protected $dateFormat = 'U';

    protected function getDateFormat()
    {
        return time();
    }

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function login(Request $request){
        $this->last_login_time = $this->login_time;
        $this->last_login_ip = $this->login_ip;
        $this->login_time = time();
        $this->login_ip = $request->ip();
        $this->updated_at = time();
        $this->save();
    }
}
