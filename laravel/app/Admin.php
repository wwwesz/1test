<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin'; // 默认 数据库
    public $timestamps = true;   //产生自动添加时间
    //常量属性来制定字段名称
    const CREATED_AT = 'addtime';
    const UPDATED_AT = 'updatetime';
    protected $fillable=['username','nick','password','issue','key','addtime','updatetime'];
}
