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
            <p>Bien venido a la web de <strong>Entrenador2018</strong>. Aquí porás responder prenguntas sobre diferentes sobre diferentes temas.</p>
            <p>Actualmente disponemos de los siguientes temas:</p>
            <ul>
              <?php foreach ($tema as $fila) { echo "<li><a href='$BASE_URL/tema/{$fila['titulo_url']}'>{$fila['titulo']}</a></li>"; } ?>
            </ul>
        </main>
        <?php require_once "section/footer.php"; ?>
    </body>
</html>
