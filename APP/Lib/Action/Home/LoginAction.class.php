<?php
Class LoginAction extends Action{


					public function index(){
						$this->display();
						
						}
						public function do_login(){
							//$IsAdmin=1;
							$username=$_POST['username'];
							$password=$_POST['password'];
							$_SESSION['username']=$username;
								$user=D('Login');
								$password_select=$user->where('username="'.$username.'"')->getField('password');
								$data_username=$user->where('username="'.$username.'"')->find();//
							if($data_username)
							{
								
									$data_password=$user->where('password="'.$password.'"')->find();//验证密码是否相同
								
							if($password==$password_select)
								{
									
									$type_admin = $user->where('username="'.$username.'"')->getField('IsAdmin');
									$type_system =$user->where('username="'.$username.'"')->getField('IsSystem');
									$type_member =$user->where('username="'.$username.'"')->getField('IsMember');
									if($type_admin)
									{
										//$this->success('欢迎您管理员');
										$this->redirect('Admin/index');	
										
									}
									
									else if($type_system){
		
										
										$this->redirect('System/Index/index');
									}
									else if($type_member)
									{	
										$this->redirect('Member/Index/index');
										//dump($username);
											//dump($password);
									}
									else{
										
										$this->redirect('Student/Index/index');
									}
									
								
									
								}
							else
								{
									$this->error('密码不正确');
								}
								
								}
							else{
							$this->error('姓名不存在');
							}




						}
						}




?>