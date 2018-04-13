<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="gEtlqftgUHlOnH1893vcwQKYrws2HlbGWi7LSBpo"/>
    <title>楼盘查询</title>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?a8bb44e51deceeae65bac46930eab06e";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.chulouwang.com/favicon.ico?version=20180410" />
    <link rel="stylesheet" href="{{asset('')}}run/Css/bootstrap.min.css">
    <!---icon 字体 -->
    <link rel="stylesheet"
          href="{{asset('')}}run/Css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('')}}run/Css/animate.min.css">
    <link rel="stylesheet" href="{{asset('')}}run/Css/common.min.css">
    <link rel="stylesheet" href="{{asset('')}}run/Css/header.min.css">
    <link rel="stylesheet" href="{{asset('')}}run/Css/list.min.css">
    <link rel="stylesheet" href="{{asset('')}}run/Css/footer.min.css">
</head>
<body>
<header>
    <div class="content-width">
        <a href=""><img
                    src="{{asset('')}}run/Picture/logo_b.png"
                    alt="返回首页"></a>
        <ul class="header-nav-list">
            <li class="header-nav-item">
                <a href="e">
                    委托找房
                </a>
            </li>
            <li class="header-nav-item">
                <a href="">
                    投放房源
                </a>
            </li>
            <li class="header-nav-item">
                <a href="">
                    资讯中心
                </a>
            </li>
            <li class="header-nav-item">
                <a href="">
                    公司后台
                </a>
            </li>
            <li class="header-nav-item">
                <a href="">
                    楚楼商城
                </a>
            </li>
        </ul>
        <div class="header-search-box">
            <form action="">
                <input HaoyuSug="E7A9D7B4346A4C29BE63DC48111CB8F5" type="text" name="build"
                       placeholder="输入你想要的写字楼或商圈名称"/>
                <button>搜索</button>
            </form>
        </div>
        <div class="header-login-box">
            <a href="{{url('admin')}}">后台登陆</a>

        </div>
    </div>
</header>
<section class="container-fluid background_gray">
    <div class="row content line-45 self-bg-home p-l-30 color_gray">
        <a class="color_blue" href="">武汉市</a>
        >
        <span class="color_gray" href="javascript:void (0)">写字楼出租</span>
    </div>
</section>
<input type="hidden" id="search"
       data-area=""
       data-subway=""
       data-type=""
       data-acreage=""
       data-unit_price=""
       data-renovation=""
       data-keyword=""
       data-block="">

<ul class="container-fluid self-b-line buQi">
    <li class="display-flex content">
        <div class="flex_1 color_gray">区域：</div>
        <ol class="flex_14">
            <div>
                <a href="{{url('/')}}">   <span class="p-r-25 pointer  color_orange  area"
                          data-area="">全部</span></a>
            @foreach($t as $v)
                    <a href="{{url('type',['name'=>$v->name])}}"><span class="p-r-25 pointer area ">{{$v->name}}</span></a>
                @endforeach
            </div>
            <div class="row line-30 background_f5f6fb  hidden " id="block">
                <span class="pointer p-l-10 color_orange block" data-block="">全部</span>
            </div>
        </ol>

    </li>
    <li class="display-flex content">
        <div class="flex_1 color_gray">地铁：</div>
        <ol class="flex_14">
            <a href="{{url('/')}}">   <span class="p-r-25 pointer subway  color_orange "
                      data-subway="">全部</span></a>
@foreach($group as $vv)
                <a href="{{url('group',['metro'=>$vv['metro']])}}">   <span class="p-r-25 pointer subway "
                  data-subway="1">{{$vv['metro']}}</span>
                </a>
            @endforeach
        </ol>
    </li>



</ul>


<section class="container-fluid m-t-40">
    <ul class="row content self-hover-li">
    @foreach($cols as $c)
        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 m-b-30 animated fadeInLeft">
            <div class="border border_gray">
                <a href="{{url('oper',['id'=>$c->id])}}" class="list-item display-inline-block position-relative pointer"
                   data-id="af0f1dae023911e8ad4200163e0d77ef">
        @if(isset($c->path))           <img style="width: 350px;height: 300px"
                         src="{{asset('')}}upload/{{$c->path}}"

                    >
                @else <img style="width: 350px;height: 300px"
                           src="{{asset('assets/img/7788414.jpg')}}"

                           >
            @endif
                    <div style="bottom: 0px" class="position-absolute p-t-10">
                        <div class="row">
                            <h3 class="col-lg-6 col-md-6 col-sm-6 col-xs-6 p-r-0 p-l-25 overflow-one f_20">
                               {{$c->title}}</h3>





                        </div>

                    </div>
                    <dd class="position-absolute  f_18 display-flex align-items-center justify-content-center">

                    </dd>
                </a>
            </div>
        </li>
@endforeach

    </ul>

</section>
<footer>
    <div class="content-width">
        <div class="footer-up">
            <div class="footer-up-left">
                <h2>选办公室上楚楼网，十分钟搞定！</h2>
                <ul>
                    <li>
                        <a href="om">网站首页</a>
                    </li>
                    -
                    <li>
                        <a href="https://www.chulouwang.com/aboutUs">关于楚楼</a>
                    </li>
                    -
                    <li>
                        <a href="">联系我们</a>
                    </li>
                    -
                    <li>
                        <a href="">使用协议</a>
                    </li>
                    -
                    <li>
                        <a href="">隐私政策</a>
                    </li>
                </ul>
                <div>
                    ©2017 楚楼(武汉)信息科技有限公司 版权所有 鄂ICP备18001084号
                </div>
            </div>
            <div class="footer-up-right">
                <div class="footer-tel-block">
                    <div class="tel-dsc">客服电话:（早9:00-晚20:00）</div>
                    <div class="tel-num">
                        4000-580-888
                    </div>
                </div>
                <div class="qrcode-block">
                    <img src="{{asset('')}}run/Picture/wechat-qrcode.jpg"
                         alt="楚楼网二维码">
                    <p>扫描关注楚楼网公众号</p>
                </div>
            </div>
        </div>
        <div class="footer-down">
            <ul class="display-flex">
                友情链接：
                <li>
                    <a href="https://www.iyxh.com/">
                        奇立英雄会
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script>(function(){var c=document.createElement('script');c.src='//kefu.cckefu.com/vclient/?webid=134772';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(c,s);})();</script>
<script src="{{asset('')}}run/Scripts/jquery-3.2.1.min.js"></script>
<script src="{{asset('')}}run/Scripts/city1.js"></script>
<script src="{{asset('')}}run/Scripts/list.min.js"></script>
<script src="{{asset('')}}run/Scripts/92find.min.js"></script>
</body>
</html>

