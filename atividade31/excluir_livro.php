<?php

include("banco.php");

$id = $_GET['id'];

$sql = "DELETE FROM livros WHERE id=$id";

if ($conexao->query($sql)) {
    header("Location: listar_livros.php");
    exit();
} else {
    echo "Erro ao excluir o livro.";
}

?>