<?php

class DetailedAction extends Action{
	
	public function index($tid=0){
	//dump($tid);
	$temp=M("Temp");
    $Temp= new Model();
	$templist =$Temp->query("select *from project_temp where tid='$tid'");
	$this->temp=$Temp->query("select *from project_temp where tid='$tid'");
	//dump($this->temp);
	$this->display();
		
	}
	
	
}



?>