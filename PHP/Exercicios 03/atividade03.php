<?php

/* 
Percorra o array e exiba a mensagem indicando o nome 
e a posição deste quando for localizado no array:
["João","José","Maria","Severino","Antônio","Marcos",
"Manoel","Felipe","André","Paulo"];
Use a linha de comando para digitar o nome;    
*/

// $turma = [
//     "joão",
//     "josé",
//     "Maria",
//     "Severino",
//     "Antônio",
//     "Marcos",
//     "Manoel",
//     "Felipe",
//     "André",
//     "Paulo"
// ];

// var_dump($turma);


$nomes = ["joão","josé","Maria","Severino","Antônio","Marcos","Manoel","Felipe","André","Paulo"];

$continuar = true;

while ($continuar) {
    $nome_procurado = trim(readline("Digite um nome: "));
    $tamanho_do_array = count($nomes);

    for ($i=0; $i < $tamanho_do_array; $i++) { 
        if (strtoupper($nome_procurado) == strtoupper($nomes[$i])) {
            echo "Nome: $nomes[$i] - Posição: $i" . PHP_EOL ;
            break;
        }
    }

    echo "Se deseja encerrar, digite 1. Para continuar aperte Enter: " . PHP_EOL;
    $opcao_usuario = trim(fgets(STDIN));

    if ($opcao_usuario == 1) {
        break ;
    }
    
}