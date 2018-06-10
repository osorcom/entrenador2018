<?php

class DataAccess
{
    private $pdo;

    public function __construct($db)
    {
        $this->pdo = new PDO("{$db['type']}:host={$db['host']};port={$db['port']};dbname={$db['name']}", $db['user'], $db['pass']);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getTemas()
    {
        $sql = "select * from temas order by titulo asc;";
        $res = $this->pdo->query($sql);
        if ($res) return $res->fetchAll();
        return [];
    }

    public function crearTema($titulo, $pregunta, $r1, $r2, $r3, $r4, $optrespuesta)
    {
        try{
            //busqueda del id del tema
            $sqlTema = "select id from temas where titulo='$titulo';";
            $res = $this->pdo->query($sqlTema);
            if ($res && $res->rowCount() > 0) { $tema = $res->fetch();
                foreach ($tema as $idTema) { $idTema;}

            } else {

              $url=  CrearPreguntaController::eliminar_tildes($titulo);
                $sqlTema = "insert into temas(titulo,titulo_url)  values('$titulo','$url' )";
                echo "$sqlTema";
                $this->pdo->query($sqlTema);
                $sqlIdTema  ="select id from preguntas order by id desc limit 1";
                $res =$this->pdo->query($sqlIdTema); $tema = $res->fetch();
                foreach ($tema as $idTema) { echo "$idTema";}
            }

            //insert de la pregunta
            $sqlPregunta = "insert into preguntas(pregunta,tema) values ('$pregunta','$idTema');";
            $this->pdo->query($sqlPregunta);

            // se obtiene el id de la ultima pregunta insertada
            $sqlIdPregunta  ="select id from preguntas order by id desc limit 1";
            $res =$this->pdo->query($sqlIdPregunta); $pregunta = $res->fetch();
            foreach ($pregunta as $idPregunta) { $idPregunta;}

            //insert respuestas
            if ($optrespuesta == "r1") {$sol1 = 1;$sol2 = 0;$sol3 = 0;$sol4 = 0;}
            if ($optrespuesta == "r2") {$sol1 = 0;$sol2 = 1;$sol3 = 0;$sol4 = 0;}
            if ($optrespuesta == "r3") {$sol1 = 0;$sol2 = 0;$sol3 = 1;$sol4 = 0;}
            if ($optrespuesta == "r4") {$sol1 = 0;$sol2 = 0;$sol3 = 0;$sol4 = 1;}

            $res =$sqlRespuestas = "insert into respuestas (respuesta, verdadera, pregunta) values
                        ('$r1',$sol1,$idPregunta),
                        ('$r2',$sol2,$idPregunta),
                        ('$r3',$sol3,$idPregunta),
                        ('$r4',$sol4,$idPregunta) ;";
            $this->pdo->query($sqlRespuestas);

            $sql = "select * from temas;";
            $res = $this->pdo->query($sql);
            if ($res) return $res->fetchAll();
            return [];

        }catch (Exception $exception){

            echo "<p class='error'>ERROR: Ha ocurrido un error al insertar una pregunta nueva</p>";

        }


    }

}

?>
