<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>
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

<body>
    <!-- O formulário usa o método POST para enviar dados de forma segura -->
    <!-- Os dados serão enviados para 'index.php' com a ação 'login' -->
    <main>
        <form method="post" action="index.php?action=login">
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Login</button>
        </form>
        <!-- Define o destino do link e leva à opção de cadastro -->
        <a href="index.php?action=register">Cadastrar-se</a>
    </main>
</body>

</html>