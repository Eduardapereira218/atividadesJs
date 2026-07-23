<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="./css/style.css">

<title>Cadastro de Eventos</title>

</head>

<body>

<div class="container">

<div class="card">

<h2>Cadastrar Evento</h2>

<form action="cadastrar_evento.php" method="POST">

<label>Nome do Evento</label>

<input type="text" name="nome_evento" class="form-control" required>

<br>

<label>Data</label>

<input type="date" name="data_evento" class="form-control" required>

<br>

<label>Horário</label>

<input type="time" name="horario" class="form-control" required>

<br>

<label>Local</label>

<input type="text" name="local_evento" class="form-control" required>

<br>

<label>Cidade</label>

<input type="text" name="cidade" class="form-control" required>

<br>

<label>Quantidade de Vagas</label>

<input type="number" name="vagas" class="form-control" required>

<br>

<button class="btn btn-success">

Cadastrar

</button>

<a href="listar_eventos.php" class="btn btn-primary">

Ver Eventos

</a>

</form>

</div>

</div>

</body>

</html>