<?php

include("banco.php");

$id = $_GET['id'];

$sql = "DELETE FROM funcionarios WHERE id = $id";

mysqli_query($conexao, $sql);

header("Location: listar_funcionarios.php");

exit();

?>