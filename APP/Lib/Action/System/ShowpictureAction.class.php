<?php
class ShowpictureAction extends Action{
	
	
	public function index($id){
			$User =M('Activityview');
		$this->club=$User->query("select *from project_activityview where id='$id'");
		$this->display();
	}
}


?>