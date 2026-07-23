<?php
include("banco.php");

$pesquisa = "";

if (isset($_GET['pesquisa'])) {
    $pesquisa = $_GET['pesquisa'];
    $sql = "SELECT * FROM eventos WHERE nome_evento LIKE '$pesquisa'";
} else {
    $sql = "SELECT * FROM eventos";
}

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Lista de Eventos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2 class="mb-4">Eventos Cadastrados</h2>

<form method="GET" class="mb-3">

<div class="input-group">

<input
type="text"
name="pesquisa"
class="form-control"
placeholder="Pesquisar evento">

<button class="btn btn-primary">

Pesquisar

</button>

</div>

</form>

<a href="index.php" class="btn btn-success mb-3">

Novo Evento

</a>

<table class="table table-bordered table-striped">

<tr>

<th>Nome</th>
<th>Data</th>
<th>Horário</th>
<th>Local</th>
<th>Cidade</th>
<th>Vagas</th>
<th>Ações</th>

</tr>

<?php while($linha = mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?= $linha['nome_evento']; ?></td>

<td><?= $linha['data_evento']; ?></td>

<td><?= $linha['horario']; ?></td>

<td><?= $linha['local_evento']; ?></td>

<td><?= $linha['cidade']; ?></td>

<td><?= $linha['vagas']; ?></td>

<td>

<a
href="editar_eventos.php?id=<?= $linha['id']; ?>"
class="btn btn-warning btn-sm">

Editar

</a>

<a
href="excluir_eventos.php?id=<?= $linha['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Deseja excluir este evento?')">

Excluir

</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>