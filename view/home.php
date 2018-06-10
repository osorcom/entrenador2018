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

        <nav>
        <ul>
          <li>
           <a href="index.php" id="index" class="btn btn-danger btn-lg btn-block">Index</a>
         </li>
         <li>
           <a href="participants.php" id="participantes" class="btn btn-warning btn-lg btn-block">Participantes</a>
        </li>
       </ul>
       </nav>

        <main>
            <center><h1>¡EJERCITA TU CELEBRO!!!</h1></center>

            <div class="card-footer text-center">
              <div class="card text-center">
              <h5 class="card-title" >Bien venido a la web de<strong>Entrenador2018</strong>. Aquí podrás responder preguntas
                sobre diferentes temas.</h5>
            </div>
            <br>
            <p>Actualmente disponemos de los siguientes temas:</p>
  <!--<p>S’ha de canviar l’aparença del Home i a cada tema se li ha d’afegir un número que indiqui
              quantes preguntes hi han a la base de dades sobre el tema.</p>
-->

            <table style="width:100%">
              <tr>
                <?php foreach ($tema as $fila) { echo
                "<th>{$fila['titulo']} ({$fila['numpreguntas']}) preguntas</th>"; } ?>
              </tr>
            </table>

        </main>
        <?php require_once "section/footer.php"; ?>

    </body>
</html>
