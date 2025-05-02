<?php
$resposta = "";

if($_POST)
{
    if($_POST["numero"] == "")
    {
        $resposta = "Preencha o campo corretamente!";
    }
    else
    {
        $numero = $_POST["numero"];

        for($contador = 0; $contador <= 10; $contador++)
        {
            $resultado = $numero * $contador;
            $resposta .= "$numero x $contador = $resultado<br>"; 
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabuada</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
      
    <h1 id="texto">Ex. 23 - Tabuada</h1>
    <form method="POST">
        <label>Digite um número para ver sua tabuada:</label>
        <input type="number" id="numero" name="numero"/>
        <br>
        <button>Enviar</button>
    </form>
    <br><br>

    <div for="result" >
        <h3 id="result"><?php echo $resposta; ?></h3>
      </div>
  </body>
</html>
