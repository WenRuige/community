<?php
class SolveAction extends Action{
	
	
		public	function index(){
	
			$this->display();
		}
		public function add(){
			//$username = $_SESSION['username'];
			$mid=$_POST['tid'];	
		 $temp=M("Tclub");
		 //$loginname =$temp->where('tid="'.$mid.'"')->getField('username');
		 $Temp= new Model();
		$list= $temp->where('tid="'.$mid.'"')->getField('tid,cname,content,registertime,cpicture,username');//mid社团ID号
		//获取社团 的 ID 名称 注册时间及 照片
		$id=$list[$mid]['tid'];
		$cname=$list[$mid]['cname'];
		$content=$list[$mid]['content'];
		$cpicture=$list[$mid]['cpicture'];
		//获取  管理员的 姓名，班级，联系方式
		$sname=$list[$mid]['sname'];
		$sphone=$list[$mid]['sphone'];
		$sdepartment=$list[$mid]['sdepartment'];
		$loginname=$list[$mid]['username'];
		//////接下来把穿过来的username 放到 管理员属性中
	
		
		//更新管理员的职能
		$Login = M('Login');
		$data['IsAdmin']=1;
		//dump($mid);
		$Login->where("username='$loginname'")->data($data)->save(); 
		
		
		$Manager = M('Members');
		$data['username']=$loginname;
		$data['mid']=$id;
		$Manager->add($data);
		
		$User= M('Club');
		$data['mid']=$id;
		$data['cname']=$cname;
		$data['cpicture']=$cpicture;
		$data['content'] =$content;
		$User->add($data);
		$result = $Temp->query("delete from project_tclub where tid=$mid");
		

	
			}
				public function delete(){
						$tid=$_POST['tid'];
						$temp=M("Tclub");
					 $temp->query("delete from project_tclub where tid=$tid");
					
				}
}



?>