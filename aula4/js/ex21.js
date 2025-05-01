function opcaoEscolhida()
{
    let opcao = document.getElementById("opcao").value;

    if(opcao === "")
    {
        window.alert("Preencha os campos corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    opcao = parseInt(opcao);

    switch(opcao)
    {
        case 1:
            document.getElementById("result").innerHTML = "Você é lindo(a)!";
        break;

        case 2:
            document.getElementById("result").innerHTML = "Você é um monstro!";
        break;

        case 0:
            document.getElementById("result").innerHTML = "Adeus!";
        break;

        default:
            document.getElementById("result").innerHTML = "Opção inválida.";
        break;
    }
}