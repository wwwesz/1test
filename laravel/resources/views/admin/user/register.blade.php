@extends('public/base')

@section('main')



          <div class="tpl-portlet-components">
            <div class="portlet-title">
                <div class="caption font-green bold">
                    <span class="am-icon-code"></span>管理员注册页面
                    @if(session()->has('message'))
                        <small class="font-red"> {{session()->get('message')}}&nbsp;</small>
                    @endif
                </div>

            </div>
            <div class="tpl-block ">

                <div class="am-g tpl-amazeui-form">


                    <div class="am-u-sm-12 am-u-md-9">
                        <form class="am-form am-form-horizontal" action="{{url('admin/user/doRegister')}}" method="post">
                            <div class="am-form-group">
                                <label for="user-name" class="am-u-sm-3 am-form-label">账号/account</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="user-name" name='username' placeholder="请输入6-20位数字字母组合" value="{{old('username')}}">
                                    <small class="font-red">{{$errors->first('username')}}</small>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="user-name1" class="am-u-sm-3 am-form-label">昵称/nick</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="user-name1" name='nick' placeholder="不超过10个字符"  value="{{old('nick')}}">
                                    <small class="font-red">{{$errors->first('nick')}}</small>
                                </div>
                            </div>


                    <div class="am-form-group">
                                <label for="user-email" class="am-u-sm-3 am-form-label">密码/password</label>
                                <div class="am-u-sm-9">
                                    <input type="password" id="user-email" placeholder="输入你的密码" name="password" value="{{old('password')}}" >
                                    <small class="font-red">{{$errors->first('password')}}</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-phone" class="am-u-sm-3 am-form-label">再次输入密码/repassword</label>
                                <div class="am-u-sm-9">
                                    <input type="password" id="user-phone" placeholder="确认密码" name="repassword" >
                                    <small class="font-red">{{$errors->first('repassword')}}</small>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-QQ" class="am-u-sm-3 am-form-label">密保问题用于找回密码</label>
                                <div class="am-u-sm-9">
                                    <select name="issue" id="">
                                        <option value="0" selected="selected">您的小学</option>
                                        <option value="1">您的中学</option>
                                        <option value="2">您的老师</option>

                                    </select>
                                </div>
                            </div>

                            <div class="am-form-group">
                                <label for="user-weibo" class="am-u-sm-3 am-form-label">请填写选项</label>
                                <div class="am-u-sm-9">
                                    <input type="text" id="user-weibo" name="key" placeholder="输入您的选项,确保丢失的情况下及时找回"  value="{{old('key')}}">
                                    <small class="font-red">{{$errors->first('key')}}</small>
                                </div>
                            </div>


                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">{{csrf_field()}}
                                    <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>











@endsection