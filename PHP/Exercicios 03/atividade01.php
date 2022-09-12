<?php

/* 
Utilizando o seu conhecimento em laços de repetição,
crie dois arrays: 
ListaCrescente: Com uma sequência de inteiros de 0 a 100;
ListeDecrescente: Com uma sequência de inteiros de 100 para 0;
Ao final, faça a impressão de cada array no terminal.
*/


// $a = null;
// $b = 100;

// sleep(2);

// while ($a < 101) {
//     echo "- $a - ". PHP_EOL;
//     sleep(1);
//     $a++;
// }

// sleep(2);

// echo "---------- STOP ----------" .PHP_EOL ;

// while ($b > 0) {
//     echo "- $b - " .PHP_EOL;
//     sleep(1);
//     $b--;
// }

$ListaCrescente = [];
$listaDecrescente = [];

for ($i=0; $i < 100; $i++) { 
    $ListaCrescente[] = $i;
}

for ($i=100; $i < 0; $i++) { 
    $listaDecrescente[] = $i;
}

//$ListaCrescente = array_reverse($listaDecrescente);
// array_reverse faz o oposto do anterior.

var_dump($ListaCrescente, $listaDecrescente);
