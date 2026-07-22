
<?php

include("banco.php");

$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id=$id";

if ($conexao->query($sql)) {
    header("Location: listar_produtos.php");
    exit();
} else {
    echo "Erro ao excluir o produto.";
}

?>