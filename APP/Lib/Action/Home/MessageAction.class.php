<?php
Class MessageAction extends Action{

	public function index(){
		$username = $_SESSION['username'];
		$member = M('Members');
		$mid = $member->where('username="'.$username.'"')->getField('mid');
		$User = M('Club');
		$this->club=$User->query("select cname,cpicture,content from project_club where mid='$mid'");
		//dump($User->query("select cname,cpicture,content from project_club where mid='$mid'"));
			$this->display();
		}
		public function do_message(){
			import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','ppt','doc','xls','wmv');// 设置附件上传类型
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
		$username =$_SESSION['username'];
		//通过Mid来查找是否完成
		$member = M('Members');
		$mid = $member->where('username="'.$username.'"')->getField('mid');
		//$type = $member->where('mid="'.$mid.'"')->getField('IsComplete');
				$User = M('Club');			
			$data['content']=$_POST['content'];
			$data['cpicture'] = $_POST['file'];
			$User->where("mid='$mid'")->data($data)->save(); 
			$this->success('成功');		
			
		
			
			
			
		}
}
}





?>