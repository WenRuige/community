<?php

class ClubAction extends Action{
	
	
	public function index(){
		
		$User= M('Club');
		$this->club=$User->query("select *from project_club");
		$this->display();
	}
	
}


?>