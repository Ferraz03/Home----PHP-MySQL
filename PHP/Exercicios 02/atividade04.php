<?php

/* 
Faça um algoritimo que leia os valores A, B e C.
Mostre um mensagem que informe se a soma de A com B 
é menor, maior ou igual a C
*/

$a = null;
$b = null;
$c = null;

echo "Escolha um número: ";
$a = fgets(STDIN);
echo "Escolha um outro número: ";
$b = fgets(STDIN);
echo "Escolha um ultimo número: ";
$c = fgets(STDIN);


if ($a + $b = $c) {
    echo "O primeiro número + o segundo número é igual ao terceiro número";
} elseif ($a + $b < $c) {
    echo "O primeiro número + o segundo número é menor que o terceiro número";
} else {
    echo "O primeiro número + o segundo número é é maior que o terceiro número";
}