<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use App\Type;

class TypeController extends BaseController
{
    public  function type()
    {

        return view('admin/type');
    }

    public function ajax()//三级联动的传值
    {
        //var_dump($_GET);
        $pid = $_GET['pid'];
        $type = new Type;
        $cols=$type->where('pid','=',$pid)->get();
        $arr = $cols->toArray();
        echo json_encode($arr);
    }



    public function doType(Request $request)//执行添加页
    {

        $data = $request->all();

        $name = $data['name'];
        $type = new Type;
        $re= $type->where('name','=',$name)->first();


        if($re){
            return redirect(url('admin/type'))->with('message','保存失败无法重复添加');
        }else{
            unset($data['_token']);
            if($data['p']== -1 && $data['c']== -1&&$data['d']==-1){
                return redirect(url('admin/type'))->with('me','请选择所在地');
            }elseif ($data['p'] != -1&&$data['c']== -1&&$data['d']==-1){
                $data['pid']=$data['p'];
                unset($data['p']);
                unset($data['c']);
                unset($data['d']);

            }elseif ($data['p'] != -1&&$data['c']!= -1){
                $data['pid']=$data['c'];
                unset($data['p']);
                unset($data['c']);
                unset($data['d']);
            }

            $type->insert($data);
            return redirect(url('admin/type'))->with('message','保存成功');
        }

    }
}