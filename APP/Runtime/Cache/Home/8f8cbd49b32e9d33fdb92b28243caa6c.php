<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ielt7 ielt8 ielt9"><![endif]--><!--[if IE 7 ]><html lang="en" class="ie7 ielt8 ielt9"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>管理员</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="__PUBLIC__/front/css/bootstrap.min.css" rel="stylesheet">
		<link href="__PUBLIC__/front/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="__PUBLIC__/front/css/site.css" rel="stylesheet">
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#">Note</a>
						<div class="nav-collapse">
							<ul class="nav">
								<li class="active">
									<a href="">主页</a>
								</li>
								<li>
									<a href="__APP__/Settings/index.html">账户设置</a>
								</li>
								<li>
									<a href="__APP__/Help/index.html">帮助</a>
								</li>
							<!---	<li class="dropdown">
									<a href="help.php" class="dropdown-toggle" data-toggle="dropdown">Tours <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li>
											<a href="help.php">Introduction Tour</a>
										</li>
										<li>
											<a href="help.php">Project Organisation</a>
										</li>
										<li>
											<a href="help.php">Task Assignment</a>
										</li>
										<li>
											<a href="help.php">Access Permissions</a>
										</li>
										<li class="divider">
										</li>
										<li class="nav-header">
											Files
										</li>
										<li>
											<a href="help.php">How to upload multiple files</a>
										</li>
										<li>
											<a href="help.php">Using file version</a>
										</li>
									</ul>
								</li>--->
							</ul>
							<!--<form class="navbar-search pull-left" action="">
								<input type="text" class="search-query span2" placeholder="Search" />
							</form>
							<ul class="nav pull-right">
								<li>
									<a href="__APP__/Profile/index.html">@username</a>
								</li>
								<li>
									<a href="__APP__/Profile/index.html">Logout</a>
								</li>
							</ul>--->
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">
							<li class="nav-header">
								社团管理系统
							</li>
							<li class="active">
								<a href="__APP__/Message/index.html"><i class="icon-white icon-home"></i>编辑社团信息</a>
							</li>
							<li>
								<a href="__APP__/Members/index.html"><i class="icon-folder-open"></i>社团成员管理</a>
							</li>
							<li>
								<a href="__APP__/Change/index.html"><i class="icon-folder-open"></i>成员换届</a>
							</li>
							<li>
								<a href="__APP__/Tasks/index.html"><i class="icon-check"></i>社团活动添加</a>
							</li>
							<li>
								<a href="__APP__/Check/index.html"><i class="icon-user"></i>社员申请管理</a>
							</li>
							<li>
								<a href="__APP__/Messages/index.html"><i class="icon-envelope"></i>社团资料编辑</a>
							</li>
							<!--<li>
								<a href="__APP__/Data/index.html"><i class="icon-file"></i>上传文件</a>
							</li>-->
							<!--<li>
								<a href="__APP__/Activity/index.html"><i class="icon-list-alt"></i>活动</a>
							</li>--->
							<li class="nav-header">
								你的账户
							</li>
							<li>
								<a href="__APP__/Profile/index.html"><i class="icon-user"></i>个人信息</a>
							</li>
							<li>
								<a href="__APP__/Settings/index.html"><i class="icon-cog"></i>账户设置</a>
							</li>
							<li>
								<a href="__APP__/Password/index.html"><i class="icon-info-sign"></i>修改密码</a>
							</li>
							<li class="divider">
							</li>
							
							<!--<li class="nav-header">
								Bonus Templates
							</li>-->
							<li>
								<a href="__APP__/Show/index.html"><i class="icon-picture"></i>活动管理</a>
							</li>
							<!--<li>
								<a href="__APP__/Blank/index.html"><i class="icon-stop"></i> Blank Slate</a>
							</li>--->
						</ul>
					</div>
				</div>
				<div class="span9">
					<h1>
						个人信息
					</h1>
					<?php if(is_array($personal)): $i = 0; $__LIST__ = $personal;if( count($__LIST__)==0 ) : echo "暂时没有数据请点击账户设置完善个人信息" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="control-group">
								<label class="control-label" for="input01">姓名:</label>
									
								<div class="controls">
										
									<h4><?php echo ($vo["mname"]); ?></h4>
								</div>
							</div>	
								<div class="control-group">
								<label class="control-label" for="input01">性别:</label>
								
								<div class="controls">
										
									<h4><?php echo ($vo["msex"]); ?></h4>
								</div>
							</div>	
					
					<div class="control-group">
								<label class="control-label" for="input01">照片:</label>
								
								<div class="controls">
										
									 <img src="/bbs/Public/Uploads/<?php echo ($vo["mpicture"]); ?>" width="150" height="80" />
								</div>
							</div>	
							</br>
				
					<div class="control-group">
								<label class="control-label" for="input01">手机号:</label>
								
								<div class="controls">
										
									<h4><?php echo ($vo["mphone"]); ?></h4>
								</div>
							</div>	
							</br>
					
					<div class="control-group">
								<label class="control-label" for="input01">软件-专业-年级:</label>
							
						
								<div class="controls">
											<h4><?php echo ($vo["mdepartclass"]); ?></h4>
									
								</div>
							</div>	
				
							</br>
					          	<div class="control-group">
								<label class="control-label" for="input01">电子邮箱:</label>
								<div class="controls">
										<h4><?php echo ($vo["memail"]); ?></h4>
									
								</div>
							</div><?php endforeach; endif; else: echo "暂时没有数据请点击账户设置完善个人信息" ;endif; ?>
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/site.js"></script>
	</body>
</html>