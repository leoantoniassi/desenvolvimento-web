function calcularMedia() {
    const m1 = parseFloat(document.getElementById('m1').value);
    const m2 = parseFloat(document.getElementById('m2').value);
    const m3 = parseFloat(document.getElementById('m3').value);
    if (isNaN(m1) || isNaN(m2) || isNaN(m3)) {
        alert("Por favor, insira valores numéricos válidos para todas as médias");
        return;
    }
    const media = (m1 + m2 + m3) / 3;
    const mediaArredondada = Math.round(media * 100) / 100;
    let resultadoHTML = `<p>A média final é: ${mediaArredondada.toFixed(2)}</p>`;
    if (m1 < media) {
        resultadoHTML += "<p>A média 1 é menor que a média final</p>";
    }
    if (m2 < media) {
        resultadoHTML += "<p>A média 2 é menor que a média final</p>";
    }
    if (m3 < media) {
        resultadoHTML += "<p>A média 3 é menor que a média final</p>";
    }
    document.getElementById('resultado').innerHTML = resultadoHTML;
}