<?php

 class MessagesAction extends Action {
	 
	 
	 public function index(){
		 
		 $login=D('Login');
		//$Login= new Model();
		$username=$_SESSION['username'];
		$mid=$login->where('username="'.$username.'"')->getField('mid');
		$_SESSION['mid']=$mid;
		$User=M('Messages');
		$this->messages=$User->query("select *from project_messages where mid='$mid'");
		 $this->display();
	 }
	 
	 
	 
 }


?>