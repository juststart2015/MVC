<?php
	//创建一个C函数，用于获取判断调用哪个控制器，$name变量获取要调用的控制器名
	function C($name,$method){
		//引入要使用的控制器，根据$name变量，选取相应的控制器文件
		require_once('/libs/Controller/'.$name.'Controller.class.php');
		//$testController = new testController();
		//$testController->show();
		//eval()函数把其内的字符串当作一段可执行的php代码来执行,
		eval ('$obj = new '.$name.'Controller();$obj->'.$method.'();');
		/*
		采用eval()函数的好处是简单，但是不安全，可以用另一种安全的写法：
			$Controller = $name.'Controller';
			$obj = new $Controller();
			$obj -> $method();
		*/
	}
	
	function M($name){
		require_once('/libs/Model/'.$name.'Model.class.php');
		//$testModel = new testModel();
		eval('$obj = new '.$name.'Model();');
		/*采用eval()函数的好处是简单，但是不安全，可以用另一种安全的写法：
			$Model = $name.'Model';
			$obj = new $Model();
		*/
		return $obj;
	}
	
	function V($name){
		require_once('/libs/View/'.$name.'View.class.php');
		//$testView = new testView();
		eval('$obj = new '.$name.'View();');
		/*采用eval()函数的好处是简单，但是不安全，可以用另一种安全的写法：
			$View = $name.'View';
			$obj = new $View();
		*/
		return $obj;
	}
	
	//此函数用于对非法字符进行转义，addslashes()为php内置函数，用于转移特殊字符，get_magic_quotes_gpc()是系统默认的对特殊字符进行转义的函数，这里判断其是否为打开状态，若打开，则不进行后面的转义，若没打开，则进行后面addslashes()的转义
	function daddslashes($str){
		return (!get_magic_quotes_gpc())?addslashes($str):$str;
	}
?>