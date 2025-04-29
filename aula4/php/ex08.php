<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura1 = $_POST["altura1"];
    $altura2 = $_POST["altura2"];
    $altura3 = $_POST["altura3"];

    
    if ($altura1 === "" || $altura2 === "" || $altura3 === "") {
        $mensagem = "<p style='color:red;'>Preencha TODOS os campos corretamente!</p>";
    } else {
        // Calcula a média
        $media = (floatval($altura1) + floatval($altura2) + floatval($altura3)) / 3;
        $media = number_format($media, 2, ',', '.');
        $mensagem = "<p>A média das alturas é: $media</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Altura Média</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form method="post">
        <h1>ex 8 - Altura média</h1>

        <label for="altura1">Digite a 1ª altura</label>
        <input type="number" id="altura1" name="altura1" step="any"><br>

        <label for="altura2">Digite a 2ª altura</label>
        <input type="number" id="altura2" name="altura2" step="any"><br>

        <label for="altura3">Digite a 3ª altura</label>
        <input type="number" id="altura3" name="altura3" step="any"><br><br>

        <button type="submit">Calcular Média</button>

        <div><?php echo $mensagem; ?></div>
    </form>
</body>
</html>