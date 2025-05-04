function miniCalculadora()
{
    let numeroum = document.getElementById("numeroum").value;
    let numerodois = document.getElementById("numerodois").value;
    let operador = document.getElementById("operador").value;

    if(numeroum === "" || numerodois === "" || operador === "")
    {
        window.alert("Preencha os campos corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    numeroum = Number(numeroum);
    numerodois = Number(numerodois);

    if(operador == "+")
    {
        let resultado = numeroum + numerodois;
        document.getElementById("result").innerHTML = `Resultado: <br><br> ${numeroum} + ${numerodois}
         = ${resultado.toFixed(2)}`;
    }
    else if(operador == "-")
    {
        let resultado = numeroum - numerodois;
        document.getElementById("result").innerHTML = `Resultado:<br><br>${numeroum} - ${numerodois}
         = ${resultado.toFixed(2)}`;
    }
    else if(operador == "*")
    {
        let resultado = numeroum * numerodois;
        document.getElementById("result").innerHTML = `Resultado:<br><br>${numeroum} * ${numerodois}
         = ${resultado.toFixed(2)}`;
    }
    else if(operador == "/")
    {
        let resultado = numeroum / numerodois;
        document.getElementById("result").innerHTML = `Resultado:<br><br>${numeroum} / ${numerodois}
         = ${resultado.toFixed(2)}`;
    }
    else
    {
        document.getElementById("result").innerHTML = "Operador inválido.";
    }
}