<?php

//function cadastrarAluno(string $nome, int $matricula = 0):boll //parâmetro não obrigatorio
function cadastraAluno(array $aluno):bool
{
    $f = fopen('alunos.csv', 'a');
    $escreveu = fwrite($f, "{$aluno['matricula']};\"{$aluno['nome']}\"\n");
    fclose($f);

    if($escreveu){
        return true;
    }else{
        return false;
    }
        
};

$funcionou = cadastraAluno(['matricula' => 4561, 'nome' => 'Jackson']);

if($funcionou){
    echo "<br>Aluno cadastrado com sucesso";
}else{
    echo "<br>Erro ao cadastrar aluno";
}

$var = 10;

function soma($var){

    return $var + 10;
}

echo "<br>variavél antes: $var";

soma($var);

echo "<br>Variavél depois: $var";