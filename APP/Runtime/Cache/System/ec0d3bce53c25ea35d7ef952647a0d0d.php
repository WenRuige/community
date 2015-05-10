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
		<style type="text/css">
#preview{width:150px;height:130px;border:1px solid #000;overflow:hidden;}
#imghead {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}
</style>
		
	
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
									<a href="__APP__/Member/Profile/index.html">账户设置</a>
								</li>-->
								<!--<li>
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
							</form>--->
							<!--<ul class="nav pull-right">
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
								<a href="index.php"><i class="icon-white icon-home"></i>主页</a>
							</li>-->
							<li>
								<a href="__APP__/System/Check/index.html"><i class="icon-folder-open"></i>处理社团申请</a>
							</li>
							<!--<li>
								<a href="__APP__/Project/index.html"><i class="icon-folder-open"></i>项目</a>
							</li>--->
							<li>
								<a href="__APP__/System/Activity/index.html"><i class="icon-check"></i>查看社团所有活动</a>
							</li>
							<li>
								<a href="__APP__/System/Club/index.html"><i class="icon-user"></i>管理社团个数</a>
							</li>
							<!--<li>
								<a href="__APP__/Messages/index.html"><i class="icon-envelope"></i>社团新闻</a>
							</li>
							<li>
								<a href="__APP__/Files/index.html"><i class="icon-file"></i>上传文件</a>
							</li>-->
							<!--<li>
								<a href="__APP__/Activity/index.html"><i class="icon-list-alt"></i>活动</a>
							</li>--->
							<li class="nav-header">
								个人信息
							</li>
							<li>
								<a href="__APP__/System/Password/index.html"><i class="icon-user"></i>修改密码</a>
							</li>
							<!--<li>
								<a href="#"><i class="icon-cog"></i>个人信息</a>
							</li>
								<li>
								<a href="#"><i class="icon-info-sign"></i>账户设置</a>
							</li>
							<li class="divider">
							</li>
						
							<li class="nav-header">
							
							</li>
							<li>
								<a href="#"><i class="icon-picture"></i>图片</a>
							</li>-->
							<!--<li>
								<a href="__APP__/Blank/index.html"><i class="icon-stop"></i> Blank Slate</a>
							</li>--->
						</ul>
					</div>
				</div>
				<div class="span9">
					

					
					
					<!--<div class="hero-unit">
						<h1>
							Welcome!
						</h1>
						<p>
							欢迎您社员 使用社团管理系统
						</p>
						<p>
					
  
</button>
						</p>
					</div>-->
					


									<!-- 模态框（Modal） -->
									<!---<form action="" method="post" >
									<center>
									<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
									   aria-labelledby="myModalLabel" aria-hidden="true">
									   <div class="modal-dialog">
										  <div class="modal-content">
											 <div class="modal-header">
												<button type="button" class="close" 
												   data-dismiss="modal" aria-hidden="true">
													  &times;
												</button>
												<h4 class="modal-title" id="myModalLabel">
												 社团选择
												</h4>
											 </div>
											 <h4>社团:</h4>
											 <select class="form-control">
												  <option>轮滑社</option>
												  <option>英语社</option>
												  <option>日语社</option>
												  <option>俄语设</option>
												  <option>软件</option>
												</select>-->
												<form  action="__URL__/alter_password" method="post" >
													<div class="col-md-6">
									<label for="SID" class="control-label">新密码</label>
			            <input type="text" class="form-control" name="password" id="password" placeholder="">
										</div>								

						<div class="col-md-6">
									<label for="SID" class="control-label">确认新密码</label>
			            <input type="text" class="form-control" name="repassword" id="password" placeholder="">
										</div>	
			 
											<button>
												   提交
												</button>
											
										  
										 
											</form>		
					
					
					
				<!--	<div class="well summary">
						<ul>
							<li>
								<a href="#"><span class="count">3</span> Projects</a>
							</li>
							<li>
								<a href="#"><span class="count">27</span> Tasks</a>
							</li>
							<li>
								<a href="#"><span class="count">7</span> Messages</a>
							</li>
							<li class="last">
								<a href="#"><span class="count">5</span> Files</a>
							</li>
						</ul>
					</div>--->
					<!--<h2>
					成员管理
					</h2>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									姓名
								</th>
								<th>
									性别
								</th>
								<th>
								部门
								</th>
								<th>
								职位
								</th>
								<th>
								学院
								</th>
								<th>
								年级
								</th>
								<th>
								电话
								</th>
							</tr>
						</thead>
						<tbody>
						<?php if(is_array($login)): $i = 0; $__LIST__ = $login;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<?php echo ($vo["username"]); ?>
								</td>
								<td>
									<?php echo ($vo["sex"]); ?>
								</td>
								<td>
									New Task
								</td>
								<td>
									4 days ago
								</td>
								<td>
									4 days ago
								</td>
								<td>
									4 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					
						</tbody>
					</table>
					<ul class="pager">
						<li class="next">
							<a href="activity.php">More &rarr;</a>
						</li>
					</ul>
                    <ul class="pager">
						<li class="next">
							More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>
						</li>
					</ul>----->
					
					
					
					
					
					
					
					

				</div>
			</div>
		</div>
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/js/site.js"></script>
	</body>
</html>