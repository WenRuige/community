<?php

		Class GalleryAction extends Action{
			public function index(){
			
					$User = M("Picture");
					//$this->data = $User->select();
					$Picture = new Model();
					$pitcturelist= $Picture->query("select *from project_picture order by id ");
					$this->data=$Picture->query("select *from project_picture order by id ");
					$this->display();
			
			}
		
		
		
		
		}




?>

