<?php
$contador = 1;
$soma = 0.0;

while ($contador <= 10) {
    echo "Digite o $contadorº número: ";
    $numero = floatval(trim(fgets(STDIN)));
    $soma += $numero;
    $contador++;
}

$media = $soma / 10;
echo "A média dos números é: $media\n";
?>
