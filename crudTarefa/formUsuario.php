<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>
<body>
    <h5>Lista de usuarios</h5>
    <div>
        <form action="gravaUsuario.php" method="post">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">
            <br>
            <label for="nome">Usuario</label>
            <input type="text" id="nome" name="nome">
            <br>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha">
            <br>
            <label for="confirmacao_senha">Confirmar senha</label>
            <input type="password" id="confirmacao_senha" name="confirmacao_senha">
            <br>
            <input type="submit" Value="Gravar">
        </form>
    </div>
    <div>
        <a href="listarUsuarios.php">Listar</a>
    </div>
</body>
</html>