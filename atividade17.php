
<?php 
//incluir o arquivo responsavel  pela conexao

include "conexao.php";

$num1 = 20;
$num2 = 23;

$resultado = $num1 + $num2;

//linguagem sql


$sql = "INSERT INTO calculo(numero1, numero2, resultado)
VALUES($num1, $num2, $resultado)";


if ($conexao->query($sql)) {

echo "<br> dados salvo com sucesso!";
}else{
    echo "<br> erro ao salvar";
}



?>