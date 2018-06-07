<?php
use Interop\Container\ContainerInterface;

class HomeController {
   private $_c;

   public function __construct(ContainerInterface $container) {
       $this->_c = $container;
   }

   public function __invoke($request, $response, $args) {
     //$data['tema'] = $this->_c->data->getTemas();
     $data['tema'] = $this->_c->data->getTemasYumPreguntas();
     $response = $this->_c->view->render($response, "home.php", $tema);
     return $response;
   }
}
?>
