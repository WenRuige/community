<?php
Class ProfileAction extends Action{


	public function index(){
	
	
		$username=$_SESSION['username'];
	//dump($username);
		$personal=M("Members");
		$Personal= new Model();
		$personallist =$Personal->query("select *from project_members where username='$username'");
		$this->personal=$Personal->query("select *from project_members where username='$username'");
		//dump($username);
		$this->display();
	
	}
	// public function do_profile(){
	
		// import('ORG.Net.UploadFile');
		// $upload = new UploadFile();// 实例化上传类
		// $upload->maxSize  = 3145728 ;// 设置附件上传大小
		// $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		// $upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		// $upload->thumb = true;
		// $upload->thumbPrefix        = 's_';  //生产2张缩略图
        //设置缩略图最大宽度
		// $upload->thumbMaxWidth      = '400,100';
        //设置缩略图最大高度
		// $upload->thumbMaxHeight     = '400,100';
		//设置上传文件规则
		// $upload->saveRule           = 'uniqid';
		// if(!$upload->upload()) {// 上传错误提示错误信息
			// $this->error($upload->getErrorMsg());
		// }else{// 上传成功
			// $uploadList = $upload->getUploadFileInfo();    
			// $_POST['file'] = $uploadList[0]['savename'];
			// $User  = M('Picture');
			// $User->add($data);
			// $title=$_POST['title'];
			// $content=$_POST['content'];
			// $data['content']=$content;
			// $data['title'] = $title;
			// $data['time']= date("Y-m-d H:i:s");
			// $data['picture'] = $_POST['file'];
			// $User->add($data);
			
			// $this->success('上传成功！');	
		// }
	
	
	
	
	// }





}





?>