<?php
	class IndexAction extends Action {
		
		
		public function index(){
			
		 $Admin=M('Banner');
		 $this->banner=$Admin->query("select *from project_banner");
		 //dump($Admin->query("select *from project_banner"));
		//this->banner=$User->query("select *from cartoon_picture order by id desc");
		//$User=M('News');
		//$this->banner_news=$User->query("select *from cartoon_news order by rand() limit 0,5;");
		//$this->list=$User->query("select *from cartoon_news");
		//$User=M('News');
		
		//$value1 = session('name');
		//dump($value);
		$User=M('News');
		$this->show=$User->query("select *from project_news ");
		$Data = M('News'); // 实例化Data数据对象
		import('ORG.Util.Page');// 导入分页类
		$count      = $Data->where(id)->count();// 查询满足要求的总记录数 $map表示查询条件
		//dump($count);
		$Page       = new Page($count,5);// 实例化分页类 传入总记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询
		$list = $Data->where(id)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		//dump($list);
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		//$this->display(); // 输出模板
			$this->display();
			
		}
		
	}




?>