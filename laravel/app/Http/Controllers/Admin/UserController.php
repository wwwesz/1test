<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use  Illuminate\Http\Request;
use App\Admin;

class UserController extends Controller
{
    public function index()
    {
        return view('admin/user/index');
    }

    function check(Request $request)  //验证是否可行
    {
       // var_dump($request->all());
        //exit;

        $username = $request->get('username');
        $password = $request->get('password');
        $password = md5($password);
        $admin = new Admin();
        $cols = $admin->where('username','=',$username)->where('password','=',$password)->first();

        if($cols)
        {

            session(['nick'=>$cols->nick,'power'=>$cols->power]);
            //登录成功跳转回主页面
           // var_dump(session('username'));
            //exit;
            return redirect(url('admin'));//或者一个扛都可以 url('/')
        }else{
            //登录失败 跳转回登录页面
            return redirect()->back()->with('message','登录失败(用户名或者密码错误)');
        }
    }
    public function logout(){
        //销毁session
        session()->flush();

        return redirect(url('admin'));
    }

    public function register()
    {
        return view('admin/user/register');
    }

    public function doRegister(Request $request)//注册验证功能
    {
        $this->validate($request,
            [
                'username'=>'required|unique:admin|max:20|min:5|regex:/^[0-9a-zA_Z]+$/',
                'nick'=>'required|max:20',
                'password'=>'required',
                'repassword'=>'required|same:password',
                'key'=>'required',
            ],
            [
                'username.required'=>"姓名不能为空",
                'username.max'=>"用户名输入最大20位",
                'username.min'=>"用户名输入最小5位",
                'username.unique'=>"用户名已经存在",
                'username.regex'=>"用户名只允许数字字母",
                'nick.required'=>"昵称不能为空",
                'nick.max'=>"昵称不能超过20位",
                'password.required'=>"密码不能为空",
                'repassword.same'=>"密码与确认密码不相同不能为空",
                'repassword.required'=>"内容不能为空",
                'key.required'=>"密保不能为空",
            ]
        );
        $arr = $request->all();
        $arr['password'] = md5($arr['password']);//md5加密
        $admin = new Admin();
        $res = $admin->create($arr);

        if($res){
            return redirect()->back()->with('message','注册成功');
        }else{
            return redirect()->back()->with('message','注册失败');
        }

    }



    public function oper()  //用户展示页面
    {
        $admin = new Admin();
        $cols = $admin->orderBy('power','desc')->paginate(5);

        return view('admin/user/oper',['cols'=>$cols]);
    }

    public function power()  //用户权限设置页面
    {
        $admin = new Admin();
        $cols = $admin->orderBy('power','desc')->paginate(5);


        return view('admin/user/power',['cols'=>$cols]);
    }

    public function powerDeit($id)//执行编辑
    {
        $admin = new Admin();
        $col =  $admin->where('id','=',$id)->first();
        //var_dump($col);
        return view('admin/user/powerDeit',['col'=>$col]);
    }

    public function doPowerDeit(Request $request)//执行编辑
    {

        $arr=$request->all();
        unset($arr['_token']);
        //var_dump($arr);
        $id = $arr['id'];
        unset($arr['id']);
        $admin = new Admin();
        $res = $admin->where('id',$id)->update($arr);
        if($res){
            return redirect()->back()->with('message','修改成功');
        }else{
            return redirect()->back()->with('message','修改失败');
        }

    }


    public function powerDel($id)//执行删除
    {

        $admin = new Admin();
        $re =$admin->where('id','=',$id)->delete();
        if($re){
            return redirect()->back()->with('message','删除成功');
        }else{
            return redirect()->back()->with('message','删除失败');
        }
    }


    }