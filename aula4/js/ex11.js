function verificarLetra() {
    const letra = document.getElementById('letra').value.toLowerCase();
    const resultado = document.getElementById('resultado');
    if (letra === 'a' || letra === 'e' || letra === 'i' || letra === 'o' || letra === 'u') {
        resultado.textContent = `A letra '${letra}' é uma vogal`;
    } else {
        resultado.textContent = `A letra '${letra}' é uma consoante`;
    }
}