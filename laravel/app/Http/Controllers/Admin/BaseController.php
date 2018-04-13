<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
class BaseController extends Controller
{
    public function __construct()
    {

        $this->middleware('check');

            //如果session中没有这个admin 就跳回登录界面 提示登录失败,密码错误或账号不存在
    }


}
