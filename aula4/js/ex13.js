function verificarIdade() {
    const idade = parseInt(document.getElementById('idade').value);
    const resultado = document.getElementById('resultado');
    if (isNaN(idade) || idade < 0) {
        resultado.textContent = "Por favor, digite uma idade válida.";
        return;
    }
    if (idade < 18) {
        resultado.textContent = "Você é menor de idade";
    } else {
        resultado.textContent = "Você é maior de idade";
    }
}