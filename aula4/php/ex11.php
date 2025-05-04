<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 11 - Vogal</title>
    <link rel="stylesheet" href="/aula4/css/style.css" />
</head>
<body>
    <h2>Verificador de Vogal/Consoante</h2>
    
    <form method="post">
        <label for="letra">Digite uma letra:</label>
        <input type="text" id="letra" name="letra" maxlength="1" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if (isset($_POST['verificar'])) {
        $letra = strtolower($_POST['letra'] ?? '');
            if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
                echo "<p>A letra '$letra' é uma vogal</p>";
            } else {
                echo "<p>A letra '$letra' é uma consoante</p>";
            }
        }
    ?>
</body>
</html>