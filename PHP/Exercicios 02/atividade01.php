<?php

/* 
Faça um programa PHP que: 
a) Leia o nome digitado pelo usuário;
b) Leia o sobrenome digitado pelo usuário;
c) Concatene(Junte) o nome com o sobrenome
e apresente o nome completo.
*/

$nome = null; 
$sobrenome = null;

echo "Qual o seu nome ? ";
$nome = fgets(STDIN);
echo "Qual o seu sobrenome ? ";
$sobrenome = fgets(STDIN);

echo 'Prazer em conhêce-lo,'. PHP_EOL. 
$nome. $sobrenome ;


