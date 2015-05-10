<?php
Class PictureAction extends Action{
    public function index(){
  
	$title=M("title");
    $Title= new Model();
	$titlelist =$Title->query("select *from project_title order by id asc limit 5");
	$this->title=$Title->query("select *from project_title order by id asc limit 5");
	//分页显示输出
	$Data= M('Picture');
    import('ORG.Util.Page');// 导入分页类
    $count      = $Data->where($id)->count();// 查询满足要求的总记录数 $map表示查询条件
    $Page       = new Page($count);// 实例化分页类 传入总记录数
	$Page = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
    $show       = $Page->show();// 分页显示输出																	// 进行分页数据查询
    $list = $Data->where($id)->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    $this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
	$this->picture=$Data->select();
    $this->display();

   }
  



}

?>

