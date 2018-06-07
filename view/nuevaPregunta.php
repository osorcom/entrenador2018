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
    <h1>NUEVA PREGUNTA</h1>

    <!--http://www.endreywalder.com/blog/html5-autocomplete-with-optional-select-->

    <form action="">
        <label> Seleccione un tema o introduzca uno nuevo<br/>
            <input type="text" name="tema" minlength="6" maxlength="30" size="30" list="temas"/>
            <datalist id="temas">

                <label>
                    <select name="temas">
                        <?php foreach ($tema as $fila) {
                            echo "<option>{$fila['titulo']}";
                        } ?>
                    </select>
                </label>
            </datalist>
        </label><br>
        <label>Escriba una pregunta</label> <br>
        <input type="text" name="pregunta" minlength="10" maxlength="150" size="30">
        <br>
        <label>Escriba las respuestas posibles y seleccione la correcta</label><br>
        <input type="text" name="r1" minlength="10" maxlength="150" size="30">
        <input type="radio" name="respuesta" value="r1">
        <br>
        <input type="text" name="r2" minlength="10" maxlength="150" size="30">
        <input type="radio" name="respuesta" value="r2">

        <br>
        <input type="text" name="r3" minlength="10" maxlength="150" size="30">
        <input type="radio" name="respuesta" value="r3">

        <br>
        <input type="text" name="r4" minlength="10" maxlength="150" size="30">
        <input type="radio" name="respuesta" value="r4">

        <br>
        <input type="text" name="r5" minlength="10" maxlength="150" size="30">
        <input type="radio" name="respuesta" value="r5"><br>
        <input type="button" value="Crear">
    </form>

    <p>Actualmente disponemos de los siguientes temas:</p>
    <ul>
        <?php foreach ($tema as $fila) {
            echo "<li>{$fila['titulo']}</li>";
        } ?>
    </ul>


</main>
<?php require_once "section/footer.php"; ?>
</body>
</html>
