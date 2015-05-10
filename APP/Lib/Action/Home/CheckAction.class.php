<?php
Class CheckAction extends Action{

	public function index(){
		
		$login=D('Members');
		//$Login= new Model();
		$username=$_SESSION['username'];
		$mid=$login->where('username="'.$username.'"')->getField('mid');
		
		//$loginlist=$login->query("select");
		
			$title=M("Temp");
			$Title= new Model();
			$titlelist =$Title->query("select *from project_temp where mid='$mid'");
			//dump($mid);
			$this->title=$Title->query("select *from project_temp where mid='$mid'");
			
			
			$this->display();
	
	}

}



?>