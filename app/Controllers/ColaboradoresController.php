<?php


namespace App\Controllers;


use App\Models\Colaboradores;
use App\Models\Comportamento;
use App\Models\Tecnica;
use Mpdf\Mpdf;

class ColaboradoresController extends Controller
{
    public function __construct()
    {
        $this->isAuthenticate();
    }

    public function index()
    {
        $colaborador = new Colaboradores();
        $colaboradores = $colaborador->all();
        $scripts = ['colaboradores'];
        $this->render('colaboradores/listar', compact('colaboradores', 'scripts'));
    }

    public function show()
    {
        $id = $this->segmentUrl(3);
        if ($id) {
            $colaborador = new Colaboradores();
            $comportamento = new Comportamento();
            $tecnica = new Tecnica();
            $colaborador = $colaborador->find($id);
            $comportamentais = $comportamento->where('colaborador_id = ' . $id);
            $tecnicas = $tecnica->where('colaborador_id = ' . $id);

            $this->render('colaboradores/detalhes', compact('colaborador', 'comportamentais', 'tecnicas'));
        } else {
            $this->redirect('colaboradores');
        }
    }

    public function print()
    {
        $mpdf = new Mpdf();
        $id = $this->segmentUrl(3);
        $colaborador = new Colaboradores();
        $comportamento = new Comportamento();
        $tecnica = new Tecnica();
        $colaborador = $colaborador->find($id);
        $comportamentais = $comportamento->where('colaborador_id = ' . $id);
        $tecnicas = $tecnica->where('colaborador_id = ' . $id);

        $html = "<div>";
        $html .= "<h3>Detalhes do colaborador</h3><hr>";

        $html .= "<p><b>Nome: </b> {$colaborador->nome}</p>";
        $html .= "<p><b>Email: </b> {$colaborador->email}</p>";
        $html .= "<p><b>Data Nascimento: </b>" . date('d/m/Y', strtotime($colaborador->data_nascimento)) . " </p>";
        $html .= "<p><b>Idade: </b>" . calculo_idade($colaborador->data_nascimento) . " anos</p>";
        $html .= "<p><b>Celular: </b> {$colaborador->celular}</p>";

        $html .= "<br>";
        $html .= "<p><b>Cep: </b> {$colaborador->cep}</p>";
        $html .= "<p><b>Logradouro: </b> {$colaborador->logradouro}</p>";
        $html .= "<p><b>Número: </b> {$colaborador->numero}</p>";
        $html .= "<p><b>Bairro: </b> {$colaborador->bairro}</p>";
        $html .= "<p><b>Cidade: </b> {$colaborador->cidade}</p>";
        $html .= "<p><b>Estado: </b> {$colaborador->estado}</p>";
        $html .= "<p><b>Complemento: </b> {$colaborador->complemento}</p>";

        $html .= "<br>";
        $html .= "<p><b>Competências comportamentais: </b> <br></p>";
        foreach ($comportamentais as $comportamento) {
            $html .= "{$comportamento['nome']}, ";
        }

        $html .= "<p><b>Competências técnicas: </b> <br></p>";
        foreach ($tecnicas as $tecnica) {
            $html .= "{$tecnica['nome']}, ";
        }

        $html .= "</div>";

        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function create()
    {
        if ($_POST) {
            $tecnicas = explode(',', $_POST['tecnicas']);
            $comportamentais = explode(',', $_POST['comportamentais']);

            unset($_POST['tecnicas']);
            unset($_POST['comportamentais']);

            $formData = $_POST;
            $colaborador = new Colaboradores();
            $colaborador = $colaborador->create($formData);

            if ($colaborador) {
                $tecnica = new Tecnica();
                foreach ($tecnicas as $row) {
                    $tecnica->create(['nome' => $row, 'colaborador_id' => $colaborador]);
                }

                $comportamento = new Comportamento();
                foreach ($comportamentais as $row) {
                    $comportamento->create(['nome' => $row, 'colaborador_id' => $colaborador]);
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
        $comportamento = new Comportamento();
        $tecnica = new Tecnica();

        if ($_POST) {
            $id = $_POST['id'];
            $tecnicas = explode(',', $_POST['tecnicas']);
            $comportamentais = explode(',', $_POST['comportamentais']);

            unset($_POST['tecnicas']);
            unset($_POST['comportamentais']);

            $update = $colaborador->update($_POST, $id);
            if ($update) {
                $tecnica->deleteCustom('colaborador_id = ' . $id);
                foreach ($tecnicas as $row) {
                    $tecnica->create(['nome' => $row, 'colaborador_id' => $id]);
                }

                $comportamento->deleteCustom('colaborador_id = ' . $id);
                foreach ($comportamentais as $row) {
                    $comportamento->create(['nome' => $row, 'colaborador_id' => $id]);
                }

                echo json_encode(['success', 'Cadastro atualizado com sucesso!']);
            } else {
                echo json_encode(['error', 'Falha ao editar colaborador!']);
            }
        } else {
            $colaborador = $colaborador->find($id);
            if ($colaborador) {
                $comportamentais = $comportamento->where('colaborador_id = ' . $id);
                $comportamentais = count($comportamentais) ? implode(',', array_column($comportamentais, 'nome')) : '';


                $tecnicas = $tecnica->where('colaborador_id = ' . $id);
                $tecnicas = count($tecnicas) ? implode(',', array_column($tecnicas, 'nome')) : '';

                $scripts = ['colaboradores'];
                $this->render('colaboradores/editar', compact('scripts', 'colaborador', 'comportamentais', 'tecnicas'));
            } else {
                $this->redirect('colaboradores');
            }
        }
    }

    public function destroy()
    {
        $id = $this->segmentUrl(3);
        $colaborador = new Colaboradores();
        if ($colaborador->delete($id)) {
            echo json_encode(['success', 'Colaborador deletado com sucesso!']);
        } else {
            echo json_encode(['error', 'Falha ao deletar!']);
        }
    }
}
