<?php 
$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "acervo_livros";
$porta = "3307";


$conexao = new mysqli(
$host,
$usuario,
$senha,
$banco,
$porta
);

if ($conexao ->connect_error) {
    die("erro ao conectar".$conexao->connect_error);

}
echo "conectado com sucesso ao banco de dados com nome livros...";
?>