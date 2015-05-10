<?php

 class ActivityAction extends Action {
	 
	 
	 public function index(){
			//$username=$_SESSION['username'];
	//	$mid=$login->where('username="'.$username.'"')->getField('mid');
		//dump($mid);
			// $title=M("Members");
			// $Title= new Model();
			// $titlelist =$Title->query("select *from project_members where mid='$mid'");
			//dump($titlelist);
			// $this->members=$Title->query("select *from project_members where mid='$mid'");
			$user=M("Members");
			$username=$_SESSION['username'];
			$mid=$user->where('username="'.$username.'"')->getField('mid');
			$Data= M("Picture");
			$this->activity=$Data->query("select *from project_picture where mid='$mid'");
			
		 $this->display();
	 }
	 
	 
 }


?>