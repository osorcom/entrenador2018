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
