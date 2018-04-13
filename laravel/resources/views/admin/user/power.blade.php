@extends('public/base')

@section('main')


    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 列表
                @if(session()->has('message'))
                    <small class="font-red"> {{session()->get('message')}}&nbsp;</small>
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
                <div class="am-u-sm-12 am-u-md-6">
                    <div class="am-btn-toolbar">

                    </div>
                </div>

            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <form class="am-form">
                        <table class="am-table am-table-striped am-table-hover table-main">
                            <thead>

                            <tr>

                                <th class="table-id">ID</th>
                                <th class="table-title">用户名</th><th class="table-author am-hide-sm-only">昵称</th>
                                <th class="table-type">权值</th>

                                <th class="table-date am-hide-sm-only">创建时间</th>
                                <th class="table-set">修改时间</th>
                                <th>管理员设置</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($cols as $v)
                                <tr>

                                    <td>{{$v->id}}</td>
                                    <td>{{$v->username}}</td>
                                    <td>{{$v->nick}}</td>
                                    <td class="am-hide-sm-only">{{$v->power}}</td>
                                    <td class="am-hide-sm-only">{{$v->addtime}}</td>
                                    <td>
                                        {{$v->updatetime}}
                                    </td>
                                    <td>
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href ="{{url('admin/user/powerDeit',['id'=>$v->id])}}" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>

                                                <a href ="{{url('admin/user/powerDel',['id'=>$v->id])}}" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="am-cf">

                            <div class="am-fr">
                                {{$cols->render()}}
                            </div>
                        </div>
                        <hr>

                    </form>
                </div>

            </div>
        </div>
        <div class="tpl-alert"></div>










    </div>

@endsection
