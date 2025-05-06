const readline = require('readline').createInterface({
    input: process.stdin,
    output: process.stdout
});

let contador = 1;
let soma = 0.0;

function lerNumero() {
    if (contador <= 10) {
        readline.question(`Digite o ${contador}º número: `, (input) => {
            soma += parseFloat(input);
            contador++;
            lerNumero();
        });
    } else {
        let media = soma / 10;
        console.log(`A média dos números é: ${media}`);
        readline.close();
    }
}