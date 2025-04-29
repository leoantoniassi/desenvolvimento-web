<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Divisões Inteiras com PHP</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

  <form action="" method="post">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <br><br>
    <button type="submit">Calcular</button>
  </form>

  <div id="resultado">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $metadeInteira = $numero / 2;
        $resto = $numero % 3;

        echo "A metade inteira do número é: $metadeInteira";
        echo "<br>O resto da divisão de $numero por 3 é: $resto";
      }
    ?>
  </div>

</body>
</html>