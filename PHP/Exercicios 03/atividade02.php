<?php

/* 
Faça um programa PHP que devolve um arrray 
de números lidos do teclado.
*/

// echo "Digete um número: ";
// $numero1 = trim(fgets(STDIN));
// echo "Digete um número: ";
// $numero2 = trim(fgets(STDIN));
// echo "Digete um número: ";
// $numero3 = trim(fgets(STDIN));

// $nl = array($numero1, $numero2, $numero3);

// var_dump($nl);


$continuar = true;

// Usado para simplificar o laço while

$numeros = [];

while ($continuar) {
    echo "Digite um número: " . PHP_EOL; 
    $num = trim(fgets(STDIN));
    // $num = trim(readline(Digite um número: ))
    // Apenas diminui o número de linhas de código, o resultado é o mesmo
    $numeros[] = $num;
    
    echo "Se deseja encerrar, digite 1. Para continuar aperte Enter: " . PHP_EOL;
    $opção_usuario = trim(fgets(STDIN));

    if ($opção_usuario == 1) {
        $continuar = false;
        var_dump($numeros);
        //break;
    }

}