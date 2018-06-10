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
        $sql = "SELECT preguntas.pregunta, temas.titulo 
                FROM preguntas 
                JOIN temas 
                ON (preguntas.tema = temas.id) 
                WHERE temas.titulo_url LIKE '%{$titulo_url}%'
                ORDER BY RAND() LIMIT 5; 
                ";
        $res = $this->pdo->query($sql);
        if($res) return $res->fetchAll();
        return [];
    }
}
?>
