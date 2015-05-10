<?php
class CreateAction extends Action {
	
	
	public function index(){
		
		$this->display();
	}
	public function do_create(){
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
		$User= M('tclub');
		$username =$_SESSION['username'];
		$cname=$_POST['cname'];
		$content=$_POST['content'];
		$sname=$_POST['sname'];
		$sdepartment=$_POST['sdepartment'];
		$sphone =$_POST['sphone'];
		
		
		$data['sname']=$sname;
		$data['sdepartment']=$sdepartment;
		$data['sphone']=$sphone;
		$data['cname']=$cname;
		$data['content']=$content;
		$data['username']=$username;
		$data['cpicture']=$_POST['file'];
		$data['rigistertime']= date("Y-m-d H:i:s");
		$User->add($data);
		$this->success('提交成功');
		}
		
		
		
	}
}


?>