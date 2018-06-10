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
            <h1>HOME</h1>
            <p>Preguntas que has de responder:</p>
            <?php
                foreach ($info as $pregunta) {?>
                    <form>
                        <h2><?php echo "{$pregunta['pregunta']}";?></h2>
                    </form>
        <?php }
            ?>
        </main>
        <?php require_once "section/footer.php"; ?>
    </body>
</html>