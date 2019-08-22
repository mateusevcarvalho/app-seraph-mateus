<?php


namespace App\Controllers;


use App\Models\Usuario;

class ContaController extends Controller
{
    public function login()
    {
        if ($_POST) {
            $formData = $_POST;
            $senha = md5($formData['senha']);
            $usuario = new Usuario();
            $usuario = $usuario->where("email = '{$formData['email']}' and senha = '{$senha}'");
            if (count($usuario)) {
                $_SESSION['login'] = $usuario[0]['nome'];
                echo json_encode(['success', 'Login realizado com sucesso!']);
            } else {
                echo json_encode(['error', 'Usuário ou senha inválidos']);
            }
        } else {
            $scripts = ['conta'];
            $this->render('conta/login', compact('scripts'), 'conta');
        }
    }

    public function logout()
    {
        session_destroy();
        $this->redirect('conta/login');
    }

    public function create()
    {
        if ($_POST) {
            $usuario = new Usuario();
            $_POST['senha'] = md5($_POST['senha']);
            $usuario = $usuario->create($_POST);
            if ($usuario) {
                echo json_encode(['success', 'Cadastro realizado com sucesso!']);
            } else {
                echo json_encode(['error', 'Falha ao cadastrar usuário!']);
            }
        } else {
            $scripts = ['conta'];
            $this->render('conta/cadastro', compact('scripts'), 'conta');
        }
    }
}