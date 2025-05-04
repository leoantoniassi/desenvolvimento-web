<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 12 - Media</title>
    <link rel="stylesheet" href="/aula4/css/style.css" />
</head>
<body>
    <h2>Cálculo de Médias</h2>
    
    <form method="post">
        <div>
            <label for="m1">Média 1:</label>
            <input type="number" name="m1" step="0.01" required>
        </div>
        
        <div>
            <label for="m2">Média 2:</label>
            <input type="number" name="m2" step="0.01" required>
        </div>
        
        <div>
            <label for="m3">Média 3:</label>
            <input type="number" name="m3" step="0.01" required>
        </div>
        
        <button type="submit" name="calcular">Calcular Média</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $m1 = (float)$_POST['m1'];
        $m2 = (float)$_POST['m2'];
        $m3 = (float)$_POST['m3'];
        $media = ($m1 + $m2 + $m3) / 3;
        $mediaArredondada = round($media, 2);
        echo "<div id='resultado'>";
        echo "<p>A média final é: " . number_format($mediaArredondada, 2) . "</p>";
        if ($m1 < $media) {
            echo "<p>A média 1 é menor que a média final</p>";
        }
        
        if ($m2 < $media) {
            echo "<p>A média 2 é menor que a média final</p>";
        }
        
        if ($m3 < $media) {
            echo "<p>A média 3 é menor que a média final</p>";
        }
        echo "</div>";
    }
    ?>
</body>
</html>