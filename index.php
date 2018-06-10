<?php
require_once "vendor/autoload.php";
require_once "controller/load.php";
require_once "model/load.php";

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);

$app = new Slim\App($c);

// -------------- Dependencias ----------------------------
$c = $app->getContainer();
$c['view'] = function($c){
    $renderer = new Slim\Views\PhpRenderer('view');
    $renderer->addAttribute("BASE_URL", $c->get('request')->getUri()->getBasePath());
    return $renderer;
};

$c['data'] = function(){
    $db = parse_ini_file("config.ini");
    $dataAccess = new DataAccess($db);
    return $dataAccess;
};

// -------------- MIDDLEWARE ----------------------------
//acceso sólo por https
$app->add(new \Slim\Middleware\SafeURLMiddleware());

//autenticación básica para las acciones de crear o borrar pregunta.
//añadir cadenas con URL al path.
$app->add(new Tuupola\Middleware\HttpBasicAuthentication([
  "path" => [],
  "users" => [
    "user" => "user"
  ]
]));

// -------------- URLs ----------------------------
$app->get("/", \HomeController::class);

// -------------- arranca la aplicación ----------------------------
$app->run();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Index</title>
  </head>
  <body>
    <?php require_once "view/section/header.php"; ?>

   <main>

   </main>

<?php require_once "view/section/footer.php"; ?>
  </body>
</html>
