function calculaDiasAno() {
    const anoAtual = parseInt(document.getElementById('ano').value);
    if (isNaN(anoAtual) || anoAtual < 1) {
        document.getElementById('total').textContent = "Por favor, insira um ano válido (maior que 0).";
        return;
    }
    const qtdAnosBi = Math.floor(anoAtual / 4);
    const dias = (anoAtual - 1) * 365 + qtdAnosBi;
    document.getElementById('total').textContent =
        `Já se passaram ${dias} dias desde 01/01/0001 até 31/12/${anoAtual - 1}`;
}