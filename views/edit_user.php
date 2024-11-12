<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
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

        div {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;

        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            background-color: #6A0DAD;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;

        }

        button:hover {
            background-color: #5D0596;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #6A0DAD;
            text-decoration: none;
        }
    </style>
</head>

<body class="edit-body">
<div class="edit-container">
<h2>Editar Usuário</h2>
<form method="post" action="index.php?action=edit&id=<?= $user['id']?>" class="edit-form">

<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" value="index.php?action=edit&id=<?= $user['nome']?>" required>
 
            <label for="email">Email:</label>
<input type="email" name="email" id="email" value="index.php?action=edit&id=<?= $user['email']?>" required>
 
            <label for="perfil">Perfil:</label>
<select name="perfil" id="perfil">
<option value="<?= $user['perfil'] == 'admin' ? 'selected' : '' ?>">Admin</option>
<option value="<?= $user['perfil'] == 'gestor' ? 'selected' : '' ?>" >Gestor</option>
<option value="<?= $user['perfil'] == 'colaborador' ? 'selected' : '' ?>" >Colaborador</option>
</select>
 
            <button type="submit" class="btn">Salvar</button>
        </form>
        <a href="index.php?action=list" class="back-link">Voltar para Lista de Usuários</a>
    </div>
</body>

</html>