<?php
$resposta = "";

if($_POST)
{
    if($_POST["idade"] == "")
    {
        $resposta = "Preencha o campo corretamente!";
    }
    else
    {
        $idade = $_POST["idade"];
        $valido = false;

        do
        {
            if($idade < 5 || $idade > 150)
            {
                $resposta = "Valor inválido";
                break;
            }
            else
            {
                $valido = true;
                $resposta = "Correto!";
            }
        } while(!$valido);
    
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Consistência</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
      
    <h1 id="texto">Ex. 24 - Consistência</h1>
    <form method="POST">
        <label>Informe sua idade (valores aceitos de 5 a 150):</label>
        <input type="number" id="idade" name="idade"/>
        <br>
        <button>Enviar</button>
    </form>
    <br><br>

    <div for="result" >
        <h3 id="result"><?php echo $resposta; ?></h3>
      </div>
  </body>
</html>
