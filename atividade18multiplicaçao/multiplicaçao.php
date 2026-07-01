<?php

include "conexao.php";

// Primeira multiplicação
$numero1 = 14;
$numero2 = 9;
$resultado = $numero1 * $numero2;

$sql = "INSERT INTO multiplicacoes (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";

if (mysqli_query($conexao, $sql)) {
    echo "Primeira multiplicação gravada com sucesso!<br>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

// Segunda multiplicação
$numero1 = 23;
$numero2 = 7;
$resultado = $numero1 * $numero2;

$sql = "INSERT INTO multiplicacoes (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";

if (mysqli_query($conexao, $sql)) {
    echo "Segunda multiplicação gravada com sucesso!<br>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

// Terceira multiplicação
$numero1 = 16;
$numero2 = 11;
$resultado = $numero1 * $numero2;

$sql = "INSERT INTO multiplicacoes (numero1, numero2, resultado)
VALUES ($numero1, $numero2, $resultado)";

if (mysqli_query($conexao, $sql)) {
    echo "Terceira multiplicação gravada com sucesso!<br>";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);

?>