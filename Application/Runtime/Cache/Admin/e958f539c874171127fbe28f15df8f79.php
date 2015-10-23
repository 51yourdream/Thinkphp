<?php if (!defined('THINK_PATH')) exit();?><div class="row">
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