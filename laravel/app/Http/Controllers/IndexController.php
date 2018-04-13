<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Build;
use App\Type;
use App\Image;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $image = new Image();
        $sub =  $image->select(['path'])->selectRaw('min(bid) as bid')->groupBy('bid');//子查询

        $build = new Build();
        $cols = $build->leftJoin(DB::raw("({$sub->toSql()}) as b"),'build.id','=','b.bid')->get();
      //  var_dump($cols);





         $type = new Type();
         $t =$type->where('pid','=','0')->get();
         $group = $build->select('metro')->groupBy('metro')->get()->toArray();



        //var_dump($group);
       return view('oper',['cols'=>$cols,'t'=>$t,'group'=>$group]);
    }

    public function oper($id)
    {
        $build = new Build();
        $col = $build->where('id',$id)->first();
        $arr = explode('/',$col->tidstr);
        $type  = new Type();
        foreach ($arr as $a)
        {
            $res = $type->where('id','=',$a)->first();
            $name = $res->name;
            @$str  .='>'.$name;
        }




        $img =new Image();
        $imgs =$img->where('bid',$id)->first();

        return view('operOne',['col'=>$col,'imgs'=>$imgs,'str'=>$str]);

    }


    public  function type($name)
    {
        $type = new Type();
        $t =$type->where('pid','=','0')->get();

        $col= $type->where('name','like',$name)->first();
        $id = $col->id;



        $image = new Image();
        $sub =  $image->select(['path'])->selectRaw('min(bid) as bid')->groupBy('bid');//子查询

        $build = new Build();
        $cols = $build->where('tidstr','like',$id.'%')->leftJoin(DB::raw("({$sub->toSql()}) as b"),'build.id','=','b.bid')->get();
        //  var_dump($cols);

        $group = $build->select('metro')->groupBy('metro')->get()->toArray();

        return view('oper',['cols'=>$cols,'t'=>$t,'group'=>$group]);

    }


    public function group($name)
    {
      //  var_dump($name);
        $type = new Type();
        $t =$type->where('pid','=','0')->get();





        $image = new Image();
        $sub =  $image->select(['path'])->selectRaw('min(bid) as bid')->groupBy('bid');//子查询

        $build = new Build();
        $cols = $build->where('metro','=',$name)->leftJoin(DB::raw("({$sub->toSql()}) as b"),'build.id','=','b.bid')->get();

        $group = $build->select('metro')->groupBy('metro')->get()->toArray();

        return view('oper',['cols'=>$cols,'t'=>$t,'group'=>$group]);
    }
}


