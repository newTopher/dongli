<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>万普动力-专业的微信推广平台</title>
		<meta name="keywords" content="万普动力" />
		<meta name="description" content="万普动力" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
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

	<body>
        <div class="navbar navbar-default" id="navbar">
<script type="text/javascript">
    try{ace.settings.check('navbar' , 'fixed')}catch(e){}
</script>

<div class="navbar-container" id="navbar-container">
<div class="navbar-header pull-left">
    <a href="#" class="navbar-brand">
        <small>
            <i class="icon-leaf"></i>
            万普动力
        </small>
    </a><!-- /.brand -->
</div><!-- /.navbar-header -->

<div class="navbar-header pull-right" role="navigation">
<ul class="nav ace-nav">
<li class="grey">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-tasks"></i>
        <span class="badge badge-grey">4</span>
    </a>

    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
        <li class="dropdown-header">
            <i class="icon-ok"></i>
            还有4个任务完成
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">软件更新</span>
                    <span class="pull-right">65%</span>
                </div>

                <div class="progress progress-mini ">
                    <div style="width:65%" class="progress-bar "></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">硬件更新</span>
                    <span class="pull-right">35%</span>
                </div>

                <div class="progress progress-mini ">
                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">单元测试</span>
                    <span class="pull-right">15%</span>
                </div>

                <div class="progress progress-mini ">
                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
                    <span class="pull-left">错误修复</span>
                    <span class="pull-right">90%</span>
                </div>

                <div class="progress progress-mini progress-striped active">
                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                查看任务详情
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="purple">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-bell-alt icon-animated-bell"></i>
        <span class="badge badge-important">8</span>
    </a>

    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
        <li class="dropdown-header">
            <i class="icon-warning-sign"></i>
            8条通知
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												新闻评论
											</span>
                    <span class="pull-right badge badge-info">+12</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="btn btn-xs btn-primary icon-user"></i>
                切换为编辑登录..
            </a>
        </li>

        <li>s
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												新订单
											</span>
                    <span class="pull-right badge badge-success">+8</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												粉丝
											</span>
                    <span class="pull-right badge badge-info">+11</span>
                </div>
            </a>
        </li>

        <li>
            <a href="#">
                查看所有通知
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="green">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <i class="icon-envelope icon-animated-vertical"></i>
        <span class="badge badge-success">5</span>
    </a>

    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
        <li class="dropdown-header">
            <i class="icon-envelope-alt"></i>
            5条消息
        </li>

        <li>
            <a href="#">
                <img src="/Public/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												不知道写啥 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>1分钟以前</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="/Public/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												不知道翻译...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20分钟以前</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="#">
                <img src="/Public/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												到底是不是英文 ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>下午3:15</span>
											</span>
										</span>
            </a>
        </li>

        <li>
            <a href="inbox.html">
                查看所有消息
                <i class="icon-arrow-right"></i>
            </a>
        </li>
    </ul>
</li>

<li class="light-blue">
    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
        <img class="nav-user-photo" src="/Public/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									Jason
								</span>

        <i class="icon-caret-down"></i>
    </a>

    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
        <li>
            <a href="#">
                <i class="icon-cog"></i>
                设置
            </a>
        </li>

        <li>
            <a href="#">
                <i class="icon-user"></i>
                个人资料
            </a>
        </li>

        <li class="divider"></li>

        <li>
            <a href="#">
                <i class="icon-off"></i>
                退出
            </a>
        </li>
    </ul>
</li>
</ul><!-- /.ace-nav -->
</div><!-- /.navbar-header -->
</div><!-- /.container -->
</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">

                <a class="menu-toggler" id="menu-toggler" href="#">
    <span class="menu-text"></span>
</a>

<div class="sidebar" id="sidebar">
<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
</script>

<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success">
            <i class="icon-signal"></i>
        </button>

        <button class="btn btn-info">
            <i class="icon-pencil"></i>
        </button>

        <button class="btn btn-warning">
            <i class="icon-group"></i>
        </button>

        <button class="btn btn-danger">
            <i class="icon-cogs"></i>
        </button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>

        <span class="btn btn-info"></span>

        <span class="btn btn-warning"></span>

        <span class="btn btn-danger"></span>
    </div>
</div><!-- #sidebar-shortcuts -->

<ul class="nav nav-list">
<li class="active">
    <a href="index.html">
        <i class="icon-dashboard"></i>
        <span class="menu-text"> 我的万普动力 </span>
    </a>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-desktop"></i>
        <span class="menu-text"> 账户中心</span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="elements.html">
                <i class="icon-double-angle-right"></i>
                基本信息
            </a>
        </li>
        <li>
            <a href="elements.html">
                <i class="icon-double-angle-right"></i>
                平台消息
            </a>
        </li>
        <li>
            <a href="elements.html">
                <i class="icon-double-angle-right"></i>
                充值
            </a>
        </li>
        <li>
            <a href="buttons.html">
                <i class="icon-double-angle-right"></i>
                密码修改
            </a>
        </li>


    </ul>
</li>


<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-desktop"></i>
        <span class="menu-text"> 推广计划</span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="/index.php/Home/Weimedia/Index/order/1">
                <i class="icon-double-angle-right"></i>
                最佳匹配
            </a>
        </li>

        <li>
            <a href="/index.php/Home/Weimedia/Index/order/2">
                <i class="icon-double-angle-right"></i>
                粉丝最多
            </a>
        </li>

        <li>
            <a href="/index.php/Home/Weimedia/Index/order/3">
                <i class="icon-double-angle-right"></i>
                限时计划
            </a>
        </li>

    </ul>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-list"></i>
        <span class="menu-text"> 预约管理 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="tables.html">
                <i class="icon-double-angle-right"></i>
                创建预约
            </a>
        </li>

        <li>
            <a href="tables.html">
                <i class="icon-double-angle-right"></i>
                被拒绝预约
            </a>
        </li>

        <li>
            <a href="jqgrid.html">
                <i class="icon-double-angle-right"></i>
                进行中的预约
            </a>
        </li>

    </ul>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-list"></i>
        <span class="menu-text"> 万普联盟 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="tables.html">
                <i class="icon-double-angle-right"></i>
                互助推广中心
            </a>
        </li>
        <li>
            <a href="tables.html">
                <i class="icon-double-angle-right"></i>
                创建互助推广
            </a>
        </li>
        <li>
            <a href="tables.html">
                <i class="icon-double-angle-right"></i>
                收到的互助推广
            </a>
        </li>
        <li>
            <a href="tables.html">
                <i class="icon-double-angle-right"></i>
                进行中的互助推广
            </a>
        </li>

    </ul>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-edit"></i>
        <span class="menu-text"> 财务中心 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                财务明细
            </a>
        </li>
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                冻结金额
            </a>
        </li>
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                消费记录
            </a>
        </li>
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                充值记录
            </a>
        </li>
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                其他
            </a>
        </li>



    </ul>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-edit"></i>
        <span class="menu-text"> 订单管理 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                我的订单
            </a>
        </li>
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                评价
            </a>
        </li>



    </ul>
</li>

<li>
    <a href="#" class="dropdown-toggle">
        <i class="icon-edit"></i>
        <span class="menu-text"> 数据分析 </span>

        <b class="arrow icon-angle-down"></b>
    </a>

    <ul class="submenu">
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                点击明细
            </a>
        </li>
        <li>
            <a href="form-elements.html">
                <i class="icon-double-angle-right"></i>
                效果报告
            </a>
        </li>



    </ul>
</li>



</ul><!-- /.nav-list -->

<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
</div>

<script type="text/javascript">
    try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>
</div>

				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">推广计划</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								推广计划
								<small>
									<i class="icon-double-angle-right"></i>
									 最佳匹配
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                <div class="widget-main padding-8">
                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div id="profile-feed-1" class="profile-feed" style="overflow: hidden; width: auto; height: 250px;">
                                <div class="profile-activity clearfix">
                                    <div>
                                        <img class="pull-left" alt="Alex Doe's avatar" src="assets/avatars/avatar5.png">
                                        <a class="user" href="#"> Alex Doe </a>
                                        changed his profile photo.
                                        <a href="#">Take a look</a>

                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            an hour ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <img class="pull-left" alt="Susan Smith's avatar" src="assets/avatars/avatar1.png">
                                        <a class="user" href="#"> Susan Smith </a>

                                        is now friends with Alex Doe.
                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            2 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <i class="pull-left thumbicon icon-ok btn-success no-hover"></i>
                                        <a class="user" href="#"> Alex Doe </a>
                                        joined
                                        <a href="#">Country Music</a>

                                        group.
                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            5 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <i class="pull-left thumbicon icon-picture btn-info no-hover"></i>
                                        <a class="user" href="#"> Alex Doe </a>
                                        uploaded a new photo.
                                        <a href="#">Take a look</a>

                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            5 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <img class="pull-left" alt="David Palms's avatar" src="assets/avatars/avatar4.png">
                                        <a class="user" href="#"> David Palms </a>

                                        left a comment on Alex's wall.
                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            8 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <i class="pull-left thumbicon icon-edit btn-pink no-hover"></i>
                                        <a class="user" href="#"> Alex Doe </a>
                                        published a new blog post.
                                        <a href="#">Read now</a>

                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            11 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <img class="pull-left" alt="Alex Doe's avatar" src="assets/avatars/avatar5.png">
                                        <a class="user" href="#"> Alex Doe </a>

                                        upgraded his skills.
                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            12 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <i class="pull-left thumbicon icon-key btn-info no-hover"></i>
                                        <a class="user" href="#"> Alex Doe </a>

                                        logged in.
                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            12 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <i class="pull-left thumbicon icon-off btn-inverse no-hover"></i>
                                        <a class="user" href="#"> Alex Doe </a>

                                        logged out.
                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            16 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="profile-activity clearfix">
                                    <div>
                                        <i class="pull-left thumbicon icon-key btn-info no-hover"></i>
                                        <a class="user" href="#"> Alex Doe </a>

                                        logged in.
                                        <div class="time">
                                            <i class="icon-time bigger-110"></i>
                                            16 hours ago
                                        </div>
                                    </div>

                                    <div class="tools action-buttons">
                                        <a href="#" class="blue">
                                            <i class="icon-pencil bigger-125"></i>
                                        </a>

                                        <a href="#" class="red">
                                            <i class="icon-remove bigger-125"></i>
                                        </a>
                                    </div>
                                </div>
                                </div></div></div>
                                </div>








								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
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
    window.jQuery || document.write("<script src='/Public/js/jquery-2.0.3.min.js'>"+"<"+"script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/Public/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/Public/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
</script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="/Public/js/excanvas.min.js"></script>
<![endif]-->

<script src="/Public/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/Public/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Public/js/jquery.slimscroll.min.js"></script>
<script src="/Public/js/jquery.easy-pie-chart.min.js"></script>
<script src="/Public/js/jquery.sparkline.min.js"></script>
<script src="/Public/js/flot/jquery.flot.min.js"></script>
<script src="/Public/js/flot/jquery.flot.pie.min.js"></script>
<script src="/Public/js/flot/jquery.flot.resize.min.js"></script>
<script src="/Public/js/notifIt.js"></script>
<script src="/Public/js/jquery.form.js"></script>
<!-- ace scripts -->

<script src="/Public/js/ace-elements.min.js"></script>
<script src="/Public/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    jQuery(function($) {
        $('.easy-pie-chart.percentage').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
            var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
            var size = parseInt($(this).data('size')) || 50;
            $(this).easyPieChart({
                barColor: barColor,
                trackColor: trackColor,
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: parseInt(size/10),
                animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                size: size
            });
        })

        $('.sparkline').each(function(){
            var $box = $(this).closest('.infobox');
            var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
            $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
        });




        var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
        var data = [
            { label: "social networks",  data: 38.7, color: "#68BC31"},
            { label: "search engines",  data: 24.5, color: "#2091CF"},
            { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
            { label: "direct traffic",  data: 18.6, color: "#DA5430"},
            { label: "other",  data: 10, color: "#FEE074"}
        ]
        function drawPieChart(placeholder, data, position) {
            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        tilt:0.8,
                        highlight: {
                            opacity: 0.25
                        },
                        stroke: {
                            color: '#fff',
                            width: 2
                        },
                        startAngle: 2
                    }
                },
                legend: {
                    show: true,
                    position: position || "ne",
                    labelBoxBorderColor: null,
                    margin:[-30,15]
                }
                ,
                grid: {
                    hoverable: true,
                    clickable: true
                }
            })
        }
        drawPieChart(placeholder, data);

        /**
         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
         so that's not needed actually.
         */
        placeholder.data('chart', data);
        placeholder.data('draw', drawPieChart);



        var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
        var previousPoint = null;

        placeholder.on('plothover', function (event, pos, item) {
            if(item) {
                if (previousPoint != item.seriesIndex) {
                    previousPoint = item.seriesIndex;
                    var tip = item.series['label'] + " : " + item.series['percent']+'%';
                    $tooltip.show().children(0).text(tip);
                }
                $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
            } else {
                $tooltip.hide();
                previousPoint = null;
            }

        });






        var d1 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d1.push([i, Math.sin(i)]);
        }

        var d2 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.5) {
            d2.push([i, Math.cos(i)]);
        }

        var d3 = [];
        for (var i = 0; i < Math.PI * 2; i += 0.2) {
            d3.push([i, Math.tan(i)]);
        }


        var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
        $.plot("#sales-charts", [
            { label: "Domains", data: d1 },
            { label: "Hosting", data: d2 },
            { label: "Services", data: d3 }
        ], {
            hoverable: true,
            shadowSize: 0,
            series: {
                lines: { show: true },
                points: { show: true }
            },
            xaxis: {
                tickLength: 0
            },
            yaxis: {
                ticks: 10,
                min: -2,
                max: 2,
                tickDecimals: 3
            },
            grid: {
                backgroundColor: { colors: [ "#fff", "#fff" ] },
                borderWidth: 1,
                borderColor:'#555'
            }
        });


        $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
        function tooltip_placement(context, source) {
            var $source = $(source);
            var $parent = $source.closest('.tab-content')
            var off1 = $parent.offset();
            var w1 = $parent.width();

            var off2 = $source.offset();
            var w2 = $source.width();

            if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
            return 'left';
        }


        $('.dialogs,.comments').slimScroll({
            height: '300px'
        });


        //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
        //so disable dragging when clicking on label
        var agent = navigator.userAgent.toLowerCase();
        if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
            $('#tasks').on('touchstart', function(e){
                var li = $(e.target).closest('#tasks li');
                if(li.length == 0)return;
                var label = li.find('label.inline').get(0);
                if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
            });

        $('#tasks').sortable({
                    opacity:0.8,
                    revert:true,
                    forceHelperSize:true,
                    placeholder: 'draggable-placeholder',
                    forcePlaceholderSize:true,
                    tolerance:'pointer',
                    stop: function( event, ui ) 
                }
        );
        $('#tasks').disableSelection();
        $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
            if(this.checked) $(this).closest('li').addClass('selected');
            else $(this).closest('li').removeClass('selected');
        });


    })
</script>


</body>
</html>