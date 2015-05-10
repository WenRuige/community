<?php
class SolveAction extends Action{
	
	
		public	function index(){
	
			$this->display();
		}
		public function add(){
			// $username=$_SESSION['username'];
			// $admin =M('Login');
			// $admin->where("username='$username'")->data($data)->save(); 
			
		 $mid=$_POST['tid'];	
		 $temp=M("Temp");
		 $Temp= new Model();
		// $type = $temp->where('tid="'.$mid.'"')->getField('IsAdmin');
		 //if($type)
		 //{
		 //$data['IsAdmin']=1;
		 //$temp->add($data);
		 //}
		$list= $temp->where('tid="'.$mid.'"')->getField('tid,sno,tname,tsex,tpicture,tphone,tdepartclass,mid,tcontent,IsAdmin,username');//mid社团ID号
		//$mid=1;
		//社团属性 mid,cid,mname,msex memail,mphone,mpicture,mdepartclass
		$sno=$list[$mid]['sno'];
		$mname=$list[$mid]['tname'];//姓名
		$msex=$list[$mid]['tsex'];//性别
		$mphone=$list[$mid]['tphone'];//手机
		$mpicture=$list[$mid]['tpicture'];//照片
		$mdepartclass=$list[$mid]['tdepartclass'];//年级=系别
		$sid=$list[$mid]['mid'];
		$username=$list[$mid]['username'];
		
		//查找是否是会员
		$IsAdmin=$list[$mid]['IsAdmin'];
		$User= M('Members');//实例化MEMBERS
		$data['sno']=$sno;
		$data['mname']=$mname;
	    $data['msex']=$msex;
		$data['mphone']=$mphone;
		$data['mpicture']=$mpicture;
		$data['mid']=$sid;
		$data['mdepartclass']=$mdepartclass;
		$data['loginip']=get_client_ip();	
		$data['logintime']= date("Y-m-d H:i:s");
		$data['username']=$username;
		$User->add($data);
		 $Login =M('Login');
		 $data['IsMember']=1;
		$Login->where("username='$username'")->data($data)->save(); 
		 
		$result = $Temp->query("delete from project_temp where tid=$mid");	
}
				public function delete(){
					$temp=M("Temp");
							$Temp= new Model();
					
					 $mid=$_POST['tid'];
					$result = $Temp->query("delete from project_temp where tid=$mid");
					
				}
}



?>