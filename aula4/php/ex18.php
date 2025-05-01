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
        
        if($numero > 0)
        {
            $resposta = "O número é POSTIVO!";
        }
        else if($numero < 0)
        {
            $resposta = "O número é NEGATIVO!";
        }
        else
        {
            $resposta = "O número é  igual a ZERO!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Número Inteiro</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
      
    <h1 id="texto">Ex. 18 - Número Inteiro</h1>
    <form method="POST">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero"/>
        <br/><br/>

        <div for="result">
            <h3 id="result"><?php echo $resposta; ?></h3>
        </div>

    <button>Verificar</button>
    </form>
  </body>
</html>
