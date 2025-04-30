<?php
$resposta = "";
$numero_sorteado = rand(0, 6);
if($_POST)
{
    if($_POST["numero"] == "")
    {
        $resposta = "Preencha o campo corretamente!";
    }
    else
    {
        $numero = $_POST["numero"];
        if($numero >= 0 && $numero <= 6)
        {
            if($numero == $numero_sorteado)
            {
                $resposta = "Os números são iguais!<br><br>
                Número digitado: $numero<br>
                Número sorteado: $numero_sorteado";
            }
            else
            {
                $resposta = "Os números NÃO são iguais!<br><br>
                Número digitado: $numero<br>
                Número sorteado: $numero_sorteado";
            }
        }
        else
        {
            $resposta = "O número a ser digitado tem que ser de 0 a 6";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Iguais</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 id="texto">Ex. 16 - Números Iguais</h1>

    <form method="POST">
        <label for="numero">Digite o número: </label>
        <input type="number" id="numero" name="numero" />
        <br><br>
        
        <h3 id="result"><?php echo $resposta; ?></h3>
        <button type="submit">Verificar</button>
    </form>

</body>
</html>