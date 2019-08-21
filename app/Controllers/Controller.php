<?php


namespace App\Controllers;


class Controller
{
    protected $view;
    private $path;

    public function __construct()
    {
        $this->view = \stdClass::class;
    }

    protected function render($path, $layout = 'layout')
    {
        $this->path = $path;
        $pathLayouts = 'App/Views/layouts/';
        if ($layout && file_exists($pathLayouts . $layout . '.php')) {
            include_once $pathLayouts . $layout . '.php';
        } else {
            $this->content();
        }
    }

    public function content()
    {
        include_once 'App/Views/' . $this->path . '.php';
    }
}