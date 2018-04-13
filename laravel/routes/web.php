<?php



Route::group(['prefix'=>'admin','namespace'=>'admin'],function() {
    //子路由
    Route::get('login', "UserController@index");   //这个是登录界面
    Route::get('logout', "UserController@logout");
    Route::post('user/check',"UserController@check");//登录中间的验证器
    Route::get('/', "IndexController@index"); //进入后台主页面
    Route::get('user/register', "UserController@register");//后台注册页面
    Route::post('user/doRegister', "UserController@doRegister");//执行注册
    //用户管理
    Route::get('user/oper','UserController@oper');//用户展示页面
    Route::get('user/power','UserController@power');//用户权限设置页面
    Route::get('user/powerDeit/{id}','UserController@powerDeit');//用户权限修改
    Route::get('user/powerDel/{id}','UserController@powerDel');//用户权限删除
    Route::post('user/doPowerDeit','UserController@doPowerDeit');//执行修改权限

    Route::get('add','BuildController@add');//楼房的增
    Route::post('doAdd','BuildController@doAdd');//楼房的展示
    Route::get('oper','BuildController@oper');//楼房的展示
    Route::get('operOne/{id}','BuildController@operOne');//楼房详情页
    Route::get('edit/{id}','BuildController@edit');//楼房编辑页面
    Route::post('doEdit','BuildController@doEdit');//执行编辑页面
    Route::get('delete/{id}','BuildController@delete');//编辑页面图片删除
    Route::post('del','BuildController@del');//全部删除楼房信息
    Route::get('type','TypeController@type');//地理位置的添加
    Route::post('doType','TypeController@doType');//地理位置添加页
    Route::get('ajax','TypeController@ajax');//三级联动方法


});

//前台
Route::get('/','IndexController@index');//前台首页
Route::get('oper/{id}','IndexController@oper');//前台个人页面
Route::get('type/{id}','IndexController@type');
Route::get('group/{id}','IndexController@group');
