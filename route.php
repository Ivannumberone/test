<?php

class Route
{	
	public function start()
	{	
	    require('config/config.php');
		$controllerName = 'Main';
		$tmp = explode('/', trim(trim($_SERVER['REQUEST_URI']),'/'));
		if (count($tmp) != 0)
		{
			$url = array_pop($tmp);
			if (in_array($url,$allPages))
			{
				$controllerName = $url;
			}
		}
		$controllerName = "\\controllers\\".'Controller'.$controllerName;
		$controller = new $controllerName;			
	    $controller->actionView();		
	}
}