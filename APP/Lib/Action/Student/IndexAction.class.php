<?php
class IndexAction extends Action{
	
	
	public function index(){
		$username=$_SESSION['username'];
		//dump($username);
		
		$this->display();
	}
	
	
	
	
}




?>