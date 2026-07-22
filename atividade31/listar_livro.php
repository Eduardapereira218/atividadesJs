<?php

include("banco.php");

$sql = "SELECT * FROM livros";
$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Livros</title>
</head>
<body>

<h2>Lista de Livros</h2>

<table border="1" cellpadding="8">

<tr>
    <th>Título</th>
    <th>Autor</th>
    <th>Editora</th>
    <th>Ano de Publicação</th>
    <th>Ação</th>
</tr>

<?php while($dados = $resultado->fetch_assoc()) { ?>

<tr>

<td><?php echo $dados['titulo']; ?></td>
<td><?php echo $dados['autor']; ?></td>
<td><?php echo $dados['editora']; ?></td>
<td><?php echo $dados['ano_publicacao']; ?></td>

<td>
    <a href="excluir_livro.php?id=<?php echo $dados['id']; ?>">
        <button>Excluir</button>
    </a>
</td>

</tr>

<?php } ?>

</table>

</body>
</html>