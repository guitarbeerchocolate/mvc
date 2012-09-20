<?php
class view extends page
{
	private $data;
	function __construct($title = NULL)
	{
		parent::__construct($title);	
	}

	function render($name, $data = NULL)
	{
		if($data)
		{
			$this->data = $data;	
		}		
		require_once 'views/'.$name.'.class.php';
	}

	function __destruct()
	{
		parent::__destruct();
	}
}
?>