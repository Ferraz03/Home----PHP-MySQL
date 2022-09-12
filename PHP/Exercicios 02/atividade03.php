<?php

/* 
Faça um programa PHP que: 
a) Obtenha o valor para a variável $ht(Horas trabalhadas no mês);
b) Obtenha o valor para a variável $vt(Valor hora trabalhada);
c) Obtenha o valor para a variável $pd(Percentual de desconto);
d) Calcule o salário bruto => $sb = $ht * $vt;
e) Calcule o total de desconto => $td = ($pd/100) * $sb;
f) Calcule o salário líquido => $sl = $sb - $td;
g) Apresente os valores de: 
- Horas trabalhadas;
- Salário Bruto;
- Desconto;
- Salário Líquido.    
*/

$ht = null;
$vt = null;
$pd = null;

echo "Quantas horas você trabalha por mês ? ";
$ht = fgets(STDIN);
echo "Quanto você recebe por hora trabalhada ? ";
$vt = fgets(STDIN);
echo "Quaal o percentual de desconto ? ";
$pd = fgets(STDIN);

$sb = $ht * $vt;
$td = ($pd/100) * $sb;
$sl = $sb - $td;

echo "Seu saláro bruto é de $sb." . PHP_EOL;
echo "Seu salário líquido é $sl." . PHP_EOL;
echo "O total de desconto é $td." . PHP_EOL;


