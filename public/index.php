<?php
error_reporting(-1);

use vendor\fw\core\Router;

$query = rtrim($_SERVER['QUERY_STRING'], '/');

define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');

// автозагрузка контроллеров
spl_autoload_register(function ($class) {
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_file($file)) {
        require_once $file;
    };
});

//default routs
Router::add('^$', ['controller' => 'Main']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

Router::dispatch($query);
