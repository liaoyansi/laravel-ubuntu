<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // 设置表名
    protected $table = 'comments';

    protected $fillable = ['nickname', 'email', 'website', 'content', 'article_id'];

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
}
