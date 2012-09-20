<?php
class bootstrap
{
	private $config;
	function __construct()
	{
		$this->config = (object) parse_ini_file('config.ini', true);
		$url = explode('/',rtrim(strtolower($_GET['url'])));
		$url[0] = (!$url[0] || ($url[0] == 'index')) ? 'home' : $url[0];
		$filepath = 'controllers/'.$url[0].'.class.php';
		if(!file_exists($filepath))
		{
			$filepath = 'controllers/home.class.php';
			$url[0] = 'home';
		}
		require_once $filepath;
		$controller = new $url[0];

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
?>