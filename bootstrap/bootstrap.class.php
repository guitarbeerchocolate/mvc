<?php
class bootstrap
{
	private $config;
	function __construct()
	{
		if(isset($_GET['url']))
		{
			$url = array();		
			$s = rtrim(strtolower($_GET['url']));
			$temp = array(explode('/',$s));
			$url = $temp[0];			
		}
		else
		{
			$url = array();			
		}	

		$url[0] = (empty($url) || ($url[0] == 'index')) ? 'home' : $url[0];
		$filepath = 'controllers/'.$url[0].'.class.php';
		
		if(!file_exists($filepath))
		{
			$filepath = 'controllers/home.class.php';
			$url[0] = 'home';
		}

		require_once $filepath;
		$controller = new $url[0];

		if(isset($url[0]) && !isset($url[1]))
		{
			$controller->loadview($url[0]);
		}
		else
		{
			if(isset($url[2]))
			{
				$controller->{$url[1]}($url[2]);
			}
			elseif(isset($url[1]))
			{
				$controller->{$url[1]}();			
			}	
		}
		
	}
}
?>