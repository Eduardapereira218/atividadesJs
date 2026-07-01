<?php
$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco = "atividade20";
$porta = "3307";



$conexao = new mysqli(
$host,
$usuario,
$senha,
$banco,
$porta
);
if ($conexao ->connect_errno) {
   die("Erro ao conectar" .$conexao->connect_errno);
}
echo "Conectado com sucesso o banco dados!";



?>