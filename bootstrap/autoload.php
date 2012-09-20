<?php
function __autoload($class_name) 
{
	$config = array();
	$classlibraries = array();	
	$config = parse_ini_file('config.ini', true);
	$classlibraries = explode(',',$config[classlibraries]);
	$classString = '';
	foreach($classlibraries as $value)
	{
		$classString = trim($DOCUMENT_ROOT.$value.'/'.$class_name.'.class.php');
		if(file_exists($classString))
		{			
			require_once $classString;
		}
	}
}
?>