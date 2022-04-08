<?php
require_once 'conexao.php';

$id = preg_replace('/\D/', '', $_POST['id']);
if(isset($_POST['tarefa'])){//Atualiza o registro
    $stmt = $bd->prepare('UPDATE tarefas SET descricao = :descricao WHERE id = :id');
    $stmt->bindParam(':descricao', $_POST['tarefa']);
    $stmt->bindParam(':id', $id);
    //prepara os valores do usuario p/ atualizar os parametros no formulario
    if($stmt->excute()){
        echo "Tarefa atualizada";
    }else{
        echo "Erro ao atualizar a tarefa";
    }
}//FIM atualiza o registro
0
$stmt = $bd->query("SELECT descricao FROM tarefas WHERE id = $id");//pega a descrição
$stmt->execute();//executa
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);
//vetor com indice descrição

echo "<form method='post'>
        <label for='tarefa'>Tarefa</label>
        <input type='text' id='tarefa' name='tarefa' value='{$tarefa['descricao']}'><br><br>
        <input type='hidden' name='id' value='$id'>
        <input type='submit' value='Atualizar'>
        </form><br><br><a href='listarTarefa.php>Voltar</a>";
//formulario para edição de tarefas