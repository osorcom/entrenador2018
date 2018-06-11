<?php
require_once "vendor/autoload.php";
require_once "controller/load.php";
require_once "model/load.php";
require_once "estadistica/middleware.estadistica.php";

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
        'addContentLengthHeader' => false
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
  "path" => ["/nuevapregunta"],
  "users" => [
    "user" => "user"
  ]
]));

//contador de visitas
$app->add (middleware_estadistica);    //comento al dar fallo de ejecucion  (David Trigo)

// -------------- URLs ----------------------------
$app->get("/", \HomeController::class);

$app->get("/nuevapregunta", \NuevaPreguntaController::class);
$app->post("/nuevapregunta", \CrearPreguntaController::class);
$app->map(['GET','POST'], "/tema/{titulo}", \TemaController::class);
// -------------- arranca la aplicación ----------------------------
$app->run();
?>
