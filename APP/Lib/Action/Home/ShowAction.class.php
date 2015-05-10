<?php
class ShowAction extends Action{
	
	
	public function index(){
		
		
		
		$User = M("Picture");
		$username=$_SESSION['username'];
		$Data = M('Members');
		$mid = $Data->where('username="'.$username.'"')->getField('mid');
		//dump($mid);
		$this->picture=$User->query("select *from project_picture where mid='$mid'");
		$this->display();
	}
		public function delete($id){
			//dump($id);
			$User = M("Picture");
			$User->query("delete from project_picture where id='$id'");
			$this->success("删除成功");
			
		}
	
}


?>