<?php
	/*
	1、浏览者		调用控制器，对其发出操作指令；
	2、控制器		按指令，选取一个合适的模型；
	3、模型		按控制器指令，获取相应的数据；
	4、控制器		按指令选取相应的视图；；
	5、视图		把模型取到的数据，按用户想要的样式显示出来
	
	//require_once()用于引入相应的需要用到的文件，与including相比，其遇到错误，会返回一个严重的错误，而including只会返回有错误。
	require_once('/libs/Controller/testController.class.php');
	require_once('/libs/Model/testModel.class.php');
	require_once('/libs/View/testView.class.php');
	
	//此句用于新建一个控制器以供使用，然后在把新建的控制器赋给一个变量，方便调用；
	$testController = new testController();
	//此句为用创建的控制器，去调用函数，show()函数为控制器里创建的函数；
	$testController->show();
	*/
	
	//URL形式 index.php?controller=控制器名称&method=方法名
	require_once('function.php');
	//此语句用于编写一个允许访问的控制器名、方法名的数组
	$controllerAllow = array('test','index');
	$methodAllow = array('test','index','show');
	
	//in_array用于判断$_GET['controller']获取到的controller字符串是否存在于$controllerAllow数组里，若存在，则用daddslashes($_GET['controller'])里的controller，若不存在，则用默认值index,method同理
	$controller = in_array($_GET['controller'],$controllerAllow)?daddslashes($_GET['controller']):'index';
	$method = in_array($_GET['method'],$methodAllow)?daddslashes($_GET['method']):'index';
	C($controller,$method);
?>