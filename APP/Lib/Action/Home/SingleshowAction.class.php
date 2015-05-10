<?php
Class SingleshowAction extends Action{


	public function index($id=0){
	$user = M('Members');	
	$News= new Model();
	$this->show=$user->query("select *from project_members where id=$id order by id desc limit 1");
	$this->display();
	}
	public function do_power(){
		
		$hidden_id=$_POST['id'];
		dump($hidden_id);
		$select=$_POST['select'];
		dump($select);
		$User=M('Members');
		$data['mposition']=$select;
		$User->where("id='$hidden_id'")->data($data)->save(); 
		$this->success("成功");
		
	}
	

}


?>