function numerosIguais()
{
    let numero = document.getElementById("numero").value;

    if(numero === "")
    {
        window.alert("Preencha o campo corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    let numero_sorteado = Math.floor(Math.random() * 7);

    if(numero >= 0 && numero <= 6)
    {
        if(numero == numero_sorteado)
        {
            document.getElementById("result").innerHTML = `Os números são iguais!<br><br>
            Número digitado: ${numero}<br>
            Número sorteado: ${numero_sorteado}`;
        }
        else
        {
            document.getElementById("result").innerHTML = `Os números NÃO são iguais!<br><br>
            Número digitado: ${numero}<br>
            Número sorteado: ${numero_sorteado}`;
        }
    }
    else
    {
        document.getElementById("result").innerHTML = "O número a ser digitado tem que ser de 0 a 6";
    }
}