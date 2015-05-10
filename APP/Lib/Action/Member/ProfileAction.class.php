<?php

 class ProfileAction extends Action {
	 
	 
	 public function index(){
		 
		$User = M('Members');
		$username =$_SESSION['username'];
		//dump($username);
		$this->student=$User->query("select *from project_members where username='$username'");
		$this->display();
	 }
	public function do_profile(){
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 
		$upload->maxSize  = 3145728 ;// 
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 
		$upload->savePath =  './Public/Uploads/';// 
		$upload->thumb = true;
		$upload->thumbPrefix        = 's_';  //
       
		$upload->thumbMaxWidth      = '400,100';
       
		$upload->thumbMaxHeight     = '400,100';
		
		$upload->saveRule           = 'uniqid';
		if(!$upload->upload()) {
			$this->error($upload->getErrorMsg());
		}else{
			$uploadList = $upload->getUploadFileInfo();    
			$_POST['file'] = $uploadList[0]['savename'];
			$User  = M('Members');
			$mname=$_POST['mname'];
			$msex=$_POST['msex'];
			$memail=$_POST['memail'];
			$mphone=$_POST['mphone'];
			$mdepartclass=$_POST['mdepartclass'];
			//$JoinYear=$_POST['JoinYear'];
			$username=$_SESSION['username'];//
			//$type = $User->where('username="'.$username.'"')->getField('IsComplete');
			
		
				
			$data['mname']=$mname;
			$data['msex']=$msex;
			$data['memail']=$memail;
			$data['mphone']=$mphone;
			//$data['JoinYear']=$JoinYear;
			$data['loginip']=get_client_ip();	
			$data['logintime']= date("Y-m-d H:i:s");
			$data['mpicture'] = $_POST['file'];
			$data['mdepartclass']=$mdepartclass;
			//$data['username']=$_SESSION['username'];
			$User->where("username='$username'")->data($data)->save(); 
			// dump($_SESSION['username']);
			// dump($sname);
			// dump($sex);
			// dump($semail);
			// dump($sphone);
			// dump($JoinYear);
			$this->success('修改成功');		
			
		
		
		
		
		
	}
	}
	 
	 
 }


?>