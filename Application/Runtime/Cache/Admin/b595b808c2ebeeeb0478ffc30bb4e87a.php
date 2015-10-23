<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="/my/thinkphp/Public/css/bootstrap.css">
	<link rel="stylesheet" href="/my/thinkphp/Public/css/common.css">
	<title><?php echo ($title); ?></title>
	<script src="/my/thinkphp/Public/js/jquery-2.1.4.min.js"></script>
	<script src="/my/thinkphp/Public/js/bootstrap.min.js"></script> 
	<script src="/my/thinkphp/Public/js/jquery.form.js"></script> 
</head>
<body> <!-- 公共头文件 -->
	<div class="container-fluid">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/my/thinkphp/index.php/Admin/Index/index/">logo标签开心蛙</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span></a></li>	<!-- 邮件 -->
		        <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>	<!-- 提心消息 -->
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<span>李四</span><span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<span>个人中心</span></a></li>
		            <li><a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;<span>设置</span></a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;<span>退出</span></a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 " style="padding:0px">
			<div class="nav-left-container" style="position:relative;">
				<ul>
					<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span class="glyphicon glyphicon-cog"></span>&nbsp;<span>网站设置</span></li>
					<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load" ><span class="glyphicon glyphicon-cog"></span>&nbsp;<span>权限设置</span></li>
					<ul class="qhkl-hidden">
						<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>规则管理</span></li>
						<ul class="qhkl-hidden">
							<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>查看规则</span></li>
							<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>添加规则</span></li>
						</ul>
						<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>组管理</span></li>
						<ul class="qhkl-hidden">
							<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>查看规则</span></li>
							<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>添加规则</span></li>
						</ul>
						<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>组权限</span></li>
						<ul class="qhkl-hidden">
							<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>查看规则</span></li>
							<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Index/load"><span></span><span>添加规则</span></li>
						</ul>
					</ul>
					<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Menu/index"><span class="glyphicon glyphicon-cog"></span>&nbsp;<span>菜单设置</span></li>
					<ul class="qhkl-hidden">
						<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Menu/index"><span></span><span>查看菜单</span></li>
						<li onclick="qkhl_nav(this)" url="/my/thinkphp/index.php/Admin/Menu/add"><span></span><span>添加菜单</span></li>
					</ul>
				</ul>
			</div>
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 qkhl-content" style="padding:0px">
			<div class="row">
				<div class="col-xs-8 col-sm-12 col-md-12 col-lg-4">
					<ol class="breadcrumb" style="background:none;">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Library</a></li>
					  <li class="active">Data</li>
					</ol>
				</div>
				<div class="col-sm-8 col-sm-8 col-md-8 col-lg-5 hidden-xs" style="padding-left:20px;">
					<iframe allowtransparency="true" frameborder="0" width="575" height="96" scrolling="no" src="http://tianqi.2345.com/plugin/widget/index.htm?s=2&z=3&t=0&v=0&d=5&bd=0&k=&f=004040&q=1&e=1&a=1&c=54511&w=575&h=96&align=center"></iframe>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3">
					<div class='refresh-handle'>
						<span class="glyphicon glyphicon-refresh pull-right refresh"  id="qkhl-refresh" onclick="qkhl_load(this);" url="/my/thinkphp/index.php/Admin/Index/indexLoad"></span>
						<img src="/my/thinkphp/Public/images/loading2.gif" width="30px" class="pull-right hidden">
					</div>
					
				</div>
			</div>
			<div id="data-container" class="padding-rf-15">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-bottom-10">
						<div class="qkhl-border qkhl-border-primary">
							<img src="/my/thinkphp/Public/images/head.jpg" class="img-circle text-center center-block" width="120px" height="120px;">
							<p class="text-center center-block padding-tb-10" >用户名</p>
							<p class="text-center center-block">欢迎!<span class="label label-info">李四</span><span class="label label-primary">超级管理员</span>，这是您第<span class="badge badge-info">(100)</span>次登录，上次登录ip是:<span class="label label-primary">192.168.0.1</span>如果有疑问请及时<a href="" class="btn btn-danger btn-xs">修改密码</a></p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-bottom-10">
						<div class="qkhl-border qkhl-border-success">
							<header>系统参数:</header>
							<div class="list-group">
							  <a href="#" class="list-group-item list-group-item-success">当前服务器时间:<?php echo date("Y-m-d H:i:s")?></a>
							  <a href="#" class="list-group-item list-group-item-info">php版本:<?php echo PHP_VERSION;?></a>
							  <a href="#" class="list-group-item list-group-item-warning">系统类型及版本号:<?php echo php_uname();?></a>
							  <a href="#" class="list-group-item list-group-item-danger">服务器ip:<?php echo GetHostByName($_SERVER['SERVER_NAME']);?></a>
							</div>
						</div>
					</div>
				</div>
				<div class="qkhl-border qkhl-border-info">
					放图标显示
				</div>
			</div>
		</div>
	</div>

<script src="/my/thinkphp/Public/js/common.js"></script>
</body>
</html> <!-- 公共页脚 -->