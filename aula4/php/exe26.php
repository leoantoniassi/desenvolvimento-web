<?php
echo "Digite o número até o qual deseja somar: ";
$numero = intval(trim(fgets(STDIN)));

$soma = 0;
for ($contador = 0; $contador <= $numero; $contador++) {
    $soma += $contador;
}

echo "A soma de 1 até $numero é: $soma\n";
?>
