<?php
	class Estadistica
	{
		private $pdo;
		private $url;
		
		public function __construct ($db)
		{
			$this->pdo = new PDO (
				"{$db['type']}:host={$db['host']};port={$db['port']};dbname={$db['name']}", $db['user'], $db['pass']);
			$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			
			$this->url = "";
		}
		
		public function new_visited ($url)
		{
			if ($this->pdo != null)
			{
				$this->url = $url;
				
				$visited =
					$this->page_visited_count();

				if ($visited == 0)
					$this->create_visited_url();
					
				if ($visited > 0)
					$this->update_visited_url();					
			}
		}
		
		private function page_visited_count()
		{
			$result = (-1);
			
			if ($this->url != "")
			{
				$result =
					$this->pdo->query (
						"select count(*) from estadistica where url=\"{$this->url}\";")
																				->fetchColumn();
			}
			
			return $result;
		}
	
		private function create_visited_url()
		{
			if ($this->url != "")
			{
				$this->pdo->query (
					"insert into estadistica (url, visitas) values (\"{$this->url}\", 1);");
			}
		}
		
		private function update_visited_url()
		{
			if ($this->url != "")
			{
				$this->pdo->query (
					"update estadistica set visitas=visitas+1 where url=\"{$this->url}\";");
			}
		}
	}
?>
