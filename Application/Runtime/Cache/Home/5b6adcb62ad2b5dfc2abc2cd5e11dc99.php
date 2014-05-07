<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>登陆 - 万普动力</title>
    <meta name="keywords" content="万普动力" />
    <meta name="description" content="万普动力" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/css/font-awesome.min.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="/Public/css/font-awesome-ie7.min.css" />
<![endif]-->

<!-- page specific plugin styles -->

<!-- fonts -->


<!-- ace styles -->

<link rel="stylesheet" href="/Public/css/ace.min.css" />
<link rel="stylesheet" href="/Public/css/ace-rtl.min.css" />
<link rel="stylesheet" href="/Public/css/ace-skins.min.css" />
<link rel="stylesheet" href="/Public/css/notifIt.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" href="/Public/css/ace-ie.min.css" />
<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->

<script src="/Public/js/ace-extra.min.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if lt IE 9]>
<script src="/Public/js/html5shiv.js"></script>
<script src="/Public/js/respond.min.js"></script>
<![endif]-->
</head>

<body class="login-layout">
<div class="main-container">
<div class="main-content">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<div class="login-container">
<div class="center">
    <h1>
        <i class="icon-leaf green"></i>
        <span class="red">万普动力</span>
    </h1>
    <h4 class="blue">&copy; 万普信息科技有限公司</h4>
</div>

<div class="space-6"></div>

<div class="position-relative">
    <div id="login-box" class="login-box visible widget-box no-border">
        <div class="widget-body">
            <div class="widget-main">
                <h4 class="header blue lighter bigger">
                    <i class="icon-coffee green"></i>
                   请输入您的用户名和密码
                </h4>

                <div class="space-6"></div>

                <form id="myform">
                    <fieldset>
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="text" name="name" class="form-control" placeholder="用户名" />
                                <i class="icon-user"></i>
                            </span>
                        </label>

                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input type="password" name="password" class="form-control" placeholder="密码" />
                                <i class="icon-lock"></i>
                            </span>
                        </label>

                        <div class="space"></div>

                        <div class="clearfix">
                            <label class="inline">
                                <input type="checkbox" class="ace" />
                                <span class="lbl"> 记住我</span>
                            </label>

                            <button type="submit" id="subbtn" class="width-35 pull-right btn btn-sm btn-primary">
                                <i class="icon-key"></i>
                               登陆
                            </button>
                        </div>

                        <div class="space-4"></div>
                    </fieldset>
                </form>

                <div class="social-or-login center">
                    <span class="bigger-110">选择以下方式登陆</span>
                </div>

                <div class="social-login center">
                    <a class="btn btn-primary">
                        <i class="icon-facebook"></i>
                    </a>

                    <a class="btn btn-info">
                        <i class="icon-twitter"></i>
                    </a>

                    <a class="btn btn-danger">
                        <i class="icon-google-plus"></i>
                    </a>
                </div>
            </div><!-- /widget-main -->

            <div class="toolbar clearfix">
                <div>
                    <a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
                        <i class="icon-arrow-left"></i>
                        忘记密码
                    </a>
                </div>

                <div>
                    <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                        注册
                        <i class="icon-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div><!-- /widget-body -->
    </div><!-- /login-box -->

</div><!-- /position-relative -->
</div>
</div><!-- /.col -->
</div><!-- /.row -->
</div>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->
<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/Public/js/jquery.form.js"></script>
<script src="/Public/js/notifIt.js"></script>
<!-- inline scripts related to this page -->

<script type="text/javascript">
    function show_box(id) {
        jQuery('.widget-box.visible').removeClass('visible');
        jQuery('#'+id).addClass('visible');
    }
</script>
<script type="text/javascript">

    function validatedata(formData, jqForm, options){
        var form = jqForm[0]; //把表单转化为dom对象
        if (!form.name.value || !form.password.value) {
            notif({
                msg: "用户名和密码都不能为空",
                type: "warming"
            });
            return false;
        }
    }

    function showResponse(response, statusText){
        //dataType=xml
        alert(response);
    }

    $("#subbtn").click(function(){
        var options = {
            beforeSubmit: validatedata,  //提交前的回调函数
            success: showResponse,      //提交后的回调函数
            url: '/index.php/Home/Login/Index',                 //默认是form的action， 如果申明，则会覆盖
            type: 'post',               //默认是form的method（get or post），如果申明，则会覆盖
            dataType: 'json',           //html(默认), xml, script, json...接受服务端返回的类型
            clearForm: true,          //成功提交后，清除所有表单元素的值
            resetForm: true,          //成功提交后，重置所有表单元素的值
            timeout: 3000               //限制请求的时间，当请求大于3秒后，跳出请求
        }
        $("#myform").ajaxForm(options);
    });






</script>
</body>
</html>