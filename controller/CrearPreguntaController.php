<?php

use Interop\Container\ContainerInterface;

class CrearPreguntaController
{
    private $_c;

    public function __construct(ContainerInterface $container)
    {
        $this->_c = $container;
    }

    public function __invoke($request, $response, $args)
    {

        $params = $request->getParsedBody();
        $tema = $pregunta = $respuesta = $optrespuesta= "";
        if (isset($params['tema'])) {
            $tema = $params['tema'];
        }
        if (isset($params['pregunta'])) {
            $pregunta = $params['pregunta'];
        }
        if (isset($params['respuesta'])) {
            $respuesta = $params['respuesta'];


        }
        if (isset($params['optrespuesta'])) {
            $optrespuesta = $params['optrespuesta'];
        }
        $data['tema'] = $this->_c->data->crearTema($tema,$pregunta,$respuesta,$optrespuesta);



        $response = $this->_c->view->render($response, "nuevaPregunta.php", $data);
        return $response;



    }

}


?>