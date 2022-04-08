<?php
require_once 'conexao.php';

//Evita SQL Injection
$id = preg_replace('/\D/', '', $_POST['id']; // expressão regular // Elimana tudo que não é numero

if($bd->exec("DELETE FROM tarefas WHERE id = $id")){
    echo "Tarefa apagada com sucesso!";
}else{
    echo"Erro ao tentar apagar a tarefa!";
}

echo "<br><br><a href='listarTarefa.php>Voltar</a>";