<?php

	require_once __DIR__."./estadistica.php";

	function middleware_estadistica ($request, $response, $next)
	{
		$path = $request->getUri()->getPath();
	
		switch ($path)
		{
			case ("/"):
			case ("/estadisticas"):
			{
				break;
			}
		
			default:
			{
				$db = parse_ini_file("config.ini");
				$estadistica = new Estadistica ($db);
				
				$estadistica->new_visited ($path);
			}
		}
	
		return $next ($request, $response);
	}

?>
