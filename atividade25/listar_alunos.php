<?php

include "banco.php";

$sql = "SELECT * FROM alunos";

 $resultado = $conexao->query($sql); 


 while($linha = mysqli_fetch_assoc($resultado)){

echo "<tr>";
echo "<td>".$linha['nome']."<br>";
echo "<td>".$linha['idade']."<br>";
echo "<td>".$linha['curso']."<br>";
echo "<td>".$linha['cidade']."<br>";
echo "</tr>";

}

?>
