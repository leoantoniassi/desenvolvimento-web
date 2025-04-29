<!DOCTYPE html>
<html>

<head>
    <title>Escrever o Nome</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <form method="post">
        Nome: <input type="text" name="nome"><br>
        Sobrenome: <input type="text" name="sobrenome"><br>
        <input type="submit" value="Juntar">
    </form>

    <?php
    if ($_POST) {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        echo "você é: $nome $sobrenome!";
    }
    elseif ((empty($_POST["nome"])) || (empty($_POST["sobrenome"]))) {
        echo "Preencha os dados do formulário!";
    }
    ?>
</body>

</html>