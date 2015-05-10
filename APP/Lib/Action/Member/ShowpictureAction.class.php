<?php


	class ShowpictureAction extends Action{
		
		
		public function index($id){
			
			
			
			$User = M("Picture");
					//$this->data = $User->select();
					$Picture = new Model();
					$this->picture=$Picture->query("select *from project_picture where id='$id'");
					$this->display();
			
			
			
		}
		
	}
?>