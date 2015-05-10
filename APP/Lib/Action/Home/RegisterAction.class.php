<?php
Class RegisterAction extends Action{

public function index(){

$this->display();

}
		public function do_register(){

			$User = M('Login');//实例化数据库
			//接受传过来的值
			$username=$_POST['username'];
			$password=$_POST['password'];
			$repassword=$_POST['repassword'];
			$data['username'] =$username;
			$data['password']=$password;	
			$data['loginip'] = get_client_ip();			
			$data['logintime']= date("Y-m-d H:i:s");
			$User->add($data);
			$this->success('上传成功！');	







		}



}






?>