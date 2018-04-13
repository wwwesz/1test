@extends('public/base')

@section('main')









    <div class="tpl-portlet-components"  >
        <div class="portlet-title">
            <div class="caption font-green bold">
                地理位置添加页
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>


        </div>

        <div class="tpl-block">

            <div class="am-g">
                <div class="tpl-form-body tpl-form-line" style="
    padding-bottom: 500px;">


                    <form class="am-form tpl-form-line-form" method="post" enctype="multipart/form-data" action="{{url('admin/doType')}}">
                        <div class="am-form-group">
                            <label for="" class="am-u-sm-3 am-form-label">选择地址 <span class="tpl-form-line-small-title">分类</span></label>
                            <div class="am-u-sm-9">

                                <select name="p" id="p" data-am-selected="{searchBox: 1}">
                                    <option value="0"></option>
                                </select>
                                <select name="c" id="c" data-am-selected="{searchBox: 1}">
                                    <option value="0"></option>
                                </select>
                                <select name="d" id="d" data-am-selected="{searchBox: 1}">
                                    <option value="0"></option>
                                </select>
                                <small>最后一个选项框添加会是第二个选择框的子类~~</small>
                                @if(session()->has('me'))
                                    <div style="height: 20px;color: red ">      {{session()->get('me')}}&nbsp;</div>
                                @endif

                            </div>


                        </div>
                        <div class="am-form-group" style="padding-top: 50px;">
                            <label for="user-name" class="am-u-sm-3 am-form-label">地理位置 <span class="tpl-form-line-small-title">地理名称</span></label>
                            <div class="am-u-sm-9"  >
                                <input type="text" class="tpl-form-input" id="user-name" name="name" required="required"placeholder="地理位置不要超过15个中文">
                                <small style="color: red">
                                    @if(session()->has('message'))
                                        {{session()->get('message')}}&nbsp;
                                    @endif





                                </small>
                            </div>
                        </div>


                        <div class="am-form-group" style="padding-top: 50px;">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                {{csrf_field()}}
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
                    //遍历数组,在遍历过程中,将省份的信息追加到#province下拉选择框中
                    //清空省份下拉框中的历史选项
                    $('[name="p"]').empty().append("<option value='-1'>区</option>");//父类id=-1就取不到东西



                    $(obj).each(function(index,value){
                        //console.log(value.name);
                        $('[name="p"]').append("<option value='"+value.id+"'>"+value.name+"</option>");//内容的拼接
                    });
                }
            });


            //选择省份,触发change()事件执行ajax,然后获取省份下面的城市,将获取到的城市追加到#city下拉框

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