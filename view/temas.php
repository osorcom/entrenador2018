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
            <h1>TEMAS</h1>
            <p>Temas disponibles: </p>
            <ul>
              <?php foreach ($tema as $fila) { echo "<li><a href:'\Temas\{$fila['titulo']}'>{$fila['titulo']}</a></li>"; } ?>
            </ul>
        </main>
        <?php require_once "section/footer.php"; ?>
    </body>
</html>
