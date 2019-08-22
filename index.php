<?php

require_once "./vendor/autoload.php";
session_start();

//conexão com o banco de dados
define('HOST', 'mysql');
define('USER', 'root');
define('PASS', 'root');
define('DATABASE', 'gestao-colaboradores');

//caso seja local e não tem um dominio colocar a barra e o nome da pasta caso ao contrario deixar vazio
define('BASEPATH', '');

(new \App\Bootstrap());
