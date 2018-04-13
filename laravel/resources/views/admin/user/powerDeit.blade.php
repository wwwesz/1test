@extends('public/base')

@section('main')



    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span>权限编辑及其内容修改
                @if(session()->has('message'))
                    <small class="font-red"> {{session()->get('message')}}&nbsp;</small>
                @endif
            </div>

        </div>
        <div class="tpl-block ">

            <div class="am-g tpl-amazeui-form">


                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" action="{{url('admin/user/doPowerDeit')}}" method="post">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">账号/account</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name" name='username' placeholder="请输入6-20位数字字母组合" value="{{$col->username}}">
                                <small class="font-red"></small>
                            </div>
                        </div>
                           <div class="am-form-group">
                            <label for="user-name1" class="am-u-sm-3 am-form-label">昵称/nick</label>
                            <div class="am-u-sm-9">
                                <input type="text" id="user-name1" name='nick' placeholder="不超过10个字符"  value="{{$col->nick}}">
                                <small class="font-red"></small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name1" class="am-u-sm-3 am-form-label">权限设置/power</label>
                            <div class="am-u-sm-9">
                                <select name="power" id="">
                                    <option @if($col->power == 0) selected="selected" @endif value="0">初级权限</option>
                                    <option @if($col->power == 1) selected="selected" @endif value="1">中级权限</option>
                                    <option @if($col->power == 2) selected="selected" @endif value="2">高级权限</option>

                                </select>
                                <small class="font-red"></small>
                            </div>
                        </div>







                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">{{csrf_field()}}
                                <input type="hidden" name="id" value="{{$col->id}}">
                                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>











@endsection