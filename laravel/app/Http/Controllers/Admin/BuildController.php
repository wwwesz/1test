<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\BaseController;
use Illuminate\Http\Request;
use App\Build;
use App\Image;
use App\Type;
use Illuminate\Support\Facades\DB;
class BuildController extends BaseController
{
    public function add() //添加页
    {
        return view('admin/add');
    }

    public function doAdd(Request $request)//执行添加页
    {

        $arr = $request->all();
        unset($arr['_token']);//删除令牌

     $arr['tidstr'] = $arr['p'].'/'.$arr['c'].'/'.$arr['d'];
        unset($arr['p']);
        unset($arr['c']);
        unset($arr['d']);
        var_dump($arr);

        $bulid = new Build();
        if(isset($arr['image'])){
            $images = $arr['image'];
            unset($arr['image']);//删除


            $id=$bulid->insertGetId($arr);//获取id
            $image = new Image;

          foreach ($images as $v){
              $file= $v;
              $path = $file->store('','my');//放回的是图片的路径
              $data = ['path'=>$path,'bid'=>$id];
              $image->insert($data);
              $i ='选择图片 文件添加成功';
          }

        }else {
            $i ='没有选择图片 文件上传成功';
            $id=$bulid->insertGetId($arr);

        }
        //页面跳转
        return redirect(url('admin/add'))->with('m',$i);
    }



    public function oper() //展示页
    {
//      $cols =$build->join('image as i','i.bid','=','build.id')->select('build.*',"i.path")->get();
//      $res =$build->get();
     //   $cols =$build->leftjoin('image','build.id','=','image.bid')->get();
        $image = new Image();
        $sub =  $image->select(['path'])->selectRaw('min(bid) as bid')->groupBy('bid');//子查询

        $build = new Build();
       $cols = $build->leftJoin(DB::raw("({$sub->toSql()}) as b"),'build.id','=','b.bid')->paginate(6); //左链接





        //var_dump($cols);
       // exit;
        return view('admin/oper',['cols'=>$cols]);
    }


    public function del(Request $request)//删除数据
    {
        $arr = $request->all();
       // var_dump($arr);
       if(isset($arr['id'])){
        unset($arr['_token']);
        $build = new Build();
        $img = new Image();


        foreach ($arr['id'] as $v){
           $cols= $img->where('bid','=',$v)->get()->toArray();//查询出path
            $img->where('bid','=',$v)->delete();//删图片数据库
           foreach ($cols as $vv) {
                if(isset($vv['path'])) {
                    $oldpath = $vv['path'];

                    unlink(public_path('upload') . '/' . $oldpath);//循环删除图片
                }
           }
           $build->where('id','=',$v)->delete();
        }

        return redirect(url('admin/oper'))->with('mi','删除成功');
    }else{
         return redirect(url('admin/oper'))->with('mi','没有选择图片');
    }


    }

    public function operOne($id)
    {
        $build = new Build();
        $cols =$build::find($id);
        $tidstr=$cols->tidstr;//取出详细地址
        $a = explode('/',$tidstr);
        $type = new Type();
        $str = '';
        foreach ($a as $v)
        {
          $name = $type->where('id','=',$v)->first()->name;
            $str .=$name.'/';

        }
        $str = mb_substr($str,0,mb_strlen($str)-1);


        $arr=$cols->toArray();
        $arr['tidstr'] = $str;//替换详细地址
        //取出图片传入
        $img = new Image();
        $imgs=$img->where('bid','=',$id)->get()->toArray();




        return view('admin/operOne',['arr'=>$arr,'imgs'=>$imgs]);
    }

    //修改界面
    public function edit($id)
    {
        $build = new Build();
        $cols =$build::find($id);
        $tidstr=$cols->tidstr;//取出详细地址
        $a = explode('/',$tidstr);
        $type = new Type();
        $str = '';
        foreach ($a as $v)
        {
            $name = $type->where('id','=',$v)->first()->name;
            $str .=$name.'/';

        }
        $str = mb_substr($str,0,mb_strlen($str)-1);


        $arr=$cols->toArray();
        $arr['tidstr'] = $str;//替换详细地址
        //取出图片传入
        $img = new Image();
        $imgs=$img->where('bid','=',$id)->get()->toArray();




        return view('admin/edit',['arr'=>$arr,'imgs'=>$imgs]);
    }

    public function doEdit(Request $request){ //执行修改页面
        $data = $request->all();

        unset($data['_token']);
        $id=$data['id'];//id =image.bid



        unset($data['id']);
        $build = new build();
        $images = new Image();
        if(isset($data['image'])) {
            $imgs = $data['image'];
            unset($data['image']);
           // var_dump($imgs);
            foreach ($imgs as $v){
                $file= $v;
                $path = $file->store('','my');//放回的是图片的路径
                $d = ['path'=>$path,'bid'=>$id];
                $images->insert($d);
                $i ='  图片上传成功';
            }

        }else {
            $i ='   没有选择图片';


        }

       $re= $build->where('id',$id)->update($data);
       if($re){
           return redirect()->back()->with('mi','修改成功'.$i);
       }else{
           return redirect()->back()->with('mi',''.$i);
       }

    }

    public  function delete($id)
    {
        //var_dump($id);
        //删除id对应的image表数据
        $images = new Image();
        //删除本身路径
        $cols = $images->where('id',$id)->first();
        if(isset($cols)) {
            $oldpath = $cols->path;
            unlink(public_path('upload') . '/' . $oldpath);

        }
          // var_dump($oldpath);
         // exit();
        //删除数据库文件
        $res = $images->where('id',$id)->delete();
        if($res){
            return redirect()->back()->with('mi','删除图片成功');
        }else{
            return redirect()->back()->with('mi','删除图片失败');
        }



    }


}