<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>微宝</title>
    <link href="/appserver/Public/weixinapp/css/bootstrap.min.css" rel="stylesheet">
    <link href="/appserver/Public/weixinapp/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/appserver/Public/weixinapp/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--right slidebar-->
    <link href="/appserver/Public/weixinapp/css/slidebars.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/appserver/Public/weixinapp/css/style.css" rel="stylesheet">
    <link href="/appserver/Public/weixinapp/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="/appserver/Public/js/html5shiv.js"></script>
    <script src="/appserver/Public/js/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="signin.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <form class="form-signin"  method="post" action="/appserver/index.php/Login/Login/login">
        <h2 class="form-signin-heading">微宝后台管理系统</h2>
        <label for="inputEmail" class="sr-only">账户名</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="账户" required autofocus>
        <label for="inputPassword" class="sr-only">密码</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码" required>
        <?php echo ($xinxi); ?>
        <!--<div class="checkbox">-->
            <!--<label>-->
              <!-- -->
            <!--</label>-->
        <!--</div>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">登陆</button>
    </form>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>