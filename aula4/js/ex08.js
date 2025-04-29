function alturaMedia() {
  let altura1 = document.getElementById("altura1").value;
  let altura2 = document.getElementById("altura2").value;
  let altura3 = document.getElementById("altura3").value;

  if (altura1 === "" || altura2 === "" || altura3 === "") {
    window.alert("Preencha TODOS os campos corretamente!");
    return;
  }

  altura1 = Number(altura1);
  altura2 = Number(altura2);
  altura3 = Number(altura3);

  let media = (altura1 + altura2 + altura3) / 3;
  document.getElementById(
    "result"
  ).innerHTML = `A média das alturas é: ${media.toFixed(2)}.`;
}