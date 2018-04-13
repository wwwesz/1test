
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>楚楼网后台管理系统</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('')}}assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('')}}assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="{{asset('')}}assets/css/admin.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/app.css">
</head>

<body data-type="login">

<div class="am-g myapp-login">
    <div class="myapp-login-logo-block  tpl-login-max">
        <div class="myapp-login-logo-text">
            <div class="myapp-login-logo-text">
                楚楼<span> Build</span> <i class="am-icon-skyatlas"></i>

            </div>
        </div>

        <div class="login-font">
            <i>Log In </i>
        </div>
        <div class="am-u-sm-10 login-am-center">
            <form class="am-form" method="post" action="{{url('admin/user/check')}}">
                <fieldset>
                    <div class="am-form-group">
                        <input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="请输入账号" required="required">
                    </div>
                    <div class="am-form-group">
                        <input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="请输入密码" required="required">
                    </div>
                    {{csrf_field()}}
                    <p><button type="submit" class="am-btn am-btn-default">登录</button></p>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('')}}assets/js/jquery-2.1.1.js"></script>
<script src="{{asset('')}}assets/js/amazeui.min.js"></script>
<script src="{{asset('')}}assets/js/app.js"></script>
</body>

</html>