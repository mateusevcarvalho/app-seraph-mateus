<?php

namespace App\Controllers;


class Controller
{
    private $path;
    private $params;

    protected function render($path, array $params = [], $layout = 'layout')
    {
        $this->path = $path;
        $this->params = $params;
        $layoutRender['scripts'] = isset($params['scripts']) ? $params['scripts'] : [];
        $pathLayouts = 'App/Views/layouts/';
        if ($layout && file_exists($pathLayouts . $layout . '.php')) {
            extract($layoutRender);
            include_once $pathLayouts . $layout . '.php';
        } else {
            $this->content();
        }
    }

    public function segmentUrl($posicao)
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        if (strstr($url, BASEPATH) && BASEPATH != '/') {
            $url = str_replace(BASEPATH, '', $url);
        }
        return explode('/', $url)[$posicao];
    }

    public function content()
    {
        extract($this->params);
        include_once 'App/Views/' . $this->path . '.php';
    }
}
