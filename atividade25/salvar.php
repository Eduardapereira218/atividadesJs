<?php

include("banco.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$cidade = $_POST['cidade'];

$sql = "INSERT INTO alunos(nome, idade, curso, cidade)
VALUES('$nome','$idade','$curso','$cidade')";

if(mysqli_query($conexao,$sql)){
    echo "Aluno cadastrado com sucesso!<br><br>";
    echo "<a href='formulario.php'>Cadastrar outro aluno</a><br>";
    echo "<a href='listar_alunos.php'>Listar alunos</a>";
}else{
    echo "Erro ao cadastrar.";
}

?>