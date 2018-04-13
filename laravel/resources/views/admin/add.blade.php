@extends('public/base')

@section('main')


    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                房源添加页  @if(session()->has('m'))
                   <small class="font-red"> {{session()->get('m')}}&nbsp;</small>
                @endif
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
                                <input type="text" class="tpl-form-input" id="user-name" name="title" placeholder="请输入标题文字">
                                <small>请填写标题文字10-20字左右。</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">选择具体位置  <span class="tpl-form-line-small-title">Title</span></label> <div class="am-u-sm-9">
                                <select name="p" id="p" data-am-selected="{searchBox: 1}">
                                    <option value="0"></option>
                                </select>
                                <select name="c" id="c" data-am-selected="{searchBox: 1}">
                                    <option value="0"></option>
                                </select>
                                <select name="d" id="d" data-am-selected="{searchBox: 1}">
                                    <option value="0"></option>
                                </select>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">详细地址 <span class="tpl-form-line-small-title">Address</span></label>

                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="address" placeholder="请输入标题文字">
                                <small>具体到门牌号</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">地铁口 <span class="tpl-form-line-small-title">Metro</span></label>

                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="user-name" name="metro" placeholder="请输入标题文字">
                                <small>具体地铁几号线路如没有请不填写</small>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label for="user-name1" class="am-u-sm-3 am-form-label">面积 <span class="tpl-form-line-small-title">Area</span></label>

                            <div class="am-u-sm-9">
                                <input type="number" id="user-name1" name="area" placeholder="单位是平方米" required="required" style="width: 150px">
                                <small>只能输入数字必填</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name1" class="am-u-sm-3 am-form-label">每平方单价 <span class="tpl-form-line-small-title">Price</span></label>

                            <div class="am-u-sm-9">
                                <input type="number" id="user-name1" name="price" placeholder="单位是RMB" required="required" style="width: 150px">
                                <small>只能输入数字必填</small>
                            </div>
                        </div>






                        <div class="am-form-group">
                            <label for="user-wenjian" class="am-u-sm-3 am-form-label">图片<span class="tpl-form-line-small-title"> images</span></label>
                            <div class="am-u-sm-9">
                                <div>
                                    <input type="file" id="user-wenjian" name="image[]" multiple="multiple">
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
                                <textarea class="" rows="5" id="content" name="content" placeholder="请输入文章内容"></textarea>



                            </div>
                        </div>

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                {{csrf_field()}}
                                <input type="hidden" name="username" value="{{session()->get('username')}}">
                                <input type="submit"  class="am-btn am-btn-primary tpl-btn-bg-color-success " value="提交">

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


    </div>

    <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>

    <script type="text/javascript">
        //就绪函数
        $(function(){
            //页面加载完成后,通过ajax获取省级行政单位,并且填充到"省份"下拉列表中
            $.ajax({
                type:'get',
                url:"{{url('admin/ajax')}}",
                data:{"pid":0},//第二种
                success:function(response){
                    // console.log(response);
                    //console.log(s);
                    var obj = $.parseJSON(response);
                    // console.log(obj);
                    //如何将数字中的元素追加到下拉列表中??

                    //清空省份下拉框中的历史选项
                    $('[name="p"]').empty().append("<option value='-1'>区</option>");//父类id=-1就取不到东西



                    $(obj).each(function(index,value){
                        //console.log(value.name);
                        $('[name="p"]').append("<option value='"+value.id+"'>"+value.name+"</option>");//内容的拼接
                    });
                }
            });



            //在追加选项之前,清空历史记录

            $('#p').change(function(){
                //省份的id???
                //console.log($(this).val());
                var id = $(this).val();
                $.ajax({
                    type:'get',
                    url:"{{url('admin/ajax')}}",
                    data:{pid:id},//第二中方法
                    success:function(response){
                        //console.log(response);
                        var cities = $.parseJSON(response);
                        //console.log(cities);
                        //清空城市下拉框中的历史选项
                        $('[name="c"]').empty().append('<option value="-1">街道</option>');	//父类id=-1就取不到东西
                        $('#d').empty().append('<option value="-1">具体地址</option>');//也要清空区县的历史记录

                        $.each(cities,function(index,value){
                            $('[name="c"]').append("<option value='"+value.id+"'>"+value.name+"</option>");

                        });
                    }
                });

            });

            $('#c').change(function(){
                var id = $(this).val();
                $.ajax({
                    type:'get',
                    url:"{{url('admin/ajax')}}",
                    data:'pid='+id,  //第三种方式
                    success:function(res){
                        var district =$.parseJSON(res);
                        //清空历史记录
                        $('[name="d"]').empty().append('<option value="-1">具体地址</option>');

                        $.each(district,function(index,value){
                            $('[name="d"]').append("<option value='"+value.id+"'>"+value.name+"</option>");
                        });
                    }
                });



            });

        });
    </script>














@endsection