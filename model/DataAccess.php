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

    public function getPreguntas($titulo_url){
        $sql = "SELECT preguntas.pregunta, temas.titulo, preguntas.id
                FROM preguntas 
                JOIN temas ON (preguntas.tema = temas.id) 
                WHERE temas.titulo_url LIKE '%{$titulo_url}%'
                ; ";
        $res = $this->pdo->query($sql);
        $article['preguntas']=$res->fetchAll();

        $sqlBis = "SELECT * FROM respuestas;";
        $resBis = $this->pdo->query($sqlBis);
        $article['respuestas']=$resBis->fetchAll();
        return $article;
    }
    //
}
?>
