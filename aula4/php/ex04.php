<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações simples com PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Ex 4 - operações simples com PHP</h1>
    <form id="numero" action="" method="post">
        <label for="n1">Digite um Número</label>
        <input type="number" id="n1" name="n1"><br>
        <label for="n2">Digite outro Número</label>
        <input type="number" id="n2" name="n2"><br>
        <input type="submit" value="Enviar"><br>
        <input type="reset" value="Limpar">
    </form>
</body>

</html>

<?php
echo "<hr><br>";

if (isset($_POST['n1'], $_POST['n2']) && is_numeric($_POST['n1']) && is_numeric($_POST['n2'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    echo "<h3>Operações:</h3>";
    echo "<p>A soma dos números é: " . ($n1 + $n2) . "</p>";
    echo "<p>A Subtração dos números é: " . ($n1 - $n2) . "</p>";
    echo "<p>A Multiplicação dos números é: " . ($n1 * $n2) . "</p>";
    echo "<p>A Divisão dos números é: " . ($n2 != 0 ? ($n1 / $n2) : "Divisão por zero") . "</p>";
} else {
    echo "Aguardando os números serem digitados.";
}
?>