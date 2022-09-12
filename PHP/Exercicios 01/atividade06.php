<?php

/* Escreva um programa PHP que armazene o valor 10 em uma variável "A" 
e o valor 20 em uma variável "B". A seguir(utilizando apenas atribuiçoes entre variáveis)
troque os seus conteúdos fazendo com que o valor que está em "A" passe para "B" e vice-versa. 
Ao final, escrever os valores que ficaram armazenados nas variáveis. */

$a = 10;
$b = 20;

$a ^= $b ^= $a ^= $b;

echo "$a & $b";

/* 
$a = 10;
$b = 20;
$c = 0;
//10
$c = $a;

$a = $b;
$b = $c;
$c = $a;

echo 'Atividade 06:' . PHP_EOL;
echo "Valor de A : $a - Valor de B : $b"; 
*/
