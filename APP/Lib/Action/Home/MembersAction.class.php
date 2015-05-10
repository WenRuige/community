<?php

	Class MembersAction extends Action{
	
	public function index(){
		$login=D('Members');
		//$Login= new Model();
		$username=$_SESSION['username'];
		$mid=$login->where('username="'.$username.'"')->getField('mid');
		//dump($mid);
			$title=M("Members");
			$Title= new Model();
			$titlelist =$Title->query("select *from project_members where mid='$mid'");
			//dump($titlelist);
			$this->members=$Title->query("select *from project_members where mid='$mid'");
			$this->display();
	
	}
	
	
	
	}








?>