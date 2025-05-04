function tipoTriangulo()
{
    let ladoa = document.getElementById("ladoa").value;
    let ladob = document.getElementById("ladob").value;
    let ladoc = document.getElementById("ladoc").value;

    if(ladoa === "" || ladob === "" || ladoc === "")
    {
        window.alert("Preencha os campos corretamente!");
        document.getElementById("result").innerHTML = "";
        return;
    }

    if(ladoa == ladob && ladoa == ladoc)
    {
        document.getElementById("result").innerHTML = "Este triângulo é EQUILÁTERO!";
    }
    else if(ladoa == ladob || ladob == ladoc || ladoc == ladoa)
    {
        document.getElementById("result").innerHTML = "Este triângulo é ISÓSCELES!";
    }
    else
    {
        document.getElementById("result").innerHTML = "Este triângulo é ESCALENO!";
    }
}