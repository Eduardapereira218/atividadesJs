<?php

include("banco.php");

$id = $_POST['id'];


$nome = $_POST['nome_evento'];
$data = $_POST['data_evento'];
$horario = $_POST['horario'];
$local = $_POST['local_evento'];
$cidade = $_POST['cidade'];
$vagas = $_POST['vagas'];

$sql = "UPDATE eventos SET
nome_evento='$nome',
data_evento='$data',
horario='$horario',
local_evento='$local',
cidade='$cidade',
vagas='$vagas'
WHERE id=$id";

$conexao->query($sql);

header("Location: listar_eventos.php");

?>