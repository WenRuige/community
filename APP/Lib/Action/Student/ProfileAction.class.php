<?php
Class ProfileAction extends Action{


	public function index(){
	
	
	
		$this->display();
	}
	
	
	
	public  function do_profile(){
	
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		$upload->thumb = true;
		$upload->thumbPrefix        = 's_';  //生产2张缩略图
        //设置缩略图最大宽度
		$upload->thumbMaxWidth      = '400,100';
        //设置缩略图最大高度
		$upload->thumbMaxHeight     = '400,100';
		//设置上传文件规则
		$upload->saveRule           = 'uniqid';
		if(!$upload->upload()) {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		}else{// 上传成功
			$uploadList = $upload->getUploadFileInfo();    
			$_POST['file'] = $uploadList[0]['savename'];
			$User  = M('Student');
			$sname=$_POST['sname'];
			$sex=$_POST['sex'];
			$semail=$_POST['semail'];
			$sphone=$_POST['sphone'];
			$JoinYear=$_POST['JoinYear'];
			$username=$_SESSION['username'];//把当前的SESSION赋值给username
			$type = $User->where('username="'.$username.'"')->getField('IsComplete');
			
			if($type){
				
			$data['sname']=$sname;
			$data['sex']=$sex;
			$data['semail']=$semail;
			$data['sphone']=$sphone;
			$data['JoinYear']=$JoinYear;
			$data['loginip']=get_client_ip();	
			$data['logintime']= date("Y-m-d H:i:s");
			$data['spicture'] = $_POST['file'];
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
			else{
			$data['sname']=$sname;
			$data['sex']=$sex;
			$data['semail']=$semail;
			$data['sphone']=$sphone;
			$data['JoinYear']=$JoinYear;
			$data['loginip']=get_client_ip();	
			$data['logintime']= date("Y-m-d H:i:s");
			$data['spicture'] = $_POST['file'];
			$data['username']=$_SESSION['username'];
			$data['IsComplete']=1;
			$User->add($data);
			// dump($_SESSION['username']);
			// dump($sname);
			// dump($sex);
			// dump($semail);
			// dump($sphone);
			// dump($JoinYear);
			$this->success('上传成功！');	
			}
		}
	
	
	
	
	}
}
	










?>