<?php


namespace App;


class Bootstrap
{
    private $routes;

    public function __construct()
    {
        $this->setRoutes();
        $this->run($this->getUrl());
    }

    public function run($url)
    {
        array_walk($this->routes, function ($route) use ($url) {
            if ($route['route'] == $url) {
                $path = "App\\Controllers\\" . ucfirst($route['controller']) . "Controller";
                $controller = new $path();
                $metodo = $route['action'];
                $controller->$metodo();
            }
        });
    }

    public function setRoutes()
    {
        $this->routes = [
            'home' => ['route' => '/', 'controller' => 'index', 'action' => 'index'],
            'colaboradores' => ['route' => '/colaboradores', 'controller' => 'colaboradores', 'action' => 'index'],
        ];
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}