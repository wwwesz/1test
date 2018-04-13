<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=”renderer” content=”webkit”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=Edge,chrome=1″>
    <title></title>
    <meta name="csrf-token" content="CdzrbAJsofv5lFsncTCHgSULM6InMBaz9x47v59Q"/>
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
    <link rel="stylesheet"
          href="{{asset('')}}run/Css/index_buildingshow.min.css">
    <link rel="stylesheet"
          href="{{asset('')}}run/Css/font-awesome.min.css">
    <link rel="stylesheet"
          href="{{asset('')}}run/Css/sweet-alert.min.css">
</head>
<body>
<div class="body-div">
    <header>
        <div class="content-width">

            <ul class="header-nav-list">
                <li class="header-nav-item">
                    <a href="https://www.chulouwang.com/message">
                        委托找房
                    </a>
                </li>
                <li class="header-nav-item">
                    <a href="https://www.chulouwang.com/userAddHouse">
                        投放房源
                    </a>
                </li>
                <li class="header-nav-item">
                    <a href="https://www.chulouwang.com/information">
                        资讯中心
                    </a>
                </li>
                <li class="header-nav-item">
                    <a href="https://agent.chulouwang.com">
                        公司后台
                    </a>
                </li>
                <li class="header-nav-item">
                    <a href="http://shop.chulouwang.com">
                        楚楼商城
                    </a>
                </li>
            </ul>
            <div class="header-search-box">

            </div>
            <div class="header-login-box">
                <a href="{{url('admin')}}">后台登陆</a>


            </div>
        </div>
    </header>
    <section class="content-width">
        <div class="nav-domain">
            <div class="position-img-box">
                <img src="{{asset('')}}run/Picture/position_houseshow.svg" alt="坐标">
            </div>

        </div>

        <div class="building-main-info">
            <div class="building-info-box">


                <div class="banner-box">
                    <div id="mySwiper" class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @if(isset($imgs->path))
                            <div class="swiper-slide">
                                <img src="{{asset('')}}upload/{{$imgs->path}}" alt="">
                            </div>
                             @else
                                <img src="{{asset('assets/img/7788414.jpg')}}">
                            @endif
                            <div class="swiper-slide">
                                <img src="{{asset('')}}run/Picture/a293320de1b7476397001c6e28f447da.gif" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{asset('')}}run/Picture/5ee09513ccb34b0a952d5446c738dee4.gif" alt="">
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->



                        <!-- If we need scrollbar -->

                    </div>
                </div>

                <div class="building-text-info">
                    <h1>{{$col->title}}</h1>
                    <ul class="building-config-list">

                        <li class="building-config-item">
                            物业费：<span class="color-orange">{{$col->price}}</span>元/㎡·月                        </li>


                    </ul>
                    <ul class="building-address-list">
                        <li class="building-address-item">
                            所属区域： 武汉市{{$str}}
                        </li>
                        <li class="building-address-item">
                            楼盘地址：{{$col->address}}
                        </li>

                    </ul>

                </div>
            </div>
        </div>




<script src="Scripts/jquery-3.2.1.min.js"></script>
<script src="Scripts/vue.min.js"></script>
<script src="Scripts/modal.min.js"></script>
<script src="Scripts/sweet-alert.min.js"></script>
<script src="Scripts/amazeui.swiper.js"></script>
<script type="text/javascript"
        src="Scripts/830984b7572941b4b55ce536748d8257.js"></script>
<script src="Scripts/curveline.js"></script>
<script src="Scripts/buildingshow.min.js"></script>
</body>
