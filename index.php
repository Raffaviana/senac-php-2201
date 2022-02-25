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

echo '<br><br><h1> vamos tomar café</h1>';

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

echo '<table border="1">
    <tr>
        <td>ID</td><td>Nome</td><td>Senha</td>
    </tr>';

foreach( $nomes as $id => $valor){

    echo '<tr>';
    echo "<td> $id</td><td> {$valor['nome']}</td><td> {$valor['senha']}</td>";
    echo '</tr>';
};

echo '</table>';

//id = indice
//valor = o que tiver associado com o indice

$dias =  ['Dom' => ['Domingo', 'Domingo'],
         'Seg' => ['Segunda', 'Segunda'],
         'Ter' => ['Terça', 'Terça'],
         'Qua' => ['Quarta', 'Quarta'],
         'Qui' => ['Quinta', 'Quinta'],
         'Sex' => ['Sexta', 'Sexta'],
         'Sáb' => ['Sábado', 'Sábado']];

echo '<table border="1">
    <tr>
        <td>ID</td><td>Nome</td><td>Nome2</td>
    </tr>';
foreach($dias as $abreviacao => [$nomesimples,$nomelongo]){
    echo '<tr>';
    echo "<td>$abreviacao</td><td>$nomesimples</td><td>$nomelongo</td><br>";
    echo '</tr>';

};
echo '</table>';