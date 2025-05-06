<?php
echo "Digite um numero: ";
$numero = intval(trim(fgets(STDIN)));

$atual = 1;
$fatorial = 1;

while ($atual <= $numero) {
    $fatorial *= $atual;
    $atual++;
}

echo "O fatorial de $numero é: $fatorial\n";
?>
