const readline = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout
});

readline.question("Digite um numero: ", (input) => {
    let numero = parseInt(input);
    let atual = 1;
    let fatorial = 1;

    while (atual <= numero) {
        fatorial *= atual;
        atual++;
    }

    console.log(`O fatorial de ${numero} é: ${fatorial}`);
    readline.close();
});
