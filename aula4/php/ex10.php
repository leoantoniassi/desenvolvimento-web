<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 10 - Quantos dias</title>
    <link rel="stylesheet" href="/aula4/css/style.css" />
</head>
<body>
    <h2>Calculadora de Dias</h2>
    
    <form method="post">
        <label>Informe o ano atual:</label>
        <input type="number" name="ano" required min="1">
        <button type="submit" name="calcular">Calcular dias</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $anoAtual = (int)$_POST['ano'];
        
        if ($anoAtual < 1) {
            echo "<p>Por favor, insira um ano válido (maior que 0).</p>";
        } else {
            $qtdAnosBi = intval($anoAtual / 4);
            $dias = ($anoAtual - 1) * 365 + $qtdAnosBi;
            
            echo "<p>Já se passaram $dias dias desde 01/01/0001 até 31/12/" . ($anoAtual - 1) . "</p>";
        }
    }
    ?>
</body>
</html>