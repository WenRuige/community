<?php

class shownewsAction extends Action{
	
	public function index($id){
		
		//dump($id);
		
		$User= M('News');
		$this->news=$User->query("select *from project_news where id='$id'");
		//dump($User->query("select *from project_news where id='$id'"));
		$this->display();
	}
	
	
}


?>