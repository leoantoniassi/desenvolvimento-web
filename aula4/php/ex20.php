<?php
$resposta = "";

if($_POST)
{
    if($_POST["numeroum"] == "" || $_POST["numerodois"] === "" || $_POST["operador"] === "")
    {
        $resposta = "Preencha os campos corretamente!";
    }
    else
    {
        $numeroum = $_POST["numeroum"];
        $numerodois = $_POST["numerodois"];
        $operador = $_POST["operador"];

        if($operador == "+")
        {
            $resultado = $numeroum + $numerodois;
            $resultado = round($resultado, 2);
            $resposta = "Resultado: <br> $numeroum + $numerodois = $resultado";
        }
        else if($operador == "-")
        {
            $resultado = $numeroum - $numerodois;
            $resultado = round($resultado, 2);
            $resposta = "Resultado: <br> $numeroum - $numerodois = $resultado";
        }
        else if($operador == "*")
        {
            $resultado = $numeroum * $numerodois;
            $resultado = round($resultado, 2);
            $resposta = "Resultado: <br> $numeroum * $numerodois = $resultado";
        }
        else if($operador == "/")
        {
            $resultado = $numeroum / $numerodois;
            $resultado = round($resultado, 2);
            $resposta = "Resultado: <br> $numeroum / $numerodois = $resultado";
        }
        else
        {
            $resposta = "Operador inválido.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mini Calculadora</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
      
    <h1 id="texto">Ex. 20 - Mini Calculadora</h1>

    <form method="POST">
        <label for="numeroum">Digite o 1° número</label>
        <input type="number" step="0.01" id="numeroum" name="numeroum"/>

        <label for="numerodois">Digite o 2° número</label>
        <input type="number" step="0.01" id="numerodois" name="numerodois"/>

        <label for="operador">Agora digite uma das operações (+, -, *, /)</label>
        <input type="text" id="operador" name="operador"/>
        <br/><br/>

        <button>Enviar</button>

        <div for="result">
            <h3 id="result"><?php echo $resposta; ?></h3>
        </div>
    </form>
  </body>
</html>
