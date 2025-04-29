function inicio() {
  let nome = String(prompt("digite seu primeiro nome"));
  let sobrenome = String(prompt("digite seu sobrenome"));
  document.getElementById("resultado").innerHTML = `seu nome completo é ${nome} ${sobrenome}`;
}