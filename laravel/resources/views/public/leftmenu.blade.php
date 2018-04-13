<div class="tpl-left-nav tpl-left-nav-hover">
    <div class="tpl-left-nav-title">
        楼房信息管理
    </div>
    <div class="tpl-left-nav-list">
        <ul class="tpl-left-nav-menu">



            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-table"></i>
                    <span>房源管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu">
                    <li>
                        <a href="{{url('admin/type')}}">
                            <i class="am-icon-angle-right"></i>
                            <span>地理位置添加</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                        <a href="{{url('admin/add')}}">
                            <i class="am-icon-angle-right"></i>
                            <span>房源添加</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
                        <a href="{{url('admin/oper')}}">
                            <i class="am-icon-angle-right"></i>
                            <span>房源列表</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>

                    </li>
                </ul>
            </li>

            <li class="tpl-left-nav-item">
                <a href="javascript:;" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-wpforms"></i>
                    <span>用户管理</span>
                    <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                </a>
                <ul class="tpl-left-nav-sub-menu" style="display: block;">
                    <li>
                        <a href="{{url('admin/user/register')}}">
                            <i class="am-icon-angle-right"></i>
                            <span>管理员注册</span>

                        </a>
                        <a href="{{url('admin/user/oper')}}">
                            <i class="am-icon-angle-right"></i>
                            <span>用户展示页面</span>
                        </a>
                @if(session()->get('power')==2)
                        <a href="{{url('admin/user/power')}}">
                            <i class="am-icon-angle-right"></i>
                            <span>用户管理及权限设置</span>
                            <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                        </a>
@endif
                    </li>
                </ul>
            </li>

            <li class="tpl-left-nav-item">
                <a href="" class="nav-link tpl-left-nav-link-list">
                    <i class="am-icon-key"></i>
                    <span>登录</span>

                </a>
            </li>
        </ul>
    </div>
</div>
