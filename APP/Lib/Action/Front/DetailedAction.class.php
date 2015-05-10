<?php
class DetailedAction extends Action{
	
	
	public function index($id){
		$User=M('Club');
		$cname=$User->where('mid="'.$id.'"')->getField('cname');
		//dump($cname);
		$Data= M('Activityview');
		$this->show=$Data->query("select *from project_activityview where cname='$cname'");
		//dump($Data->query("select *from project_activityview limit 5"));
		$Admin= M('Members');
		$this->members=$Admin->query("select *from project_members where mid='$id'");
		//dump($Admin->query("select *from project_members where mid='$id'"));
	
		$this->display();
	}
	
	
	
}


?>