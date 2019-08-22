<?php

require_once "./vendor/autoload.php";
session_start();

//conexão com o banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DATABASE', 'gestao-colaboradores');

//caso seja local e não tem um dominio colocar a barra e o nome da pasta caso ao contrario deixar vazio
define('BASEPATH', '/teste-mateus');

(new \App\Bootstrap());
