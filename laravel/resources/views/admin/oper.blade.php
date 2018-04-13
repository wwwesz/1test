@extends('public/base')

@section('main')
    <script src="{{asset('')}}assets/js/jquery-2.1.1.js"></script>


    <div class="tpl-portlet-components" style="height: 2000px">
        <div class="portlet-title">
            <div class="caption font-green bold">
                房源展示  <small class="font-red"> @if(session()->has('m'))
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
            <form action="{{url('admin/del')}}" method="post">
                {{csrf_field()}}
                <div class="am-g">
                    <div class="am-u-md-6">

                        <div class="am-btn-toolbar">
                            <div class="am-btn-group am-btn-group-xs">          <label class="am-checkbox am-secondary">
                                    @if(session()->get('power')==2)  <input type="checkbox"  id="selectAll" data-am-ucheck >

                                </label>



                            </div>
                            <div class="am-btn-group am-btn-group-xs">
                                <button onclick="if(!confirm('是否确删除?'))return false;" type="submit" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-plus"></span>删除</button>
@endif

                            </div>
                            <div class="am-btn-group am-btn-group-xs">
                                <a href="{{url('admin/add')}}" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>


                            </div>

                        </div>
                    </div>



                </div>

                <div class="am-g" >

                   @foreach($cols as $v)
                    <div class="am-u-md-4 am-u-end">

                        <div class="tpl-table-images-content">
                            <div class="tpl-table-images-content-i-time">标题:
      {{str_limit($v->title, $limit = 10, $end = '...')}}                            </div>
                            <div class="tpl-i-title">
                              内容:  {{str_limit($v->content, $limit = 20, $end = '...')}}
                            </div>
                            <a href="{{url('admin/operOne',['id'=>$v->id])}}" class="tpl-table-images-content-i">
                                <div class="tpl-table-images-content-i-info">
                                            <span class="ico">

                                 </span>

                                </div>
                                <span class="tpl-table-images-content-i-shadow"></span>
                        @if(isset($v->path))        <img src="{{asset('')}}upload/{{$v->path}}" width="250px" height="250px" alt=""> @else
                                    <img src="{{asset('assets/img/7788414.jpg')}}" width="250px" height="250px" alt="">
                        @endif

                            </a>
                            <div class="tpl-table-images-content-block">


                                <div class="am-btn-toolbar">
                                    @if(session()->get('power')==2)
                                    <div class="am-btn-group am-btn-group-xs tpl-edit-content-btn"><div class="am-btn-group am-btn-group-xs">          <label class="am-checkbox am-secondary">
                                                <input type="checkbox"   value="{{$v->id}}"  data-am-ucheck  name="id[]">

                                            </label>



                                        </div>


                                        <a href="{{url('admin/edit',['id'=>$v->id])}}" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-edit"></span> 编辑</a>

                                    </div>
                                        @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                </div>




            </form>
            <div>{{$cols->links()}}</div>


        </div>
    </div>
    <script>




        $("#selectAll").click(function(){
            //判断当前点击的复选框处于什么状态$(this).is(":checked") 返回的是布尔类型
            if($(this).is(":checked")){
                $("input[name='id\[\]']").prop("checked",true);
            }else{
                $("input[name='id\[\]']").prop("checked",false);
            }
        });

    </script>











@endsection