<?php

//Comentario de linja

/*
Comentario de bloco
*/

define( 'XPTO', 'valor sempre igual' );

echo XPTO;

$num = 2;

$var = '<br>' . "Olá mundo! $num";//O ponto é o operador de concatenação

echo $var;

echo '<br><br><h1 vamos tomar café</h1>';

//var_dump($var);

//phpinfo(); informações importantes, com variáveis de ambiente

//Após o café

$domingo = 'Domingo';
$segunda = 'Segunda-Feira';
$terca   = 'Terça-Feira';
$quarta  = 'Quarta-Feira';
$quinta  = 'Quinta-Feira';
$sexta   = 'Sexta-Feira';
$sabado  = 'Sábado';

$diaSemana = [  'Dom' => 'Domingo', //Podemos declara vetor com array
                'Seg' => 'Segunda-Feira', 
                'Ter' => 'Terça-Feira', 
                'Qua' => 'Quarta-Feira', 
                'Qui' => 'Quinta-Feira', 
                'Sex' => 'Sexta-Feira', 
                'Sáb' => 'Sábado'];

echo '<br>Hoje é ' . $diaSemana['Seg'];//Exemplo sem interpolação

echo "<br>Hoje é  . {$diaSemana['Sáb']}";//Exemplo com interpolação

$nomes[0] = ['nome' => 'Luiz',
             'senha' => '123'];
$nomes[1] = ['nome' => 'fer',
             'senha' => '321'];
$nomes[2] = ['nome' => 'bono',
             'senha' => '627'];
             
echo "<pre>\n\n";

var_dump($nomes);