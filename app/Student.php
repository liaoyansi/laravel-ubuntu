<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model{

    const SEX_UN = 0;  //未知
    const SEX_BOY = 1; // 男
    const SEX_GRIL = 2;    //女

    // 设置表名
    protected $table = 'student';

    // 设置批量复制
    protected $fillable = ['name', 'age', 'sex'];

    // 设置自动维护时间
    public $timestamps = true;

    protected function getDateFormat()
    {
        return time();
    }

    protected function asDateTime($val)
    {
        return $val;
    }

    /**
     * 获得性别
     * @param null $ind
     * @return array|mixed
     */
    public function sex($ind = null){
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男',
            self::SEX_GRIL => '女'
        ];

        if($ind !== null){
            return array_key_exists($ind,$arr)? $arr[$ind] : $arr[self::SEX_UN];
        }

        return $arr;
    }

}