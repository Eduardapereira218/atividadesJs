<?php 
//incluindo a conexao
include "banco.php";

//sql para selecionar todos os registros
$sql ="SELECT * FROM form";

//criamos a variavel $resultado para guardar a consulta 
$resultado = $conexao->query($sql);

//laço de repeticão while(enquanto)
//fetch_assoc busca o registro no banco de  dados
while ($cliente = $resultado->fetch_assoc()){



//mostro o campo nome da tabela form
echo "nome: ".$cliente ['nome'];
echo "nome:".$cliente ['cidade'];

}



?>