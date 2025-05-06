const readline = require('readline');

const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

let candidatoA = 0;
let candidatoB = 0;
let brancos = 0;
let nulos = 0;

function votar() {
    console.log("Escolha ocandidato tecle zero para encerrar\n");
    console.log("  1 -> Candidato A");
    console.log("  2 -> Candidato B");
    console.log("  3 -> Branco");
    console.log("\nQualquer número diferente de 0, 1, 2 e 3 anulará o seu voto\n");

    rl.question("Digite seu voto: ", (input) => {
        let voto = parseInt(input);

        switch (voto) {
            case 0:
                console.log("Votação encerrada!\n");
                let totalVotos = candidatoA + candidatoB + brancos + nulos;

                if (totalVotos > 0) {
                    let porcentagemA = (candidatoA * 100.0) / totalVotos;
                    let porcentagemB = (candidatoB * 100.0) / totalVotos;
                    let porcentagemBrancos = (brancos * 100.0) / totalVotos;
                    let porcentagemNulos = (nulos * 100.0) / totalVotos;

                    console.log(`Total de votos: ${totalVotos}\n`);
                    console.log(`Candidato A: ${candidatoA} voto(s). ${porcentagemA} % do total`);
                    console.log(`Candidato B: ${candidatoB} voto(s). ${porcentagemB} % do total`);
                    console.log(`Brancos: ${brancos} voto(s). ${porcentagemBrancos} % do total`);
                    console.log(`Nulos: ${nulos} voto(s). ${porcentagemNulos} % do total`);
                }

                rl.close();
                break;

            case 1:
                candidatoA++;
                votar();
                break;

            case 2:
                candidatoB++;
                votar();
                break;

            case 3:
                brancos++;
                votar();
                break;

            default:
                nulos++;
                votar();
                break;
        }
    });
}


