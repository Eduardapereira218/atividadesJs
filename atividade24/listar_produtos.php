<?php
include("conexao.php");

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<div class="container">
    <h1>Lista de Produtos</h1>

    <table>
        <tr>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </tr>

        <?php while($produto = mysqli_fetch_assoc($resultado)){ ?>

        <tr>
            <td><?php echo $produto['nome']; ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
            <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>