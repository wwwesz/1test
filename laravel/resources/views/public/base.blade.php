
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin </title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">

{{--插件区--}}


</head>
<body data-type="index" >
@include('public/header')
<!--header-->

<div class="tpl-page-container tpl-page-header-fixed">
    @include('public/leftmenu')

    <!--leftmenu-->
    <div class="tpl-content-wrapper" >
        <!--区块-->
        @yield('main')






        <script src="{{asset('assets/js/jquery-2.1.1.js')}}"></script>
        <script src="{{asset('assets/js/amazeui.min.js')}}"></script>
        <script src="{{asset('assets/js/iscroll.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>


    </div>

</div>



</body>

</html>











