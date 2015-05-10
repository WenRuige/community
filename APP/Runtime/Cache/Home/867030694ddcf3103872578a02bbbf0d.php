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
								</li>---->
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
							<li class="active">
								<a href="__APP__/Message/index.html"><i class="icon-white icon-home"></i>编辑社团信息</a>
							</li>
							<li>
								<a href="__APP__/Members/index.html"><i class="icon-folder-open"></i>社团成员管理</a>
							</li>
							<!--<li>
								<a href="__APP__/Project/index.html"><i class="icon-folder-open"></i>项目</a>
							</li>--->
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
				
				
					<?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "暂时没有数据请点击账户设置完善个人信息" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="control-group">
								<label class="control-label" for="input01">姓名:</label>
								
								
										
									<h4><?php echo ($vo["mname"]); ?></h4>
								
							</div>	
							<input type="hidden" value="<?php echo ($vo["id"]); ?>" name="id">
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
									</br>
								<div class="controls">
										
									<h4><?php echo ($vo["mphone"]); ?></h4>
								</div>
							</div>	
						
					
					<div class="control-group">
								<label class="control-label" for="input01">专业年级:</label>
								</br>
						
								<div class="controls">
											<h4><?php echo ($vo["mdepartclass"]); ?></h4>
									
								</div>
							</div>	
							<div class="control-group">
								<label class="control-label" for="input01">职位:</label>
							
									<h4><?php echo ($vo["mposition"]); ?></h4>
							
							</div>	
			
					          	<div class="control-group">
								<label class="control-label" for="input01">电子邮箱:</label>
								<div class="controls">
										<h4><?php echo ($vo["memail"]); ?></h4>
									</br>
								</div>
							</div><?php endforeach; endif; else: echo "暂时没有数据请点击账户设置完善个人信息" ;endif; ?>
					<!---<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									Name
								</th>
								<th>
									Client
								</th>
								<th>
									Tasks
								</th>
								<th>
									Messages
								</th>
								<th>
									Files
								</th>
								<th>
									Progress
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Nike.com Redesign
								</td>
								<td>
									Monsters Inc
								</td>
								<td>
									<span class="badge">11</span>
								</td>
								<td>
									<span class="badge">2</span>
								</td>
								<td>
									<span class="badge">4</span>
								</td>
								<td>
									<div class="progress">
										<div class="bar" style="width: 60%;"></div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									Twitter Server Consulting
								</td>
								<td>
									Bad Robot
								</td>
								<td>
									<span class="badge">7</span>
								</td>
								<td>
									<span class="badge">3</span>
								</td>
								<td>
									<span class="badge">0</span>
								</td>
								<td>
									<div class="progress">
										<div class="bar" style="width: 90%;"></div>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									Childrens Book Illustration
								</td>
								<td>
									Evil Genius
								</td>
								<td>
									<span class="badge">10</span>
								</td>
								<td>
									<span class="badge">2</span>
								</td>
								<td>
									<span class="badge">1</span>
								</td>
								<td>
									<div class="progress">
										<div class="bar" style="width: 20%;"></div>
									</div>
								</td>
							</tr>
						</tbody>
					</table>--->
					<!--<a class="toggle-link" href="#new-project"><i class="icon-plus"></i> New Project</a>
					<form id="new-project" class="form-horizontal hidden">
						<fieldset>
							<legend>New Project</legend>
							<div class="control-group">
								<label class="control-label" for="input01">Project Name</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="select01">Client</label>
								<div class="controls">
									<select id="select01"> <option>-- Select client --</option> <option>Bad Robot</option> <option>Evil Genius</option> <option>Monsters Inc</option> </select>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="textarea">Project Summary</label>
								<div class="controls">
									<textarea class="input-xlarge" id="textarea" rows="3"></textarea>
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Create</button> <button class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>--->
				</div>
			</div>
		</div>
		<script src="__PUBLIC__/front/js/jquery.min.js"></script>
		<script src="__PUBLIC__/front/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/front/js/site.js"></script>
	</body>
</html>