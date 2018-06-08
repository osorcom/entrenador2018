<?php

class DataAccess{
    private $pdo;

    public function __construct($db){
        $this->pdo = new PDO("{$db['type']}:host={$db['host']};port={$db['port']};dbname={$db['name']}", $db['user'], $db['pass']);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getTemas(){
        $sql = "select * from temas;";
        $res = $this->pdo->query($sql);
        if($res) return $res->fetchAll();
        return [];
    }

    public function crearTema($tema,$pregunta){

        $sqlTema ="select id from temas where titulo=$tema;";
        $res = $this->pdo->query($sqlTema);
        if($res && $res->rowCount()>0){
            $idTema = $res->fetch();


            //todo insert pregunta con id
            $sqlPregunta = "insert into preguntas(pregunta,tema) values ($pregunta,$idTema)";
        } else {
            //crear tema nuevo y insertar pregunta en el tema nuevo
        }



       // $res = $this->pdo->query($sql);
        //if($res) return $res->fetchAll();
        return [];
    }

}
?>
