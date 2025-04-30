<?php
$resposta = "";

if($_POST)
{
    if($_POST["nome"] == "" || $_POST["nota1"] === "" || $_POST["nota2"] === "" || $_POST["nota3"] === "")
    {
        $resposta = "Preencha os campos corretamente!";
    }
    else
    {
        $nome = $_POST["nome"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];

        $media = ($nota1 + $nota2 + $nota3) / 3;
        $resultado = number_format($media, 1);

        if($resultado >= 6)
        {
            $resposta = "Parabéns $nome!<br>
            Você foi APROVADO(A) com a média: $resultado";
        }
        else
        {
            $resposta = "Que pena $nome..<br>
            Você foi REPROVADO(A) com a média: $resultado";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Média Final</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
      
    <h1 id="texto">Ex. 17 - Média Final</h1>

    <form method="POST">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome"/>

        <label for="nota1">Digite a 1a nota</label>
        <input type="number" id="nota1" name="nota1"/>

        <label for="nota2">Digite a 2a nota</label>
        <input type="number" id="nota2" name="nota2"/>

        <label for="nota3">Digite a 3a nota</label>
        <input type="number" id="nota3" name="nota3"/>
        <br><br>

        <button type="submit">Calcular Média</button>
        <h3 id="result"><?php echo $resposta; ?></h3>
    </form>
  </body>
</html>
