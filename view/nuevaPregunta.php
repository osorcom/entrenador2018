<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Entrenador 2018</title>
    <link rel="stylesheet" href="<?php echo $BASE_URL ?>/view/css/style.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL ?>/view/css/form-nuevapregunta.css">
</head>
<body>
<?php require_once "section/header.php"; ?>
<?php require_once "section/nav.php"; ?>
<main>
    <div class="container">
        <br>
        <div class="wrapper">
            <div class="preguntas">
                <p>Actualmente disponemos de los siguientes temas:</p>
                <ul>
                    <?php
                    echo "<br>";
                    foreach ($tema as $fila) {
                        echo "<li>{$fila['titulo']}</li>";
                    } ?>
                </ul>
            </div>
            <?php $url = "$BASE_URL"."/nuevapregunta";?>
            <div class="form">
                <h3>Nueva pregunta</h3>
                <form action="<?php $url?>" method="post">
                    <p class="full-width">
                        <label class="control-label"> Seleccione un tema o introduzca uno nuevo </label>
                        <input    type="text" name="titulo" minlength="5" maxlength="30" size="30" list="temas" required/>
                        <datalist id="temas">
                            <select name="temas">
                                <?php foreach ($tema as $fila) {
                                    echo "<option>{$fila['titulo']} ";
                                } ?>
                            </select>
                        </datalist>
                    </p>
                    <p class="full-width">
                        <label>Escriba una pregunta</label>
                        <input type="text" name="pregunta" minlength="1" maxlength="150" size="30" required>
                    </p>
                    <p class="full-width">
                        <label>Escriba las respuestas posibles y seleccione la correcta</label>
                    </p>
                    <p>
                        <input type="radio" name="optrespuesta" value="r1" required>
                    </p>
                    <p>
                        <input type="text" name="r1" minlength="1" maxlength="150" size="30" required>
                    </p>

                    <p>
                        <input type="radio" name="optrespuesta" value="r2" required>
                    </p>
                    <p>
                        <input type="text" name="r2" minlength="1" maxlength="150" size="30" required>
                    </p>

                    <p>
                        <input type="radio" name="optrespuesta" value="r3">
                    </p>
                    <p>
                        <input type="text" name="r3" minlength="1" maxlength="150" size="30" required>
                    </p>

                    <p>
                        <input type="radio" name="optrespuesta" value="r4">
                    </p>
                    <p>
                        <input type="text" name="r4" minlength="1" maxlength="150" size="30">
                    </p>


                    <p class="full-width">
                        <button submit>Crear pregunta</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <br><br>
</main>
<?php require_once "section/footer.php"; ?>
</body>
</html>
