@extends('public/base')

@section('main')




    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-blue bold">

                <a href="{{url('admin/oper')}}">返回详情页面</a>


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
                    <form class="am-form tpl-form-line-form" method="post" enctype="multipart/form-data" action="{{url('admin/doAdd')}}">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">楼房名 <span class="tpl-form-line-small-title">Title</span></label>

                            <div class="am-u-sm-9">
                                <p>{{$arr['title']}}</p>

                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">具体位置  <span class="tpl-form-line-small-title">Tidstr</span></label> <div class="am-u-sm-9">
                             <p>{{$arr['tidstr']}}</p>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">详细地址 <span class="tpl-form-line-small-title">Address</span></label>

                            <div class="am-u-sm-9">
                                <p>{{$arr['address']}}</p>

                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">地铁口 <span class="tpl-form-line-small-title">Metro</span></label>

                            <div class="am-u-sm-9">
                              <p>{{$arr['metro']}}</p>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name1" class="am-u-sm-3 am-form-label">面积 <span class="tpl-form-line-small-title">Area</span></label>

                            <div class="am-u-sm-9">
                                <p>{{$arr['area']}}</p>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name1" class="am-u-sm-3 am-form-label">每平方单价 <span class="tpl-form-line-small-title">Price</span></label>

                            <div class="am-u-sm-9">
                                <p>{{$arr['price']}}</p>
                            </div>
                        </div>






                        <div class="am-form-group">
                            <label for="user-wenjian" class="am-u-sm-3 am-form-label">图片<span class="tpl-form-line-small-title"> images</span></label>
                            <div class="am-u-sm-9">
                                <div>
                                  @foreach($imgs as $v)
        <img src="{{asset('')}}upload/{{$v['path']}}" alt="" width="20%" height="20%">


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
                               <p>{{$arr['content']}}</p>


                            </div>
                        </div>


                    </form>

                </div>
            </div>
        </div>


    </div>

    <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>














@endsection





