<?php

/* 
Crie um programa PHP que recebe um array de inteiros
predefinido e retorna as quantidades de elementos do array 
que  são negativos e números positivos.
*/



$nip = [0,-45,666];

foreach ($nip as $key => $value) {
    if ($value < 0) {
        echo "Esse número é negativo" . PHP_EOL ;
        // elseif ($key > 0) {
        //     echo "Esse número é positivo";
        //     else {
        //         echo "O número é 0";
        //     }
        // }
        break;
    }
}

foreach ($nip as $key => $value) {
    if ($value > 0) {
        echo "Esse número é positivo" . PHP_EOL ;
        break;
    }
}

foreach ($nip as $key => $value) {
    if ($value = 0) {
        echo "Esse número é zero" . PHP_EOL ;
    }
}