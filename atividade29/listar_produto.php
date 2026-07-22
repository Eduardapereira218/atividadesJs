<?php

include("banco.php");

$sql = "SELECT * FROM produtos";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>

<h2>Lista de Produtos</h2>

<table border="1" cellpadding="8">

<tr>
    <th>Nome do Produto</th>
    <th>Categoria</th>
    <th>Quantidade</th>
    <th>Preço</th>
    <th>Ação</th>
</tr>

<?php

while($dados = mysqli_fetch_assoc($resultado)){

?>

<tr>

<td><?php echo $dados['nome']; ?></td>

<td><?php echo $dados['categoria']; ?></td>

<td><?php echo $dados['quantidade']; ?></td>

<td>R$ <?php echo number_format($dados['preco'],2,",","."); ?></td>

<td>

<a href="excluir_produto.php?id=<?php echo $dados['id']; ?>">
<button>Excluir</button>
</a>

</td>

</tr>

<?php

}

?>

</table>

</body>
</html>