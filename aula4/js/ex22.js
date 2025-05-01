function contadorBomba()
{
    let contador = document.getElementById("contador").value;

    if(contador === "")
    {
        window.alert("Preencha os campos corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    contador = parseInt(contador);

    if(contador < 0 || contador > 10)
    {
        document.getElementById("result").innerHTML = "Número inválido.";
    }
    else
    {
    const intervalo = setInterval(() => 
        {
            document.getElementById("result").innerHTML = "Detonação em: " + contador;
            contador--;
        
            if(contador < 0)
            {
                clearInterval(intervalo);
                document.getElementById("result").innerHTML = "Booom!";
            }
        }, 1000);
    }
}