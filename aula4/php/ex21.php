<?php
$resposta = "";

if($_POST)
{
    if($_POST["opcao"] == "")
    {
        $resposta = "Preencha o campo corretamente!";
    }
    else
    {
        $opcao = $_POST["opcao"];

        switch($opcao)
        {
            case 1:
                $resposta = "Você é lindo(a)!";
            break;

            case 2:
                $resposta = "Você é um monstro";
            break;

            case 0:
                $resposta = "Adeus!";
            break;

            default:
            $resposta = "Opção Inválida.";
            break;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Escolha-Caso</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
      
    <h1 id="texto">Ex. 21 - Escolha-Caso</h1>

    <form method="POST">
        <label>Escolha uma das opções:</label>
        <label>(1) - Elogio</label>
        <label>(2) - Ofensa</label>
        <label>(0) - Sair</label>
        <input type="number" id="opcao" name="opcao"/>
        <br/><br/>

        <button>Enviar</button>
        <br><br>

        <div for="result">
            <h3 id="result"><?php echo $resposta; ?></h3>
        </div>
    </form>
  </body>
</html>
