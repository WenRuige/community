<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'project', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'project_', // 数据库表前缀
	'SHOW_PAGE_TRACE' =>true,
	'TMPL_PARSE_STRING' =>  array( // 添加输出替换
    '__STUIMAGE__' => __ROOT__.'/instructor/Uploads/Stuimage',
	'__PUBLIC__' => __ROOT__.'/APP/Public'
    ),
	'APP_GROUP_LIST' => 'System,Home,Member,Student,Front', //项目分组设定
	'DEFAULT_GROUP'  => 'Home'//默认分组
);
?>