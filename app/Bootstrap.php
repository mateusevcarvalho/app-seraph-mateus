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
        if (strstr($url, BASEPATH) && BASEPATH != '/') {
            $url = str_replace(BASEPATH, '', $url);
        }

        $url = explode('/', $url);
        $parte1 = $url[1] ? $url[1] : '/';
        $parte2 = isset($url[2]) ? $url[2] : '';
        $url = $parte1 != '/' ? '/' . $parte1 : '/';
        $url .= $parte2 ? '/' . $parte2 : '';

        array_walk($this->routes, function ($route) use ($url) {
            if ($route['route'] == $url || $route['route'] . '/' == $url) {
                $path = "App\\Controllers\\" . ucfirst($route['controller']) . "Controller";
                $controller = new $path();
                $metodo = $route['action'];
                $controller->$metodo();
            }
        });
    }

    public function setRoutes()
    {
        $this->routes = include_once "config/routes.php";
    }

    public function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
