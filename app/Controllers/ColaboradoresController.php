<?php


namespace App\Controllers;


use App\Models\Colaboradores;
use App\Models\Competencia;

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
            $competencias = explode(',', $_POST['competencias']);
            unset($_POST['competencias']);
            $formData = $_POST;
            $colaborador = new Colaboradores();
            $colaborador = $colaborador->create($formData);
            if ($colaborador) {
                $modelCompetrencia = new Competencia();
                foreach ($competencias as $competencia) {
                    $modelCompetrencia->create(['nome' => $competencia, 'colaborador_id' => $colaborador]);
                }
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
        $competencia = new Competencia();
        if ($_POST) {
            $id = $_POST['id'];
            $competencias = explode(',', $_POST['competencias']);
            unset($_POST['competencias']);
            $update = $colaborador->update($_POST, $id);
            if ($update) {
                $competencia->deleteCustom('colaborador_id = ' . $id);
                foreach ($competencias as $row) {
                    $competencia->create(['nome' => $row, 'colaborador_id' => $id]);
                }
                echo json_encode(['success', 'Cadastro atualizado com sucesso!']);
            } else {
                echo json_encode(['error', 'Falha ao editar colaborador!']);
            }
        } else {
            $colaborador = $colaborador->find($id);
            $competencia = new Competencia();

            if ($colaborador) {
                $competencias = $competencia->where('colaborador_id = ' . $id);
                $competencias = count($competencias) ? implode(',', array_column($competencias, 'nome')) : '';
                $scripts = ['colaboradores'];
                $this->render('colaboradores/editar', compact('scripts', 'colaborador', 'competencias'));
            } else {
                $this->redirect('colaboradores');
            }
        }
    }
}
