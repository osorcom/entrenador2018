<?php

class DataAccess{
    private $pdo;

    public function __construct($db){
        $this->pdo = new PDO("{$db['type']}:host={$db['host']};port={$db['port']};dbname={$db['name']}", $db['user'], $db['pass']);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

  /*  public function getTemas(){
        $sql = "select * from temas;";
        $res = $this->pdo->query($sql);
        if($res) return $res->fetchAll();
        return [];
    }*/
    public function getTemasYumPreguntas(){
        $sql = "SELECT temas.titulo, count(pregunta)
                as numpreguntas
                FROM preguntas
                JOIN temas ON (preguntas.tema=temas.id)
                GROUP BY temas.titulo";

        $res = $this->pdo->query($sql);
        if($res) return $res->fetchAll();
        var_dump($res);
        return [];
    }
    //S’ha de canviar l’aparença del Home i a
    // cada tema se li ha d’afegir un número que indiqui quantes
    //preguntes hi han a la base de dades sobre el tema.
  /*  public function getTemasYumPreguntas();
        $sql = "select * from preguntas;";
        $res = $this->pdo->query($sql);
        if($res) return $res->fetchAll();
        return [];
    }*/
    //muestra numero de preguntas diferentes de temas

  /*  public function getTemasYumPreguntas(){
        $sql = "SELECT count(pregunta) as numpreguntas,preguntas.tema
                from preguntas
                JOIN temas ON (preguntas.tema=temas.id)
                GROUP BY tema";
        $res = $this->pdo->query($sql);
        if($res) return $res->fetchAll();
        var_dump($res);
        return [];
    }*/

  /*  public function getTemasYumRespuestas(){
        $sql = "SELECT count(respuestas) as numrespuestas,respuestas.tema
                from respuestas
                JOIN temas ON (respuestas.tema=temas.id)
                GROUP BY tema";
        $res = $this->pdo->query($sql);
        if($res) return $res->fetchAll();
        var_dump($res);
        return [];
    }*/

}
?>
