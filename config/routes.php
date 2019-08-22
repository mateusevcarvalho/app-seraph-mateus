<?php

return [

    ['route' => '/', 'controller' => 'home', 'action' => 'index'],
    ['route' => '/colaboradores', 'controller' => 'colaboradores', 'action' => 'index'],
    ['route' => '/colaboradores/cadastrar', 'controller' => 'colaboradores', 'action' => 'create'],
    ['route' => '/colaboradores/editar', 'controller' => 'colaboradores', 'action' => 'update'],
    ['route' => '/colaboradores/deletar', 'controller' => 'colaboradores', 'action' => 'destroy'],
    ['route' => '/colaboradores/detalhes', 'controller' => 'colaboradores', 'action' => 'show'],
    ['route' => '/colaboradores/imprimir', 'controller' => 'colaboradores', 'action' => 'print'],
    ['route' => '/conta/login', 'controller' => 'conta', 'action' => 'login'],
    ['route' => '/conta/cadastro', 'controller' => 'conta', 'action' => 'create'],
    ['route' => '/conta/logout', 'controller' => 'conta', 'action' => 'logout'],

];
