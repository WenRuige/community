<?php

class DetailedAction extends Action{
	
	public function index($id){
	
	//dump($tid);
	$temp=M("Tclub");
	$this->tclub=$temp->query("select *from project_tclub where tid='$id'");
	//dump($temp->query("select *from project_tclub where tid='$id'"));
	//dump($this->temp);
	$this->display();
		
	}
	
	
}



?>