function inicio() {
  let variavel1 = document.getElementById("variavel1").value;
  let variavel2 = document.getElementById("variavel2").value;

  document.getElementById(
    "resultado"
  ).innerHTML = `Variáveis: <strong>${variavel1}</strong> e <strong>${variavel2}</strong> antes da troca.<br>`;

  let aux = variavel1;
  variavel1 = variavel2;
  variavel2 = aux;

  document.getElementById(
    "resultado"
  ).innerHTML += `<br>Variáveis: <strong>${variavel1}</strong> e <strong>${variavel2}</strong> depois da troca.`;
}