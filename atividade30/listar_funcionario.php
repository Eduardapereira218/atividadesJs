

  <?php
include("banco.php");

$sql = "SELECT * FROM funcionarios";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Funcionários</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
    margin:40px;
}

h2{
    text-align:center;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th,td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
}

th{
    background:#007BFF;
    color:white;
}

a{
    background:red;
    color:white;
    text-decoration:none;
    padding:8px 12px;
    border-radius:5px;
}

a:hover{
    background:darkred;
}

</style>

</head>
<body>

<h2>Lista de Funcionários</h2>

<table>

<tr>
    <th>Nome</th>
    <th>Cargo</th>
    <th>Departamento</th>
    <th>Salário</th>
    <th>Ação</th>
</tr>

<?php
while($dados = mysqli_fetch_assoc($resultado)){
?>

<tr>

<td><?php echo $dados['nome']; ?></td>
<td><?php echo $dados['cargo']; ?></td>
<td><?php echo $dados['departamento']; ?></td>
<td>R$ <?php echo number_format($dados['salario'],2,",","."); ?></td>

<td>
<a href="excluir_funcionario.php?id=<?php echo $dados['id']; ?>">
Excluir
</a>
</td>

</tr>

<?php
}
?>

</table>

</body>
</html>