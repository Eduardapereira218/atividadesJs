<?php

include("banco.php");

$nome=$_POST['nome_evento'];
$data=$_POST['data_evento'];
$horario=$_POST['horario'];
$local=$_POST['local_evento'];
$cidade=$_POST['cidade'];
$vagas=$_POST['vagas'];

$sql="INSERT INTO eventos
(nome_evento,data_evento,horario,local_evento,cidade,vagas)

VALUES

('$nome','$data','$horario','$local','$cidade','$vagas')";

$conexao->query($sql);

header("Location:listar_eventos.php");

?>