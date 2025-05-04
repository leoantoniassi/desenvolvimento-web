<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 13 - idade do usuario</title>
    <link rel="stylesheet" href="/aula4/css/style.css" />
</head>
<body>
    <h2>Verificador de Maioridade</h2>
    
    <form method="post">
        <label for="idade">Informe sua idade:</label>
        <input type="number" name="idade" min="0" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>
    
    <?php
    if (isset($_POST['verificar'])) {
        $idade = (int)$_POST['idade'];
        
        echo '<div id="resultado">';
        
        if ($idade < 0) {
            echo "Por favor, digite uma idade válida.";
        } elseif ($idade < 18) {
            echo "Você é menor de idade";
        } else {
            echo "Você é maior de idade";
        }
        
        echo '</div>';
    }
    ?>
</body>
</html>