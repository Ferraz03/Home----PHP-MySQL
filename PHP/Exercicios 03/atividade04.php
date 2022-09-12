<?php

/* 
Crie um array chamado "alunosDeMinhaTurma" e, 
com o recurso da função fgets(STDIN), adicione os nomes
de todos os deus colegas de sala. Ao final, faça a impressão
dos nomes. (Será necessário usar laço de repetição).
*/

echo "Digite seu nome:";
$nome1 = trim(fgets(STDIN));
echo "Digite seu nome:";
$nome2 =trim(fgets(STDIN));
echo "Digite seu nome:";
$nome3 = trim(fgets(STDIN));
echo "Digite seu nome:";
$nome4 = trim(fgets(STDIN));
echo "Digite seu nome:";
$nome5 = trim(fgets(STDIN));


$AlunosDeMinhaTurma = array($nome1, $nome2, $nome3, $nome4, $nome5);

foreach ($AlunosDeMinhaTurma as $key => $value) {
    echo $value .PHP_EOL ;
}


