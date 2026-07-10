<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <h1> O resultado da soma e:</h1>
    <?php 
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $soma = $numero1 + $numero2;

    echo "<p> A soma dos dois numeros e: </p>";
    ?>
</body>
</html>