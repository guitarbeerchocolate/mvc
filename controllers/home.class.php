<?php
class home extends controller
{
	private $data;
	function __construct()
	{
		parent::__construct();		
		$help = $this->loadmodel('help');
		$this->data = $help->getData().'<br />Data added by the controller.';
		$this->view->render('home',$this->data);
	}

	function __destruct()
	{
	
	}
}
?>