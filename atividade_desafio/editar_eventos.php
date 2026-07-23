<?php

include("banco.php");

$id = $_GET['id'];

$sql = "SELECT * FROM eventos WHERE id = $id";

$resultado = $conexao-> query($sql);

$evento = $resultado -> fetch_assoc();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Editar Evento</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="./css/style.css">

</head>

<body>

<div class="container">

<h2>Editar Evento</h2>

<form action="./atualizar_eventos.php" method="POST">

<input type="hidden" name="id" value="<?= $evento['id']; ?>">

<div class="mb-3">
<label>Nome</label>
<input type="text" name="nome_evento" class="form-control" value="<?= $evento['nome_evento']; ?>">
</div>

<div class="mb-3">
<label>Data</label>
<input type="date" name="data_evento" class="form-control" value="<?= $evento['data_evento']; ?>">
</div>

<div class="mb-3">
<label>Horário</label>
<input type="time" name="horario" class="form-control" value="<?= $evento['horario']; ?>">
</div>

<div class="mb-3">
<label>Local</label>
<input type="text" name="local_evento" class="form-control" value="<?= $evento['local_evento']; ?>">
</div>

<div class="mb-3">
<label>Cidade</label>
<input type="text" name="cidade" class="form-control" value="<?= $evento['cidade']; ?>">
</div>

<div class="mb-3">
<label>Vagas</label>
<input type="number" name="vagas" class="form-control" value="<?= $evento['vagas']; ?>">
</div>

<button class="btn btn-primary">

Atualizar

</button>

<a href="listar_eventos.php" class="btn btn-secondary">

Cancelar

</a>

</form>

</div>

</body>

</html>