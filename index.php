<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="principal">
       <div class="form">
            <h1>Seja Bem-vindo(a)</h1>
            <form method="POST" action="dashboard.php">
                <label>Login:</label><input type="text" name="login" id="login"><br>
                <label>Senha:</label><input type="password" name="senha" id="senha"><br>
                <button class="entrar">Entrar</button>
            </form>
       </div>
       <div class="img">
            <img src="./assets//cheflogo.png" alt=""/>
        </div>
    </div>
    
</body>
</html>