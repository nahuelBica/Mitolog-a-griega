<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

use Controllers\publicController;

$router = new Router();

// Publicas
$router->get('/',[publicController::class,'index']);
$router->get('/sugerencias', [publicController::class,'sugerencias']);
$router->post('/sugerencias', [publicController::class,'sugerencias']);
$router->get('/creadores',[publicController::class,'creadores']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();