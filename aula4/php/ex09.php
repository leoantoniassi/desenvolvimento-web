<br><br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $qntdParafuso = isset($_POST["qntdParafuso"]) ? (int)$_POST["qntdParafuso"] : 0;
    $qntdArruela = isset($_POST["qntdArruela"]) ? (int)$_POST["qntdArruela"] : 0;
    $qntdPorca = isset($_POST["qntdPorca"]) ? (int)$_POST["qntdPorca"] : 0;

    if ($qntdParafuso == 0 && $qntdArruela == 0 && $qntdPorca == 0) {
        echo "<script>alert('Preencha pelo menos 1 item à venda!');</script>";
    } else {
        $precoParafuso = 1.5;
        $precoArruela = 2.0;
        $precoPorca = 2.5;

        $totalParafuso = $precoParafuso * $qntdParafuso;
        $totalArruela = $precoArruela * $qntdArruela;
        $totalPorca = $precoPorca * $qntdPorca;
        $total = $totalParafuso + $totalArruela + $totalPorca;

        echo "<div>";
        echo "<h3>Cliente: $nome</h3>";
        echo "<p>Valor total em Parafusos: R$ " . number_format($totalParafuso, 2, ',', '.') . "</p>";
        echo "<p>Valor total em Arruelas: R$ " . number_format($totalArruela, 2, ',', '.') . "</p>";
        echo "<p>Valor total em Porcas: R$ " . number_format($totalPorca, 2, ',', '.') . "</p>";
        echo "<strong>Valor total da compra: R$ " . number_format($total, 2, ',', '.') . "</strong>";
        echo "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ex 09 - Loja de Ferramentas</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <h1>Ex 09 - Loja de Ferramentas</h1>

    <form method="post" action="">
        <label for="nome">Digite seu nome:</label>
        <input type="text" name="nome" id="nome" required />
        <br><br>

        <!-- parafusos -->
        <label for="qntdParafuso">Digite a quantidade de parafusos que deseja comprar:</label>
        <input type="number" name="qntdParafuso" id="qntdParafuso" min="0" />
        <br><br>

        <!-- arruelas -->
        <label for="qntdArruela">Digite a quantidade de arruelas que deseja comprar:</label>
        <input type="number" name="qntdArruela" id="qntdArruela" min="0" />
        <br><br>

        <!-- porcas -->
        <label for="qntdPorca">Digite a quantidade de porcas que deseja comprar:</label>
        <input type="number" name="qntdPorca" id="qntdPorca" min="0" />
        <br><br>

        <button type="submit">Calcular compras</button>
    </form>
</body>

</html>