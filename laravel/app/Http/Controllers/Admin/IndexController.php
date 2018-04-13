<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\BaseController;


class IndexController extends BaseController
{
    public function index() //首页
    {

        return view('admin/index');
    }




}