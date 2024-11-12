<?php
session_start();

if(isset($_SESSION['perfil'])):
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
       body {
    background-color: #FDDDE6;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 80%;
    max-width: 1200px;
}

h2 {
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

/* Estilo para a tabela */
table.styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 18px;
    text-align: left;
}

table.styled-table thead tr {
    background-color: #6A0DAD;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
}

table.styled-table th, table.styled-table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
}

table.styled-table tbody tr {
    border-bottom: 1px solid #ddd;
}

table.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

table.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #6A0DAD;
}

table.styled-table tbody tr:hover {
    background-color: #f1e1fa;
    cursor: pointer;
}

/* Estilo para os botões de ação */
a {
    display: inline-block;
    padding: 6px 12px;
    background-color: #6A0DAD;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    margin-right: 5px;
}

a:hover {
    background-color: #5D0596;
}

/* Botão de voltar ao dashboard */
.btn {
    display: block;
    width: 100%;
    background-color: #6A0DAD;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
}

.btn:hover {
    background-color: #5D0596;
}

    </style>
</head>
 
<body class="<?= $_SESSION['perfil'] ?> ">
    <div class="container">
        <h2>Lista de Usuários</h2>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nome'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['perfil'] ?></td>
                    <td>
                        <?php if($_SESSION['perfil'] == 'admin' || $_SESSION['perfil'] == 'gestor'): ?>
                            <a href="index.php?edit&id=<?= $user['id']?>">Editar</a>
                        <?php endif; ?>

                        <!-- Insere botão de exclusão apenas para perfil admin -->
                        <?php if($_SESSION['perfil'] == 'admin'): ?>
                            <a class="ex" href="index.php?action=delete&id">Excluir</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
 
        <a href="index.php?action=dashboard" class="btn">Voltar ao Dashboard</a>
    </div>
</body>
 
</html>
<?php else: ?>
    <p>Erro: Você não tem permissão para visualizar essa página</p>
    <?php endif; ?>