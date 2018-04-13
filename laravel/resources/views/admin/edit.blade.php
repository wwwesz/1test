@extends('public/base')

@section('main')


    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-red bold">
                房源修改页面<small class="font-red"> @if(session()->has('mi'))
                        {{session()->get('mi')}}&nbsp;
                    @endif</small>
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">

                    </div>
                </div>
            </div>


        </div>

        <div class="tpl-block">

            <div class="am-g">
                <div class="tpl-form-body tpl-form-line">
                    <form class="am-form tpl-form-line-form" method="post" enctype="multipart/form-data" action="{{url('admin/doEdit')}}">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">楼房名 <span class="tpl-form-line-small-title">Title</span></label>

                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="title" value="{{$arr['title']}}" placeholder="请输入标题文字">
                                <small>请填写标题文字10-20字左右。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">具体位置<span class="tpl-form-line-small-title">tidstr</span></label> <div class="am-u-sm-9">
                                <p>{{$arr['tidstr']}}</p>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">详细地址 <span class="tpl-form-line-small-title">Address</span></label>

                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="address" value="{{$arr['address']}}" placeholder="请输入标题文字">
                                <small>具体到门牌号</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">地铁口 <span class="tpl-form-line-small-title">Metro</span></label>

                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="metro" value="{{$arr['metro']}}" placeholder="请输入标题文字">
                                <small>具体地铁几号线路如没有请不填写</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name1" class="am-u-sm-3 am-form-label">面积 <span class="tpl-form-line-small-title">Area</span></label>

                            <div class="am-u-sm-9">
                                <input type="number" id="user-name1" name="area" placeholder="单位是平方米" value="{{$arr['area']}}" required="required" style="width: 150px">
                                <small>只能输入数字必填</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name1" class="am-u-sm-3 am-form-label">每平方单价 <span class="tpl-form-line-small-title">Price</span></label>

                            <div class="am-u-sm-9">
                                <input type="number" id="user-name1" name="price" placeholder="单位是RMB" value="{{$arr['price']}}" required="required" style="width: 150px">
                                <small>只能输入数字必填</small>
                            </div>
                        </div>






                        <div class="am-form-group">
                            <label for="user-wenjian" class="am-u-sm-3 am-form-label">是否上传图片<span class="tpl-form-line-small-title"> images</span></label>
                            <div class="am-u-sm-9">
                                <div>
                                    <input type="file" id="user-wenjian" name="image[]" multiple="multiple">
                                </div>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-wenjian1" class="am-u-sm-3 am-form-label">原有图片 <small>点击删除</small><span class="tpl-form-line-small-title"> images</span></label>
                            <div class="am-u-sm-9">
                                <div>
                                    @foreach($imgs as $v)
                                        <a href="{{url('admin/delete',['id'=>$v['id']])}}" id="{{$v['id']}}" onclick="if(!confirm('是否确删除这张图片?'))return false;"> <img src="{{asset('')}}upload/{{$v['path']}}" alt="图片错误" width="20%" title="点击删除" height="20%"></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">业务员 <span class="tpl-form-line-small-title">name</span></label>
                            <div class="am-u-sm-9">

                                <p id="user-weibo">{{session()->get('username')}}</p>
                                <div>

                                </div>
                            </div>
                        </div>



                        <div class="am-form-group">
                            <label for="content" class="am-u-sm-3 am-form-label">文章内容</label>
                            <div class="am-u-sm-9">
                                <textarea class="" rows="5" id="content" name="content" placeholder="请输入文章内容">{{$arr['content']}}</textarea>



                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$arr['id']}}">
                                <input type="submit"  class="am-btn am-btn-danger tpl-btn-bg-color-danger " value="确认修改">

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


    </div>

    <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
















@endsection