<?php
/*
	//控制器的目的是来调用模型、视图，将模型获取的数据传递给视图，由视图进行相关显示
	
	//此句用于创建一个控制器，以便调用
	class testController{
		//此句创建一个控制器内的函数，以便其他文件调用该函数
		function show(){
			//此句创建一个模型，以供使用，并复制给一个变量，已方便调用
			$testModel = new testModel();
			//模型通过自身的get()函数，获取数据，并把值赋给$data变量
			$data = $testModel->get();
			//此句创建一个视图，以供使用，并赋值给一个变量，以方便调用
			$testView = new testView();
			//视图调用自身的display()函数，并传递$data值
			$testView -> display($data);
		}
	}
*/

	class testController{
		function show(){
			$testModel = M('test');
			$data = $testModel -> get();
			$testView = V('test');
			$testView -> display($data);
		}
	}
?>