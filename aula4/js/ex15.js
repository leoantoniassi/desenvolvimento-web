function multiploCinco()
{
    let numero = document.getElementById("numero").value;

    if(numero === "")
    {
        window.alert("Preencha o campo corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    if(numero % 5 == 0)
    {
        document.getElementById("result").innerHTML = `O número ${numero} é múltiplo de 5`;
    }
    else
    {
        document.getElementById("result").innerHTML = `O número ${numero} não é múltiplo de 5`;
    }
}