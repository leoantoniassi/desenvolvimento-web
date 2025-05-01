function numeroInteiro()
{
    let numero = document.getElementById("numero").value
    if(numero === "")
    {
        window.alert("Preencha os campos corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    numero = parseInt(numero, 10);
    
    if(numero > 0)
    {
        document.getElementById("result").innerHTML = "O número é POSTIVO!";
    }
    else if(numero < 0)
    {
        document.getElementById("result").innerHTML = "O número é NEGATIVO!";
    }
    else
    {
        document.getElementById("result").innerHTML = "O número é igual a ZERO!";
    }
}