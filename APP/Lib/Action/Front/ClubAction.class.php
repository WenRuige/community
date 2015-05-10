<?php
class ClubAction extends Action{
	
	public function index(){
		
		$User=M('Club');
		$this->club=$User->query("select * from project_club");
		import('ORG.Util.Page');// 导入分页类
		$count      = $User->where(mid)->count();// 查询满足要求的总记录数 $map表示查询条件
		//dump($count);
		$Page       = new Page($count,2);// 实例化分页类 传入总记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询
		$list = $User->where(mid)->order('mid')->limit($Page->firstRow.','.$Page->listRows)->select();
		//dump($list);
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		
		$this->display();
	}
	
	
}


?>