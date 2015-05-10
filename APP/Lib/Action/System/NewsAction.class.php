<?php
class NewsAction extends Action{
	
	public function index(){
		
		$this->display();
	}
	public function do_news(){
		
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
		$_POST['file1']=$uploadList[1]['savename'];
			
			//dump($uploadList[0]['savename']);
			//dump($uploadList[1]['savename']);
			$User = M('News');
			$content=$_POST['content'];
			$title=$_POST['title'];
			
			$data['title']=$title;			
			$data['content']=$content;
			$data['picture']=$_POST['file'];
			$data['file']=$_POST['file1'];
			$data['logintime']= date("Y-m-d H:i:s");
			
			
			dump($title);
			dump($content);
			$User->add($data);
			//dump($username);
			$this->success('上传成功！');	

		}
		
		
	}
	
}



?>