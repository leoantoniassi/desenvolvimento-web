function inicio() {
  let nome = document.getElementById("nome").value;
  
  let precoParafuso = 1.5;
  let precoArruela = 2.0;
  let precoPorca = 2.5;

  let qntdParafuso = document.getElementById("qntdParafuso").value;
  let qntdArruela = document.getElementById("qntdArruela").value;
  let qntdPorca = document.getElementById("qntdPorca").value;

  let totalParafuso = precoParafuso * qntdParafuso;
  let totalArruela = precoArruela * qntdArruela;
  let totalPorca = precoPorca * qntdPorca;

  if (qntdArruela == "" && qntdParafuso == "" && qntdPorca == "") {
    window.alert("Preencha pelo menos 1 item à venda!");
  } else {
    let total = totalArruela + totalParafuso + totalPorca;
    document.getElementById("total").innerHTML = `Cliente: ${nome} <br>
    Valor total: R$${total} <br>`;

    let resultP = document.getElementById("totalParafuso").innerHTML = `Valor total em Parafusos: ${totalParafuso}`;
    let resultA = document.getElementById("totalArruela").innerHTML = `Valor total em Parafusos: ${totalArruela}`;
    let resultPo = document.getElementById("totalPorca").innerHTML = `Valor total em Parafusos: ${totalPorca}`;
  }
}