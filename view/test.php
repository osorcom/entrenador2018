<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Entrenador 2018</title>
        <link rel="stylesheet" href="<?php echo $BASE_URL ?>/view/css/style.css">
    </head>
    <body>
        <?php require_once "section/header.php"; ?>
        <?php require_once "section/nav.php"; ?>
        <main>
            <h1>TEST</h1>
            <p>Preguntas que has de responder:</p>
            <form method="POST">
            <?php
                foreach ($info['preguntas'] as $pregunta) {?>
                        <h2><?php echo "{$pregunta['pregunta']}";?></h2>
                        <?php 
                            foreach ($info['respuestas'] as $respuesta) {
                                if (!strcmp($pregunta['id'],$respuesta['pregunta'])){?>
                                    <input type="radio" name="option<?php echo "{$respuesta['id']}";?>" value="<?php echo "{$respuesta['verdadera']}";?>"> <?php echo "{$respuesta['respuesta']}"; ?><br>
                               <?php 
                                }
                            }
                        }
                        ?>
            <button type="submit">Comprobar</button>
            </form>
        <?php 
            if (isset($_POST)){
                foreach ($_POST as $response) {       
                    if (!strcmp($response, $respuesta['verdadera'])) {
                        echo "<strong>Respuesta Correcta!</strong></br>";
                    }else{
                        echo "<strong>Respuesta Incorrecta!</strong></br>";
                    }
                }
            }
        ?>
        </main>
        <?php require_once "section/footer.php"; ?>
    </body>
</html>