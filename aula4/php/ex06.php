<?php
$resultado = "";

if (isset($_POST['variavel1']) && isset($_POST['variavel2'])) {
    $v1 = $_POST['variavel1'];
    $v2 = $_POST['variavel2'];

    $resultado .= "Variáveis antes da troca: <strong>$v1</strong> e <strong>$v2</strong>.<br>";

    $aux = $v1;
    $v1 = $v2;
    $v2 = $aux;

    $resultado .= "Variáveis depois da troca: <strong>$v1</strong> e <strong>$v2</strong>.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troca de variáveis em PHP</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Troca de variáveis</h1>

    <form method="post">
        <label for="variavel1">Digite a primeira variável:</label><br />
        <input type="text" id="variavel1" name="variavel1" />
        <br />

        <label for="variavel2">Digite a segunda variável:</label><br />
        <input type="text" id="variavel2" name="variavel2" />
        <br />

        <button type="submit">Trocar variáveis</button>
    </form>

    <br>
    <div id="resultado">
        <?php echo $resultado; ?>
    </div>
</body>
</html>