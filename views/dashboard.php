<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type='text/css' media='screen' href="">
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
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    width: 400px;
    text-align: center;
}

h1 {
    color: #333;
    margin-bottom: 20px;
}

p {
    color: #666;
    margin-bottom: 20px;
}

/* Estilo dos botões */
a.btn {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #6A0DAD;
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 8px;
    margin-bottom: 15px;
    font-size: 16px;
}

a.btn:hover {
    background-color: #5D0596;
}

a.btn:active {
    background-color: #4A0477;
}

/* Ajuste de espaçamento extra */
.container a:last-of-type {
    margin-top: 30px;
}

    </style>
</head>
 
<body class="<?= $_SESSION['perfil']  ?>"> <!-- Define a classe com base no perfil -->
    <div class="container">
        <h1>Bem-vindo, <?= $_SESSION['perfil']  ?>!</h1>
        <p>Esta é a visão do perfil <?= $_SESSION['perfil']  ?>.</p>

        <?php if($_SESSION['perfil'] == 'admin'):  ?>
            <!-- Admin pode gerenciar usuários (editar e excluir) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Admin)</a>
        <?php elseif($_SESSION['perfil'] == 'gestor'):  ?>
            <!-- Gestor pode gerenciar usuários (apenas editar) -->
            <a href="index.php?action=list" class="btn">Gerenciar Usuários (Gestor)</a>
            <p>Área exclusiva do Gestor.</p>
 
        <?php else: ?>
            <p>Área exclusiva do Colaborador.</p>
        <?php endif; ?>

        <br><br><br><br>
        <!-- Link para logout -->
        <a href="index.php?action=logout" class="btn">Logout</a>
    </div>
</body>
 
</html>