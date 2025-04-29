<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 2 php</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Número Digitado:</h1>
    <form id="numero" action="" method="post">
        <label for="nd">Digite um Número</label>
        <input type="text" id="nd" name="nd"><br>
        <input type="submit" value="Enviar"><br>
        <input type="reset" value="Limpar">
    </form>

</body>

</html>

<?php
echo "<hr><br>";

if (isset($_POST['nd']) && is_numeric($_POST['nd'])) {
    $_numero = $_POST['nd'];
    echo "O número digitado foi: <br>";
    echo "<p>$_numero</p>";
} elseif (empty($_POST['nd'])) {
    echo "aguardando um número a ser digitado";
};
?>