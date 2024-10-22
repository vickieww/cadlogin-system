<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
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



input[type="text"], input[type="email"], input[type="password"], select {

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
<body>
    <div>
        <h2>Cadastro de Usuário</h2>
        <form action="index.php?action=register" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil">
                <option value="admin">Admin</option>
                <option value="gestor">Gestor</option>
                <option value="colaborador">Colaborador</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>

        <a href="index.php?action=login">Voltar ao Login</a>
    </div>
</body>
</html>