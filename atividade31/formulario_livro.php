<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Cadastro de Livros</h2>

<form action="salvar_livro.php" method="POST">

    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Autor:</label><br>
    <input type="text" name="autor" required><br><br>

    <label>Editora:</label><br>
    <input type="text" name="editora" required><br><br>

    <label>Ano de Publicação:</label><br>
    <input type="number" name="ano_publicacao" required><br><br>

    <input type="submit" value="Salvar">

</form>

</body>
</html>