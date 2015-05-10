<?php
class ActivityAction extends Action{
	
	
	public function index(){
		$User =M('Activityview');
		$this->club=$User->query("select *from project_activityview");
		//dump($User->query("select *from project_activityview"));
		$this->display();
	}
}



?>