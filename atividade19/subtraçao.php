<?php

include "conexao.php";

// Primeira subtração
$numero1 = 95;
$numero2 = 28;
$resultado = $numero1 - $numero2;

$sql = "INSERT INTO subtracoes (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";

if (mysqli_query($conexao, $sql)) {
    echo "Primeira subtração gravada com sucesso!<br>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

// Segunda subtração
$numero1 = 140;
$numero2 = 56;
$resultado = $numero1 - $numero2;

$sql = "INSERT INTO subtracoes (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";

if (mysqli_query($conexao, $sql)) {
    echo "Segunda subtração gravada com sucesso!<br>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

// Terceira subtração
$numero1 = 210;
$numero2 = 87;
$resultado = $numero1 - $numero2;

$sql = "INSERT INTO subtracoes (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";

if (mysqli_query($conexao, $sql)) {
    echo "Terceira subtração gravada com sucesso!<br>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);

?>