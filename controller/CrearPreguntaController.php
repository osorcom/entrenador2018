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


    function eliminar_tildes($cadena){

        //Codificamos la cadena en formato utf8 en caso de que nos de errores
        $cadena = utf8_encode($cadena);

        //Ahora reemplazamos las letras
        $cadena = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'a', 'A', 'A', 'A'),
            $cadena
        );

        $cadena = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena );

        $cadena = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena );

        $cadena = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena );

        $cadena = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena );

        $cadena = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $cadena
        );

        return $cadena;
    }
}

?>