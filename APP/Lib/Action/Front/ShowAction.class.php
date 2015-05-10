<?php
class ShowAction extends Action{
	
	
	public function index($id){
		
		
		$_SESSION['mid']=$id;
		
		
		$User = M('Activityview');
		$this->show=$User->query("select * from project_activityview where id='$id'");
		$Data = M('Frontlogin');
		$name=$_SESSION['name'];
		//dump($name);
		$this->picture=$Data->query("select * from project_frontlogin where nickname='$name'");
		$Comment= M('Commentview');
		$this->comment=$Comment->query("select * from project_Commentview where mid='$id'");
		//dump($Comment->query("select * from project_Commentview where mid='$id'"));
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
	public function do_login(){
		$name=$_POST['name'];
		$city=$_POST['city'];
		$sex =$_POST['sex'];
		$year=$_POST['year'];
		$img=$_POST['img'];
		//传过来的值 
		//把传过来的值和数据库比对
		$User  = M('Frontlogin');
		$name=$User->where('nickname="'.$name.'"')->find();//是否能查找到 name 的值
		if($name){	
				//如果找到了 不添加		
			$_SESSION['name']=$_POST['name'];
		}
		else{
			//没找到添加信息到数据库
		$User  = M('Frontlogin');
		$data['nickname'] = $_POST['name'];
		$data['city'] = $_POST['city'];
		$data['sex'] = $_POST['sex'];
		$data['year'] = $_POST['year'];
		$data['picture']=$_POST['img'];
		$data['logintime']=date("Y-m-d H:i:s");
		$data['loginip']= get_client_ip();
			$User->add($data);
			$_SESSION['name']=$_POST['name'];
			
		}
		
		
		
	}
}



?>