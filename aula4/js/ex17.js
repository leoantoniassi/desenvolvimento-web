function notaMedia()
{
    let nome = document.getElementById("nome").value;
    let nota1 = document.getElementById("nota1").value;
    let nota2 = document.getElementById("nota2").value;
    let nota3 = document.getElementById("nota3").value;

    if(nome === "" || nota1 === "" || nota2 === "" || nota3 === "")
    {
        window.alert("Preencha os campos corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    nota1 = Number(nota1);
    nota2 = Number(nota2);
    nota3 = Number(nota3);


    let resultado = (nota1 + nota2 + nota3) / 3;

    if(resultado >= 6)
    {
        document.getElementById("result").innerHTML = `Parabéns ${nome}!<br>
        Você foi ARPOVADO(A) com a média: ${resultado.toFixed(1)}`;
    }
    else
    {
        document.getElementById("result").innerHTML = `Que pena ${nome}..<br>
        Você foi REPROVADO(A) com a média: ${resultado.toFixed(1)}`;
    }
}