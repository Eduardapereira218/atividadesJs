<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    ,<link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
<div class="container">
    <h2>Multiplicação de Valores</h2>

    <form method="POST">
        <input type="number" name="valor1" placeholder="Digite o primeiro valor" required>

        <input type="number" name="valor2" placeholder="Digite o segundo valor" required>

        <input type="number" name="valor3" placeholder="Digite o terceiro valor" required>

        <button type="submit">multiplicar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $valor3 = $_POST["valor3"];

        $resultado = $valor1 * $valor2 * $valor3;

        echo "<div class='resultado'>
                Resultado da multiplicação: $resultado
              </div>";
    }
    ?>
</div>

</body>
</html>