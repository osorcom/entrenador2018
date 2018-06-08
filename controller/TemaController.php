<?php  
use Interop\Container\ContainerInterface;

class Teamcontroller{
	
	public function __construct(ContainerInterface $container) {
       $this->_c = $container;
   	}

   	public function __invoke($request, $response, $args) {
   		$titulo = $args['titulo'];
   		$info = $this->c->data->getPreguntas($titulo);
   		
   	}

}
?>