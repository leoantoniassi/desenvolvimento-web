<?php
$candidato_a = 0;
$candidato_b = 0;
$brancos = 0;
$nulos = 0;
$total_votos = 0;

do {
    echo "Escolha seu candidato ou tecle zero para encerrar\n\n";
    echo "  1 -> Candidato A\n";
    echo "  2 -> Candidato B\n";
    echo "  3 -> Branco\n";
    echo "\nQualquer número diferente de 0, 1, 2 e 3 anulará o seu voto\n";
    echo "Digite seu voto: ";
    
    $voto = intval(trim(fgets(STDIN)));

    switch ($voto) {
        case 0:
            echo "Votação encerrada!\n";
            break;
        case 1:
            $candidato_a++;
            break;
        case 2:
            $candidato_b++;
            break;
        case 3:
            $brancos++;
            break;
        default:
            $nulos++;
            break;
    }
} while ($voto != 0);

$total_votos = $candidato_a + $candidato_b + $brancos + $nulos;

if ($total_votos > 0) {
    $porcentagem_candidato_a = ($candidato_a * 100.0) / $total_votos;
    $porcentagem_candidato_b = ($candidato_b * 100.0) / $total_votos;
    $porcentagem_brancos = ($brancos * 100.0) / $total_votos;
    $porcentagem_nulos = ($nulos * 100.0) / $total_votos;

    echo "\nTotal de votos: $total_votos\n\n";
    echo "Candidato A: $candidato_a voto(s). $porcentagem_candidato_a % do total\n";
    echo "Candidato B: $candidato_b voto(s). $porcentagem_candidato_b % do total\n";
    echo "Brancos: $brancos voto(s). $porcentagem_brancos % do total\n";
    echo "Nulos: $nulos voto(s). $porcentagem_nulos % do total\n";
}
?>
