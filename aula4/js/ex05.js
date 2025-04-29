function inicio() {
  let valor = Number(document.getElementById("numero").value);
  let metadeInteira = valor / 2;
  let resto = valor % 3;

  document.getElementById(
    "resultado"
  ).innerHTML = `A metade inteira do numero é: ${metadeInteira}<br>
  O resto da divisão de ${valor} por 3 é: ${resto}`;
}
