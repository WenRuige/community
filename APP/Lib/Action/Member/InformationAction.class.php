<?php

 class InformationAction extends Action {
	 
	 
	 public function index(){
				$login=D('Login');
		//$Login= new Model();
				$username=$_SESSION['username'];
				$mid=$login->where('username="'.$username.'"')->getField('mid');
					//dump($mid);
					//dump($mid);
					
				$title=M("Club");
				$Title= new Model();
				$titlelist =$Title->query("select *from project_club where mid='$mid'");
				//dump($titlelist);
				$this->information=$Title->query("select *from project_club where mid='$mid'");
		 
		 $this->display();
	 }
	 
	 
 }


?>