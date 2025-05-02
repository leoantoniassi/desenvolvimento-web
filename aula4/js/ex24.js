function verificarIdade()
{
    let idade = document.getElementById("idade").value;
    let valido = false;

    if(idade === "")
    {
        window.alert("Preencha os campos corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    idade = Number(idade);
    do
    {
        if(idade < 5 || idade > 150)
        {
            document.getElementById("result").innerHTML = "Valor inválido"
            return;
        }
        else
        {
            valido = true;
        }
    } while(!valido);

    document.getElementById("result").innerHTML = "Correto!";
}