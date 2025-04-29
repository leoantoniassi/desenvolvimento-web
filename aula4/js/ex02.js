function resultado() {
    let nome = prompt('Qual seu nome?');
    let numero = prompt('qual sua idade?')
    document.getElementById("resultado").innerText = `seu nome é ${nome} e sua idade é ${numero}`;
}