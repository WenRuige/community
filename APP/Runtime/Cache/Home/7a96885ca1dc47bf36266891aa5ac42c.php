<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>Create Account</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<h1 class="margin-bottom-15">创建一个账户</h1>
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="__URL__/do_register" method="post">
				<div class="form-inner">
					<div class="form-group">
			          <!--<div class="col-md-6">		          	
			            <label for="first_name" class="control-label">First Name</label>
			            <input type="text" class="form-control" id="first_name" placeholder="">		            		            		            
			          </div>--->
			          <!--<div class="col-md-6">		          	
			            <label for="last_name" class="control-label">Realname</label>
			            <input type="text" class="form-control" id="last_name" placeholder="">		            		            		            
			          </div>--->             
			        </div>
					<div class="form-group">
					 <div class="col-md-6">		          	
			            <label for="username" class="control-label">用户名:</label>
			            <input type="text" class="form-control" id="username"  name="username" placeholder="">		
					
			          </div>
					  
			       <!--<div class="col-md-6">		          	
			            <label for="username" class="control-label">姓名</label>
			            <input type="text" class="form-control" id="name"  name="name" placeholder="">		            		            		            
			          </div>
			          <div class="col-md-6 templatemo-radio-group">
					性别: &nbsp;&nbsp;
			          	<label class="radio-inline">
		          			<input type="radio" name="optionsRadios" id="optionsRadios1" value="m"> 男
		          		</label>
		          		<label class="radio-inline">
		          			<input type="radio" name="optionsRadios" id="optionsRadios2" value="f"> 女
		          		</label>
			          </div>  --->           
			        </div>
					
			     <!--  <div class="form-group">
			          <div class="col-md-12">		          	
			            <label for="username" class="control-label">手机号</label>
			            <input type="text" class="form-control" name="phone" id="phone" placeholder="">		            		            		            
			          </div>              
			        </div>--->	
			        
			        <div class="form-group">
			          <div class="col-md-6">
			            <label for="password" class="control-label">密码</label>
			            <input type="password" class="form-control" name="password" id="password" placeholder="">
			          </div>
			          <div class="col-md-6">
			            <label for="password" class="control-label">确认密码</label>
			            <input type="password" class="form-control" name="repassword" id="password_confirm" placeholder="">
			          </div>
			        </div>
			        <div class="form-group">
			         <!-- <div class="col-md-12">
			            <label><input type="checkbox">I agree to the <a href="javascript:;" data-toggle="modal" data-target="#templatemo_modal">Terms of Service</a></label>
			          </div>--->
			        </div>
			        <div class="form-group">
			          <div class="col-md-12">
			            <input type="submit" value="创建" class="btn btn-info">
			            <a href="__APP__/Home/Login" class="pull-right">Login</a>
			          </div>
			        </div>	
				</div>				    	
		      </form>		      
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="templatemo_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="myModalLabel">规则</h4>
	      </div>
	      <div class="modal-body">
	      <p>ll</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>