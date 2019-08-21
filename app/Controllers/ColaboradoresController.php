<?php


namespace App\Controllers;


use App\Models\Colaboradores;

class ColaboradoresController extends Controller
{
    public function index()
    {
        $colaboradores = new Colaboradores();
        $this->view->colaboradores = $colaboradores->readAll();

        $this->render('colaboradores/listar');
    }
}