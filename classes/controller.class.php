<?php
class controller
{
	public $view;
	function __construct()
	{
		$this->model = new model;		
	}

	function loadmodel($model)
	{
		require_once 'models/'.$model.'.class.php';
		return new $model;
	}

	function loadview($view, $data = NULL)
	{
		$this->view = new view;
		$this->view->render($view,$data);		
	}

	function __destruct()
	{
	
	}
}
?>