function inicio() {
    let a = Number(prompt("digite o primeiro número")),
      b = Number(prompt("digite o segundo número")),
      soma = a + b,
      sub = a - b,
      mult = a * b,
      div = a / b,
      resto = a % b;
  
    document.getElementById(
      "resultado"
    ).innerHTML = `A soma dos números é ${soma}, <br> A subtração dos números é ${sub} <br>
      A multiplicação dos números é ${mult} <br>
      A divisão dos números é ${div} <br>
      o resto da divisão de ${a} por ${b} é ${resto}`;
  }