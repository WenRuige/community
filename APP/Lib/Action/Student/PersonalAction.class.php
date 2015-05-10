<?php
class PersonalAction extends Action{
	
	
	public function index(){
	$username=$_SESSION['username'];
	//dump($username);
	$personal=M("Student");
    $Personal= new Model();
	$personallist =$Personal->query("select *from project_student where username='$username'");
	$this->personal=$Personal->query("select *from project_student where username='$username'");
	//dump($username);
	$this->display();
	}
	
	
	
}



?>