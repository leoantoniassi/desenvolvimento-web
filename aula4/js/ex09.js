function inicio() {
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
    window.alert("Preencha pelo menos 1 item");
  } else {
    let total = totalArruela + totalParafuso + totalPorca;
    document.getElementById("total").innerHTML = `Valor total: R$${total} <br>
      valores:<br>
      Valor Total de parafusos R$${totalParafuso}<br>
      Valor Total de Arruelas: R$${totalArruela}<br>
      Valor Total de Porcas: R$${totalPorca}`;
  }
}
