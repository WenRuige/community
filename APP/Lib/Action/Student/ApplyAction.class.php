<?php
class ApplyAction extends Action{
	
	
			public function index(){
				
				$User =M('Club');
				$this->club=$User->query("select mid,cname from project_club");
				$this->display();
				
			}
			public function do_apply(){	
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
			$username=$_SESSION['username'];
			$User  = M('Temp');
				
			$sno=$_POST['sno'];//学号
			$tname=$_POST['tname'];//姓名
			$sex=$_POST['sex'];//性别
			$tphone=$_POST['tphone'];//手机号
			$tdepartclass=$_POST['tdepartclass'];//专业号
			$tcontent=$_POST['tcontent'];
			$select=$_POST['select'];
			$data['mid']=$select;
			//dump($select);
			// $username=$_SESSION['username'];//把当前的SESSION赋值给username
			// $type = $User->where('username="'.$username.'"')->getField('IsComplete
			$data['tname']=$tname;
			$data['tsex']=$sex;
			$data['tdepartclass']=$tdepartclass;
			$data['tphone']=$tphone;
			$data['tcontent']=$tcontent;
			$data['sno']=$sno;
			$data['loginip']=get_client_ip();	
			$data['logintime']= date("Y-m-d H:i:s");
			$data['tpicture'] = $_POST['file'];
			$data['username']=$username;
			$User->add($data);
			//$data['username']=$_SESSION['username'];
			 
		// dump($sno);
		// dump($tname);
		// dump($sex);
		// dump($tdepartclass);
		// dump($tphone);
		// dump($tcontent);
			$this->success('上传成功');		
				
				
				
				
				
		
	
		}
	
}
}

?>