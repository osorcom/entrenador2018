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
<?php $url = "$BASE_URL"."/nuevapregunta";?>
    <form action="<?php $url?>" method="post">
        <label> Seleccione un tema o introduzca uno nuevo<br/>
            <input type="text" name="tema" minlength="5" maxlength="30" size="30" list="temas"/>
            <datalist id="temas">
                <select name="temas">
                    <?php foreach ($tema as $fila) {
                        echo "<option> {$fila['id']}-{$fila['titulo']} ";
                    } ?>
                </select>
            </datalist>
        </label><br>
        <label>Escriba una pregunta</label><br>
        <input type="text" name="pregunta" minlength="1" maxlength="150" size="30"> <br>

        <label>Escriba las respuestas posibles y seleccione la correcta</label><br>
        <input type="radio" name="optrespuesta" value="r1">
        <input type="text" name="r1" minlength="1" maxlength="150" size="30"><br>
        <input type="radio" name="optrespuesta" value="r2">
        <input type="text" name="r2" minlength="1" maxlength="150" size="30"><br>
        <input type="radio" name="optrespuesta" value="r3">
        <input type="text" name="r3" minlength="1 maxlength=" 150" size="30"><br>
        <input type="radio" name="optrespuesta" value="r4">
        <input type="text" name="r4" minlength="1" maxlength="150" size="30"><br>
        <button submit>Crear pregunta</button>
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
