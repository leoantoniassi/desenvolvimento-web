<?php
$resposta = "";

if($_POST)
{
    if($_POST["contador"] == "")
    {
        $resposta = "Preencha o campo corretamente!";
    }
    else
    {
        $contador = $_POST["contador"];

        if($contador < 0 || $contador > 10)
        {
            $resposta = "Número inválido.";
        }
        else
        {
            for($i = $contador; $i > 0; $i--)
            {
                echo "Detonação em: $i<br>";
                flush();
                ob_flush();
                sleep(1);
            }

            $resposta = "Boom!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contagem Regressiva</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
      
    <h1 id="texto">Ex. 22 - Contagem Regressiva</h1>

    <form method="POST">
        <label>Digite um número de 1 a 10:</label>
        <input type="number" id="contador" name="contador"/>
        <br>
        <button>Enviar</button>
        <br><br>
        <div for="result" >
            <h3 id="result"><?php echo $resposta; ?></h3>
        </div>        
    </form>
  </body>
</html>
