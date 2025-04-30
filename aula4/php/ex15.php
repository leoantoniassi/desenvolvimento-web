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
        if($numero % 5 == 0)
        {
            $resposta = "O número $numero é múltiplo de 5";
        }
        else
        {
            $resposta = "O número $numero não é múltiplo de 5";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Múltiplo de Cinco</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <h1 id="texto">Ex. 15 - Múltiplo de Cinco</h1>
    
    <form method="POST">
        <label for="numero">Digite o número:</label>
        <input type="number" id="numero" name="numero" />   
        <br><br>
        
        <h3 id="result"><?php echo $resposta; ?></h3>
        <button type="submit">Verificar</button>
    </form>

</body>
</html>