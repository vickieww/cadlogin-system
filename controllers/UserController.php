<?php
// Definição da classe UserController, responsável por gerenciar as ações relacionadas aos usuários
class UserController
{
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'nome'  => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),// Criptografa a senha
                'perfil'=> $_POST['perfil']
            ];

            User::create($data);
            header('Location: index.php');
        }else{
            // Se a requisição não for POST (por exemplo, GET), carrega a página de registro
            include 'views/register.php';
        }
    }

    public function list(){
        $users = User::all();
        include 'views/list_users.php';
    }

    public function edit($id){
        session_start();


        //Permite que o admin e gestor editem
        if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'){
            
            $user = User::find($id);

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data = [
                    'nome'  => $_POST['nome'],
                    'email' => $_POST['email'],
                    'perfil'=> $_POST['perfil']
                ];

                User::update($id, $data);
                header('Location: index.php?action=list');
            }else{
                include 'views/edit_user.php';
            }
        }else{
            echo 'Você não tem permissão para editar usuários';
        }
    }

}

?>