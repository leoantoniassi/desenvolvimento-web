<?php
if (isset($_POST['idade'])) {
    $idade = intval($_POST['idade']);
    $maioridade = 18;

    if ($idade <= 0) {
        echo "Número inválido!";
    } elseif ($idade < $maioridade) {
        echo "Faltam " . ($maioridade - $idade) . " anos para você atingir a maioridade.";
    } else {
        echo "Você já é maior de idade há " . ($idade - $maioridade) . " anos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Maioridade Penal</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h1>Exercício 7 - Maioridade Penal</h1>
    <form method="post">
        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade">
        <br><br>
        <button type="submit">Testar Idade</button>
    </form>

</body>
</html>