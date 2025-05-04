function montarTabuada()
{
    document.getElementById("result").innerHTML = "";
    let numero = document.getElementById("numero").value;

    if(numero === "")
    {
        window.alert("Preencha os campos corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    numero = Number(numero);

    for(let contador = 0; contador <= 10; contador++)
    {
        let resultado = numero * contador;
        document.getElementById("result").innerHTML += `${numero} x ${contador} = ${resultado}<br>`;
    }
}