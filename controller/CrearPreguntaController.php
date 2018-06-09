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

        //se obtiene el listado de temas
        $data['tema'] = $this->_c->data->getTemas();

        // se obtiene los parametros enviados
        $params = $request->getParsedBody();

        if (isset($params['titulo'])) {
            $titulo = $params['titulo'];
            $data['nuevapregunta']['titulo'] = $titulo;
        }
        if (isset($params['pregunta'])) {
            $pregunta = $params['pregunta'];
            $data['nuevapregunta']['pregunta'] = $pregunta;
        }

        if (isset($params['r1'])) {
            $r1 = $params['r1'];
            $data['nuevapregunta']['r1'] = $r1;
        }
        if (isset($params['r2'])) {
            $r2 = $params['r2'];
            $data['nuevapregunta']['r2'] = $r2;
        }
        if (isset($params['r3'])) {
            $r3 = $params['r3'];
            $data['nuevapregunta']['r3'] = $r3;
        }
        if (isset($params['r4'])) {
            $r4 = $params['r4'];
            $data['nuevapregunta']['r4'] = $r4;
        }
        // se guarda el valor de la respuesta correcta
        if (isset($params['optrespuesta'])) {
            $optrespuesta = $params['optrespuesta'];
            $data['nuevapregunta']['verdadera'] = $optrespuesta;
        }


        $data['tema'] = $this->_c->data->crearTema($titulo, $pregunta, $r1, $r2, $r3, $r4, $optrespuesta);

        $response = $this->_c->view->render($response, "nuevaPregunta.php", $data);
        return $response;


    }
}

?>