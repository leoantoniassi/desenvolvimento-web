<?php
$resposta = "";

if($_POST)
{
    if($_POST["ladoa"] == "" || $_POST["ladob"] === "" || $_POST["ladoc"] === "")
    {
        $resposta = "Preencha os campos corretamente!";
    }
    else
    {
        $ladoa = $_POST["ladoa"];
        $ladob = $_POST["ladob"];
        $ladoc = $_POST["ladoc"];

        if($ladoa == $ladob && $ladoa == $ladoc)
        {
            $resposta = "Este triângulo é EQUILÁTERO!";
        }
        else if($ladoa == $ladob || $ladob == $ladoc || $ladoc == $ladoa)
        {
            $resposta = "Este triângulo é ISÓSCELES!";
        }
        else
        {
            $resposta = "Este triângulo é ESCALENO!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tipo de Triângulo</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
      
    <h1 id="texto">Ex. 19 - Tipo de Triângulo</h1>

    <form method="POST">
        <label for="ladoa">Digite o 1° lado do triângulo</label>
        <input type="number" id="ladoa" name="ladoa"/>

        <label for="ladob">Digite o 2° lado do triângulo</label>
        <input type="number" id="ladob" name="ladob"/>

        <label for="laboc">Digite o 3° lado do triângulo</label>
        <input type="number" id="ladoc" name="ladoc"/>
        <br/><br/>

        <button>Enviar</button>

        <div for="result">
            <h3 id="result"><?php echo $resposta; ?></h3>
        </div>
    </form>
  </body>
</html>
