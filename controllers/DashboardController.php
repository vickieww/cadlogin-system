<?php

class DashboardController
{

    public function index()
    {
        // inicia a sessão para verificar se o usuário está autenticado
        session_start();
        // verifica se a varião de sessão "usuario_id" está definida
        // Se não estiver, significa que o usuário não está autenticado
        if(!isset($_SESSION['usuario_id'])){
            header('Location: index.php');
            exit; // Garante que o script será interrompido após o redirecionamento
        }
        include 'views/dashboard.php';
    }
}
