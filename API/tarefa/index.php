<?php
require_once 'conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){ //se o requisitante usar método GET

    $stmt = $bd->query('SELECT id, descricao, imagem FROM tarefas WHERE apagado =0');
    $stmt->execute();

    $saida = [];

    while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){

        $saida [] = $registro;

    }

    http_response_code(200);

    echo json_encode($saida);

    exit();
}


//Retorna código de erro método não permitído
http_response_code(405);