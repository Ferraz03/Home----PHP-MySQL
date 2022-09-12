<?php

/* 
Faça um Um programa PHP que: 
a) Leia os valores de COMPRIMENTO, LARGURA e ALTURA
e apresente o valor do volume de uma caixa retangular.
OBS - Utilize a fórmula:
VOLUME = COMPRIMENTO * LARGURA * ALTURA.
*/

$comprimento = null;
$largura = null;
$altura = null;

$volume = $comprimento * $largura * $altura;

echo "Qual o valor do commprimento ? ";
$comprimento = fgets(STDIN);
echo "Qual o valor da largura ? ";
$largura = fgets(STDIN);
echo "Qual o valor da altura ? ";
$altura = fgets(STDIN);

echo "O volume dessa caixa retangular é $volume!";

