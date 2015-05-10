<?php

class ChangeAction extends Action{
	
	public function index(){
		$username=$_SESSION['username'];
		$Member =M('Members');
		
		$mid=$Member->where('username="'.$username.'"')->getField('mid');
		//dump($mid);
		$this->person=$Member->query("select *from project_members where mid='$mid'");
	//$username=$_SESSION['username'];
	//dump($username);
		//dump($mid);
		//换届
		$this->display();
	}
		//	社团换届必须指定一个管理员
		//  给定现任社团团员标志
		//  将之前的社团管理员管理权限清零
		 public function do_change(){
			 $sign=$_POST['sign'];
			 $select =$_POST['select'];
			$username=$_SESSION['username'];
			$User= M('Members');
			$mid=$User->where('username="'.$username.'"')->getField('mid');
			$data['sign']=$sign;
			$User->where("mid='$mid'")->data($data)->save();
		//获取到当前社团的MID
		//把当前管理员的 IsAdmin 撤销
			$Login = M('Login');
			$data['IsAdmin']=0;
			$data['IsMember']=1;
			$Login->where("username='$username'")->data($data)->save(); 
			//帮接收到的select 
			$data['IsAdmin']=1;
			$data['IsMember']=0;
			$Login->where("username='$select'")->data($data)->save();
			//放置sign记号
			//dump($sign);
			
				
			 
			 //dump($sign);
			 //dump($select);
			 
			 
			 
		 }
	
	
}


?>