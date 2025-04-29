function maioridade() {
  let maioridade = 18;
  let idade = document.getElementById("idade").value;

  let anos = maioridade - idade;
  if (idade < maioridade && idade > 0) {
    document.getElementById(
      "resultado"
    ).innerHTML = `Faltam ${anos} anos para você atingir a maioridade.`;
  } else if (idade <= 0) {
    document.getElementById("resultado").innerHTML = `Número inválido!`;
  } else {
    document.getElementById("resultado").innerHTML = `Você já é maior de idade há ${idade - maioridade} anos!`;
  }
}