const readline = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout
});

readline.question("Digite o número até o qual deseja somar: ", (input) => {
    let numero = parseInt(input);
    let soma = 0;
    for (let contador = 0; contador <= numero; contador++) {
        soma += contador;
    }
    console.log(`A soma de 1 até ${numero} é: ${soma}`);
    readline.close();
});
