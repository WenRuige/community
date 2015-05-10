<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ielt7 ielt8 ielt9"><![endif]--><!--[if IE 7 ]><html lang="en" class="ie7 ielt8 ielt9"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>Files - Akira</title>
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
								<li class="dropdown">
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
								</li>
							</ul>
							<form class="navbar-search pull-left" action="">
								<input type="text" class="search-query span2" placeholder="Search" />
							</form>
							<ul class="nav pull-right">
								<li>
									<a href="__APP__/Profile/index.html">@username</a>
								</li>
								<li>
									<a href="__APP__/Profile/index.html">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span3">
					<div class="well" style="padding: 8px 0;">
						<ul class="nav nav-list">
							<li class="nav-header">
								Akira
							</li>
							<li class="active">
								<a href="index.php"><i class="icon-white icon-home"></i>主页</a>
							</li>
							<li>
								<a href="__APP__/Project/index.html"><i class="icon-folder-open"></i>项目</a>
							</li>
							<li>
								<a href="__APP__/Tasks/index.html"><i class="icon-check"></i> 任务</a>
							</li>
							<li>
								<a href="__APP__/Messages/index.html"><i class="icon-envelope"></i>文本信息</a>
							</li>
							<li>
								<a href="__APP__/Files/index.html"><i class="icon-file"></i>文件</a>
							</li>
							<li>
								<a href="__APP__/Activity/index.html"><i class="icon-list-alt"></i>活动</a>
							</li>
							<li class="nav-header">
								Your Account
							</li>
							<li>
								<a href="__APP__/Profile/index.html"><i class="icon-user"></i>图文添加</a>
							</li>
							<li>
								<a href="__APP__/Settings/index.html"><i class="icon-cog"></i> 设置</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="help.php"><i class="icon-info-sign"></i>帮助</a>
							</li>
							<li class="nav-header">
								Bonus Templates
							</li>
							<li>
								<a href="__APP__/Gallery/index.html"><i class="icon-picture"></i>图片</a>
							</li>
							<li>
								<a href="__APP__/Blank/index.html"><i class="icon-stop"></i> Blank Slate</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="span9">
				
					<!--<ul class="thumbnails">
						<li class="span3">
							<a href="#" class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
							</a>
						</li>
						<li class="span3">
							<a href="#" class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
							</a>
						</li>
						<li class="span3">
							<a href="#" class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
							</a>
						</li>
						<li class="span3">
							<a href="#" class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
							</a>
						</li>
						<li class="span3">
							<a href="#" class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
							</a>
						</li>
						<li class="span3">
							<a href="#" class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
							</a>
						</li>
					</ul>--->
					
				
					
					
					
					<h2>图文展示</h2>
					<ul class="thumbnails">
					
					
			 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="span3">
							<div class="thumbnail">
								<img src="/bbs/Public/Uploads/<?php echo ($vo["picture"]); ?>" width="500" height="500" alt="" />
								<div class="caption">
									
									<p><?php echo ($vo["title"]); ?>.</p>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
						
						<!---<li class="span3">
							<div class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
								<div class="caption">
									<h5>Thumbnail label</h5>
									<p>Thumbnail caption right here...</p>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
								<div class="caption">
									<h5>Thumbnail label</h5>
									<p>Thumbnail caption right here...</p>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
								<div class="caption">
									<h5>Thumbnail label</h5>
									<p>Thumbnail caption right here...</p>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
								<div class="caption">
									<h5>Thumbnail label</h5>
									<p>Thumbnail caption right here...</p>
								</div>
							</div>
						</li>
						<li class="span3">
							<div class="thumbnail">
								<img src="img/tmp/260x180.gif" alt="" />
								<div class="caption">
									<h5>Thumbnail label</h5>
									<p>Thumbnail caption right here...</p>
								</div>
							</div>
						</li>---->
					</ul>
					<!---<h2>Gallery with Feature Graphic</h2>
					<ul class="thumbnails">
						<li class="span4">
							<a href="#" class="thumbnail">
								<img src="img/tmp/360x268.gif" alt="" />
							</a>
						</li>
						<li class="span2">
							<a href="#" class="thumbnail">
								<img src="img/tmp/160x120.gif" alt="" />
							</a>
						</li>
						<li class="span2">
							<a href="#" class="thumbnail">
								<img src="img/tmp/160x120.gif" alt="" />
							</a>
						</li>
						<li class="span2">
							<a href="#" class="thumbnail">
								<img src="img/tmp/160x120.gif" alt="" />
							</a>
						</li>
						<li class="span2">
							<a href="#" class="thumbnail">
								<img src="img/tmp/160x120.gif" alt="" />
							</a>
						</li>
						<li class="span2">
							<a href="#" class="thumbnail">
								<img src="img/tmp/160x120.gif" alt="" />
							</a>
						</li>
						<li class="span2">
							<a href="#" class="thumbnail">
								<img src="img/tmp/160x120.gif" alt="" />
							</a>
						</li>
						<li class="span2">
							<a href="#" class="thumbnail">
								<img src="img/tmp/160x120.gif" alt="" />
							</a>
						</li>
						<li class="span2">
							<a href="#" class="thumbnail">
								<img src="img/tmp/160x120.gif" alt="" />
							</a>
						</li>
					</ul>--->
					
				</div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/site.js"></script>
	</body>
</html>