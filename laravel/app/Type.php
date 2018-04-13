<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//无极限列表
class Type extends Model
{
    protected $table = 'type'; // 默认 数据库



    public function getTree($pid = 0,$arr=[],$lv=0)
    {
        $cols = $this->where('pid','=',$pid)->get();

        //重复调用
        $lv++;
        foreach($cols as $v)
        {

            $arr[$v->id] = [$v->name,$lv];

            //马上获取子
             $arr = $this->getTree($v->id,$arr,$lv);

        }

        return $arr;
    }

}
