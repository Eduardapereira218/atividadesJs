<?php
include("banco.php");

$sql = "SELECT * FROM alunos";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>

<h2>Lista de Alunos</h2>

<table border="1" cellpadding="8">

<tr>
    <th>Nome</th>
    <th>Idade</th>
    <th>Curso</th>
    <th>Cidade</th>
    <th>Ação</th>
</tr>

<?php
while($aluno = mysqli_fetch_assoc($resultado)){
?>

<tr>
    <td><?php echo $aluno['nome']; ?></td>
    <td><?php echo $aluno['idade']; ?></td>
    <td><?php echo $aluno['curso']; ?></td>
    <td><?php echo $aluno['cidade']; ?></td>

    <td>
        <a href="excluiralunos.php?id=<?php echo $aluno['id']; ?>">
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