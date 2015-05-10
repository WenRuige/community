<?php
 class CheckAction extends Action{
	 
	 
	 public function index(){
		$User= M('Tclub');
		$this->temp=$User->query("select *from project_tclub");
		$this->display();
	 }
	 
 }



?>