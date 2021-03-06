<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    // 设置表名
    protected $table = 'articles';

    // 设置批量复制
    protected $fillable = ['title', 'body'];

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

    public function hasManyComments()
    {
        return $this->hasMany('App\Comment', 'article_id', 'id');
    }
}
