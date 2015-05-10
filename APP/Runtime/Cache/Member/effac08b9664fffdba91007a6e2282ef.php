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
								<!--<li>
									<a href="__APP__/Settings/index.html">账户设置</a>
								</li>
								<li>
									<a href="__APP__/Help/index.html">帮助</a>
								</li>-->
								<!--<li class="dropdown">
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
							</ul>-->
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
							<!--<li class="active">
								<a href="__APP__/Member/Apply/index.html"><i class="icon-white icon-home"></i>申请加入</a>
							</li>--->
							<li>
								<a href="__APP__/Member/Information/index.html"><i class="icon-folder-open"></i>社团信息</a>
							</li>
							<!--<li>
								<a href="__APP__/Tasks/index.html"><i class="icon-check"></i> 任务</a>
							</li>---->
							<!--<li>
								<a href="__APP__/Member/Messages/index.html"><i class="icon-envelope"></i>社团新闻</a>
							</li>-->
							<!--<li>
								<a href="__APP__/Files/index.html"><i class="icon-file"></i>文件</a>
							</li>--->
							<li>
								<a href="__APP__/Member/Activity/index.html"><i class="icon-list-alt"></i>社团活动</a>
							</li>
							<li>
								<a href="__APP__/Member/Member/index.html"><i class="icon-list-alt"></i>社员查看</a>
							</li>
							
							
							<li class="nav-header">
								个人信息
							</li>
							<li>
								<a href="__APP__/Member/Personal/index.html"><i class="icon-user"></i>个人信息</a>
							</li>
							<li>
								<a href="__APP__/Member/Profile/index.html"><i class="icon-cog"></i>账户设置</a>
							</li>
							<li>
								<a href="__APP__/Member/Password/index.html"><i class="icon-info-sign"></i>修改密码</a>
							</li>
							<li class="divider">
							</li>
							<!--<li>
								<a href="#"><i class="icon-info-sign"></i>帮助</a>
							</li>
							<li class="nav-header">
								Bonus Templates
							</li>-->
							<li>
								<a href="__APP__/Member/Previous/index.html"><i class="icon-picture"></i>往期活动展示</a>
							</li>
							<!--<li>
								<a href="#"><i class="icon-stop"></i> Blank Slate</a>
							</li>-->
						</ul>
					</div>
				</div>
				<div class="span9">
					
					<?php if(is_array($picture)): $i = 0; $__LIST__ = $picture;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="control-group">
								<label class="control-label" for="input01"></label>
									</br>
								<div class="controls">
										
									<center><h2><?php echo ($vo["title"]); ?></h2><center>
									</br>
									<center>上传者:<?php echo ($vo["uploadname"]); ?>&nbsp;&nbsp;&nbsp;时间-<?php echo ($vo["logintime"]); ?><center>
								</div>
							</div>	
							
							</br>
					
					<div class="control-group">
								<label class="control-label" for="input01"></label>
									</br>
								<div class="controls">
										
									<center> <img src="/bbs/Public/Uploads/<?php echo ($vo["picture"]); ?>" width="400" height="600" /></center>
								</div>
							</div>	
							</br>
				
					
							</br>
					
					
							</br>
					          	<div class="control-group">
								<label class="control-label" for="input01"></label>
								<div class="controls">
										
									</br>
								<center><h4>	<?php echo ($vo["content"]); ?></h4></center>
								
								</div>
							</div>		
							</br>
							
							附件:<a></a>
							<ul class="files zebra-list">
						<li>
							<i class="icon-file"></i> <a class="title" href="/bbs/Public/Uploads/<?php echo ($vo["file"]); ?>"><?php echo ($vo["file"]); ?></a> <span class="meta">Uploaded <em><?php echo ($vo["logintime"]); ?></em> by <em><?php echo ($vo["uploadname"]); ?></em></span>
						</li>
						
					</ul><?php endforeach; endif; else: echo "" ;endif; ?>							
			<!--		<div class="pagination">
						<ul>
							<li class="disabled">
								<a href="#">&laquo;</a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">&raquo;</a>
							</li>
						</ul>
					</div>---->
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/site.js"></script>
	</body>
</html>