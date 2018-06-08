<?php

use Interop\Container\ContainerInterface;

class NuevaPreguntaController
{
    private $_c;

    public function __construct(ContainerInterface $container)
    {
        $this->_c = $container;
    }

    public function __invoke($request, $response, $args)
    {
        $data['tema'] = $this->_c->data->getTemas();
        $response = $this->_c->view->render($response, "nuevaPregunta.php", $data);
        return $response;
    }
}


