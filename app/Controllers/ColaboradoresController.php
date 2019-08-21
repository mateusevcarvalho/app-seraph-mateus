<?php


namespace App\Controllers;


use App\Models\Colaboradores;

class ColaboradoresController extends Controller
{
    public function index()
    {
        $colaborador = new Colaboradores();
        $colaboradores = $colaborador->all();
        $this->render('colaboradores/listar', compact('colaboradores', 'scripts'));
    }

    public function create()
    {
        if ($_POST) {
            $colaborador = new Colaboradores();
            $colaborador = $colaborador->create($_POST);
            if ($colaborador) {
                echo json_encode(['success', 'Cadastro realizado com sucesso!']);
            } else {
                echo json_encode(['error', 'Falha ao cadastrar colaborador!']);
            }
        } else {
            $scripts = ['colaboradores'];
            $this->render('colaboradores/cadastrar', compact('scripts'));
        }
    }

    public function update()
    {
        $id = $this->segmentUrl(3);
        $colaborador = new Colaboradores();
        if ($_POST) {
            $update = $colaborador->update($_POST, $id);
            if ($update) {
                echo json_encode(['success', 'Cadastro atualizado com sucesso!']);
            } else {
                echo json_encode(['error', 'Falha ao editar colaborador!']);
            }
        } else {
            $colaborador = $colaborador->find($id);
            $scripts = ['colaboradores'];
            $this->render('colaboradores/editar', compact('scripts', 'colaborador'));
        }
    }
}
