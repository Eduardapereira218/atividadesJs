<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Cadastro de Livros</h2>

<form action="cadastrar_livro.php" method="post">

    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Autor:</label><br>
    <input type="text" name="autor" required><br><br>

    <label>Editora:</label><br>
    <input type="text" name="editora" required><br><br>

    <label>Ano de Publicação:</label><br>
    <input type="number" name="ano_publicacao" required><br><br>

    <button type="submit">Salvar</button>

</form>

</body>
</html>