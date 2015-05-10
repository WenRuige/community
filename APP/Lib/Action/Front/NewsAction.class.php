<?php

class NewsAction extends Action{
	
	public function index($id){
		//dump($id);
		$_SESSION['mid']=$id;
		
		
		$User = M('Activityview');
		$this->news=$User->query("select * from project_activityview where id='$id'");
		$Data = M('Frontlogin');
		$name=$_SESSION['name'];
		//dump($name);
		$this->picture=$Data->query("select * from project_frontlogin where nickname='$name'");
		$Comment= M('Commentview');
		$this->comment=$Comment->query("select * from project_Commentview where mid='$id'");
		//dump($Comment->query("select * from project_Commentview where mid='$id'"));
		$name=$_SESSION['name'];
		//dump($name);
		$this->display();
	}
	public function do_comment(){
		
		$comment=$_POST['comment'];
		$name =$_SESSION['name'];
		$mid=$_SESSION['mid'];
		$Data=M('frontlogin');
		$id=$Data->where("nickname='$name'")->getField('id');
		//dump($id);
		$User=M('Messages');
		$data['logintime']=date("Y-m-d H:i:s");
		$data['content']=$comment;
		$data['nickname']=$value;
		$data['mid']=$mid;
		//dump($comment);
		$data['id']=$id;
		$User->add($data);	
		$this->success("评论成功");
		
	}
	
	
}

?>