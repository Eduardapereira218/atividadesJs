<?php

include "conexao.php";

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

$resultado = $numero1 + $numero2;

$sql = "INSERT INTO somas (numero1, numero2, resultado)
VALUES ('$numero1','$numero2','$resultado')";

if(mysqli_query($conexao,$sql)){
    $mensagem = "Dados gravados com sucesso!";
}else{
    $mensagem = "Erro ao gravar!";
}

?>