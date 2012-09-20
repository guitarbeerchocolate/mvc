<?php
class controller
{
	function __construct()
	{
		$this->view = new view;
		$this->model = new model;		
	}

	function loadmodel($model)
	{
		require_once 'models/'.$model.'.class.php';
		return new $model;
	}

	function loadview($view)
	{
		require_once 'views/'.$view.'.class.php';
		return new $view;
	}

	function __destruct()
	{
	
	}
}
?>