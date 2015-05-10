<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="ie6 ielt7 ielt8 ielt9"><![endif]--><!--[if IE 7 ]><html lang="en" class="ie7 ielt8 ielt9"><![endif]--><!--[if IE 8 ]><html lang="en" class="ie8 ielt9"><![endif]--><!--[if IE 9 ]><html lang="en" class="ie9"> <![endif]--><!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en"><!--<![endif]--> 
	<head>
		<meta charset="utf-8">
		<title>学生信息申请提交</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="__PUBLIC__/front/css/bootstrap.min.css" rel="stylesheet">
		<link href="__PUBLIC__/front/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="__PUBLIC__/front/css/site.css" rel="stylesheet">
		<link href="__PUBLIC__/js/jquery.min.js" rel="stylesheet">
		<link href="__PUBLIC__/js/bootstrap.js" rel="stylesheet">
		<style type="text/css">
#preview{width:150px;height:130px;border:1px solid #000;overflow:hidden;}
#imghead {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}
</style>
		
		<script type="text/javascript">
 
 
                //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
          var MAXWIDTH  = 260; 
          var MAXHEIGHT = 180;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//                 img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight )
            {
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;
                 
                if( rateWidth > rateHeight )
                {
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else
                {
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
             
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
</script>  
		
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
									<a href="__APP__/Student/Profile/index.html">账户设置</a>
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
								</li>-->
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
								<a href="__APP__/Student/Apply/index.html"><i class="icon-white icon-home"></i>申请加入</a>
							</li>
							<li>
								<a href="__APP__/Student/Create/index.html"><i class="icon-folder-open"></i>创建社团</a>
							</li>
							<!--
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
							</li>--->
							<!--<li class="nav-header">
								Your Account
							</li>
							<li>
								<a href="__APP__/Student/Personal/index.html"><i class="icon-user"></i>个人信息</a>
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
							</li>-->
						</ul>
					</div>
				</div>
				<div class="span9">
					<!--<h3>
					个人信息
					</h3>--->
					
					<form id="picture_upload" class="form-horizontal" action="__URL__/do_create" method="post" enctype="multipart/form-data">
						<fieldset>
							<legend>社团信息填写</legend>
							<div class="control-group">
							<div class="control-group">
								<label class="control-label" for="input01">姓名 *:</label>
								<div class="controls">
									<input type="text" class="input-xlarge" name="sname" id="input01"  />
								</div>
							</div>
								<div class="control-group">
								<label class="control-label" for="input01">专业-年纪-班级 *</label>
								<div class="controls">
									<input type="text" class="input-xlarge" name="sdepartment" id="input01"/>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">联系方式*:</label>
								<div class="controls">
									<input type="text" class="input-xlarge" name="sphone" id="input01"  />
								</div>
							</div>
								
							<div class="control-group">
								<label class="control-label" for="input01">社团名称*:</label>
								<div class="controls">
									<input type="text" class="input-xlarge" name="cname" id="input01"  />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="fileInput">照片*</label>
								<div class="controls">
							<div id="preview">
									<img id="imghead"class="img-rounded" width=100 height=100 border=0 >
								</div>
										<input class="input-file" name="file" type="file" onchange="previewImage(this)" />
									</div>
								</div>
							

							
						<div class="control-group">
								<label class="control-label" for="input01">原因*</label>
								<div class="controls">
									<textarea class="form-control"name="content" rows="3"></textarea>
								</div>
							</div>	
												
							<!--<div class="control-group">
								<label class="control-label" for="textarea">Content</label>
								<div class="controls">
									<textarea class="input-xlarge"  name="content" id="textarea" rows="4">please write your text here>></textarea>
								</div>
							</div>--->
							<!---<div class="control-group">
								<label class="control-label" for="optionsCheckbox">Public Profile</label>
								<div class="controls">
									<input type="checkbox" id="optionsCheckbox" value="option1" checked="checked" />
								</div>
							</div>		---->				
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">提交</button> <button class="btn">取消</button>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<script src="__PUBLIC__/js/jquery.min.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/js/site.js"></script>
	</body>
</html>