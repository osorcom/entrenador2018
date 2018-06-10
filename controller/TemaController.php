<?php  
use Interop\Container\ContainerInterface;

class TemaController{
  private $_c;

	public function __construct(ContainerInterface $container) {
       $this->_c = $container;
   	}

   	public function __invoke($request, $response, $args) {
   		$titulo = $args['titulo'];
   		$info = $this->_c->data->getPreguntas($titulo);
      $answers['info'] = $info;
   		$response = $this->_c->view->render($response, "test.php", $answers);
   		return $response;
   	}

}
?>