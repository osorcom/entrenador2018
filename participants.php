<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Entrenador 2018</title>
    <script src="view/js/javascript.js"/></script>
    <link rel="stylesheet" href="view/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

    <body>
<!--tasca-7-Afegir una nova opció al menú de navegació que mostrarà
 una pàgina estàtica on es presentarà als desenvolupadors de
 l’aplicació i la tasca que ha fet cadascú.
-->

      <?php require_once "view/section/header.php"; ?>

      <nav>
        <ul>
          <li>
           <a href="participants.php" id="participants" class="btn btn-dark btn-lg btn-block">Participants</a>
         </li>
         <li>
          <a href="index.php" id="home" class="btn btn-dark btn-lg btn-block">Index</a>
        </li>
       </ul>
     </nav>
<div id="container1">
<main>
      <div id="Entrenador2018" class="tabcontent">

            <h3>PARTICIPANTS:</h3><br>

            <p><strong> Carles</strong>
            <p><strong> Juan</strong>
            <p><strong> David S.</strong>
            <p><strong> Dostow</strong>
            <p><strong> David G.</strong>
            <p><strong> Carmen</strong>
            <p><strong> Sonia</strong>

            <p>Amb l'ajuda immillorable i paciència absolute del nostre col·laborador referent a possibles dubtes...:
              <strong>Óscar</strong> </p><br>

            <h3> Programar un entrenador de preguntes tipus test.</h3>
            <h4>Base de dades donada:</h4>

            <center><img src="view/img/captura.png" width="250px" class="card text-center" alt="imatge tables"></center>

            <p> L’aplicació permetrà crear i eliminar preguntes, fer preguntes aleatòries dins d’un tema
              seleccionat, generar petits exàmens de 5 preguntes, obtenir estadístiques
              d’us. Dividim l’aplicació en petites tasques que s’assignaran als
              participants i que hauran de resoldre de manera individual. Tot el procés es controlarà a través
                del gestor de versions GIT. </p>

            <p>Gestor de versions.</p><p>El nostre projecte està allotjat a https://github.com/osorcom/entrenador2018.
            Actualment tenim la base de dades i un esquelet del que serà el projecte. El repositori està
            dividit en dues branques, la branca master i la branca develop. Per cada tasca nova que s’hagi
               d’implementar es generarà una nova branca que derivarà de develop i un cop s’hagi acabat
                d’implementar es tornarà a fusionar amb develop.</p>
                <p>Esquelet del projecte consta d’una estructura
                slim+php-view amb el home ja implementat. Per configurar l’accés al gestor de bases de dades
                 s’ha d’editar l’arxiu config.ini i per fer la instal·lació s’ha d’executar des del navegador
                 l’arxiu install.php.</p>

                 <p>Cada pregunta està associada a un tema (matemàtiques, història, cultura, cinema, programació...)
                 i haurà de tenir entre 2 i N possibles respostes, de les que només una serà correcta. </p>
                 <br>
                 <h4>Tasques</h4>
                 <p> La tasca 0 l’ha de fer tothom.<p> La resta de tasques s’assignaran una per alumne.
                    Un cop finalitzades les tasques, s’haurà de fusionar la branca de cada tasca amb la branca develop. </p>
                <h4>Tasca 0. </h4>
                <h5>Aquesta tasca l'han de fer tots el participants:</h5><br>
                <p>Preparar l’espai de treball.</p>
                <p> 1. Fer una còpia local del repositori.</p>
                <p> 2. Generar una branca nova,
                 derivada de develop, per desenvolupar la tasca assignada.</p>
                 <p> 3. Reconstruir la carpeta vendor.</p><p> 4. Corregir
                  l’arxiu de configuració «config.ini»</p>
                  <p> 5. Instal·lar la base de dades.</p>
                  <p> 6. Generar la primera versió de
                  la branca nova. </p>

          </div>
<!---->
        <div id="Carles" class="tabcontent">
            <h3>Carles</h3>
            <h5>Tasca número 1</h5>
            <p>Preguntes per tema.</p><p> Afegir una nova opció al menú de navegació que
               carregarà una pàgina amb tots els temes disponibles. Quan l’usuari
                seleccioni un tema es carregarà una nova pàgina amb una pregunta
                obtinguda aleatòriament sobre el tema triat. La nova pàgina, a més,
                 mostrarà un enllaç a la següent pregunta aleatòria sobre el mateix
                 tema i un altre per validar la resposta donada. </p>
          </div>



          <div id="Juan" class="tabcontent">
            <h3>Juan</h3>
            <p>Tarea número 2</p>
            <p>Test de 5 preguntes.</p> Afegir una nova opció al menú de navegació
              que carregarà una pàgina amb tots els temes disponibles. Quan
               l’usuari seleccioni un tema es carregarà una nova pàgina amb
               5 preguntes seleccionades aleatòriament sobre el tema triat.
               La nova pàgina incorporarà un enllaç per validar les respostes donades. </p>
          </div>

          <div id="DavidS" class="tabcontent">
            <h3>David</h3>
            <p>Tarea número 3</p>
            <p> Nova pregunta.</p> Afegir una nova opció al menú de navegació
               que obrirà un formulari on es podrà escriure una nova
               pregunta amb les seves N possibles respostes. Al formulari
                també s’haurà de poder indicar que de les possibles respostes
                 és la correcta i el tema al que pertany la pregunta. Si es
                 confirma el formulari, es registrarà la nova pregunta amb
                 totes les seves respostes a la base de dades. Si el tema
                 no existeix, es crearà. Per poder fer us d’aquesta opció
                 s’ha d’estar autenticat com a usuari. </p>
          </div>

          <div id="Dostow" class="tabcontent">
            <h3>Dostow</h3>
            <p>Tarea número 4</p>
            <p> Eliminar pregunta.</p><p> Afegir una nova opció al menú de navegació que mostrarà un llistat de totes les preguntes i el tema al que pertanyen. La llista es podrà filtrar per tema i/o per paraules contingudes a la pregunta. Totes les preguntes tindran un botó associat que permetrà eliminar la pregunta amb totes les possibles respostes. Per poder
              fer us d’aquesta opció s’ha d’estar autenticat com a usuari.
            </p>
          </div>

          <div id="DavidG" class="tabcontent">
            <h3>DavidG</h3>
            <p>Tarea número 5</p>
            <p> Recollir estadística de visites.<p> Implementar un middleware
               encarregat de comptar el nombre de cops que es visita cada
                pàgina de l’entrenador2018. Cada cop que es visiti una de
                les pàgines, si la seva URL ja estava registrada a la base
                de dades, s’incrementarà el seu comptador, si no, es crearà una fila nova a la taula i s’iniciarà el seu comptador a 1. El middleware no ha de tenir en compte
               ni el home ni la pàgina que mostra les estadístiques. </p>
          </div>

          <div id="Carmen" class="tabcontent">
            <h3>Carmen</h3>
            <p>Tarea número 5</p>
            <p> Mostrar gràfic de visites.<p> Afegir una nova opció al
              menú de navegació que mostrarà un diagrama de barres amb
               les visites que ha obtingut cada pàgina. Per fer-ho pots
               servir-te de llibreries ja fetes com http://www.chartjs.org/ </p>
          </div>

          <div id="Sonia" class="tabcontent">
            <h3>Sonia</h3>
            <p>Tarea números 7 y 8</p>
            <p>T-7</p><br>
            <p>Pàgina dels participants. <p>Afegir una nova opció
               al menú de navegació que mostrarà una pàgina
               estàtica on es presentarà als desenvolupadors
                de l’aplicació i la tasca que ha fet cadascú.
              </p>
            <p>T-8</p><br>
            <p>Reforma del home.</p> S’ha de canviar l’aparença del Home
               i a cada tema se li ha d’afegir un número que indiqui
              quantes preguntes hi han a la base de dades sobre el tema. </p>
          </div>


          <button class="tablink" onclick="openCity('Entrenador2018', this, 'red')" id="defaultOpen">Info</button>
          <button class="tablink" onclick="openCity('Carles', this, 'blue')"> Carles</button>
          <button class="tablink" onclick="openCity('Juan', this, '#3399ff')"> Juan</button>
          <button class="tablink" onclick="openCity('DavidS', this, '#00cc66')"> DavidS</button>
          <button class="tablink" onclick="openCity('Dostow', this, '#ff6666')"> Dostow</button>
          <button class="tablink" onclick="openCity('DavidG', this, 'red')"> DavidG</button>
          <button class="tablink" onclick="openCity('Carmen', this, '#ff33cc')"> Carmen</button>
          <button class="tablink" onclick="openCity('Sonia', this, '#9966ff')"> Sonia</button>



<div id="centrar"><center>
          <img src="view/img/yo1.gif" width="12%" height="50px;"alt="imatge tables">
          <img src="view/img/35.gif" width="12%" height="50px;"alt="imatge tables">
          <img src="view/img/41.gif" width="12%" height="50px;"alt="imatge tables">
          <img src="view/img/38.gif" width="12%" height="50px;"alt="imatge tables">
          <img src="view/img/39.gif" width="12%" height="50px;"alt="imatge tables">
          <img src="view/img/tu.gif" width="12%" height="50px;"alt="imatge tables">
          <img src="view/img/yo.gif" width="12%" height="50px;"alt="imatge tables"></center>
</div>

          <img src="view/img/juegos.jpg" width="100%" height="250px;"alt="imatge tables">

  </main>
</div>

      <footer>
        <br>
          <center><p>Práctica del módulo 3 del curso de desarrollo de aplicaciones web 2018</p></center>
      </footer>

    </body>
</html>
