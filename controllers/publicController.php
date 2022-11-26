<?php

namespace Controllers;

use MVC\Router;

class publicController {
    public static function index(Router $router) {
        $router->render('publicas/index', [
            'script' => '<script src="build/js/app.js"></script>'
        ]);
    }

    public static function sugerencias(Router $router) {
        $router->render('publicas/sugerencias', [
            'script' => '<script src="build/js/formulario.js"></script>
            <script src="build/js/app.js"></script>'
        ]);
    }

    public static function creadores(Router $router) {
        $router->render('publicas/creadores', [
            'script' => '<script src="build/js/app.js"></script>'
        ]);
    }
}