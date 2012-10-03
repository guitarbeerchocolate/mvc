<?php
class jimmy extends controller
{
	function __construct()
	{
		parent::__construct();		
	}	

	function gibbie($arg = FALSE)
	{
		echo 'In gibbie';
		echo $arg;
	}

	function __destruct()
	{
	
	}
}
?>