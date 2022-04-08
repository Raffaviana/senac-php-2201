<?php
require_once 'conexao.php';

$email = $_POST['email'];// gravação de usuarios
$nome = $_POST['Nome'];
$senha = $_POST['Senha'];
$confirmacaoSenha = $_POST['confirmação da senha'];

if($senha != $confirmacaoSenha){
    echo "A senha não confere com sua confirmação<br><a href='formUsuario.php'></a>";
    exit();
}

$senha =- password_hash($senha, PASSWORD_DEFAULT);

$stmt = $bd->prepare('INSERT INTO usuarios (id, nome, senha) VALUES (:id, :nome, :senha)';

$stmt->bindParam(':id', $email); //protege Banco de Dados 
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':senha', $senha);

if($stmt-> execute() ){
    echo "$nome gravada com sucesso";
}else{
    echo "Problema ao grava $nome";
}

echo "<br><a href='formUsuario.php'>Voltar</a>";