<?php


//Leia um valor de ponto flutuante com duas casas decimais. Este valor representa um valor monetário. A seguir, calcule o menor número de notas e moedas possíveis no qual o valor pode ser decomposto. As notas consideradas são de 100, 50, 20, 10, 5, 2. As moedas possíveis são de 1, 0.50, 0.25, 0.10, 0.05 e 0.01. A seguir mostre a relação de notas necessárias.

//Entrada.

//O arquivo de entrada contém um valor de ponto flutuante N (0 ≤ N ≤ 1000000.00).

//Saída

//Imprima a quantidade mínima de notas e moedas necessárias para trocar o valor inicial, conforme exemplo fornecido.

//Digite o numeros
$Valor = readline('Digite os numeros: ');

$cem=  $Valor /100;

$b= $Valor *100;

$cinquenta= $b/50;

$d=$b%50;

$vinte=$d/20;

$f=$d%20;

$dez=$f/10;

$h= $f%10;

$cinco=$h/5;

$j=$h%5;

$dois=$j/2;

$m_um=$j%2;



$E=$Valor*100;

$B=(int) $E;

$m=$B%100;

$m_cinquenta= $m/50;

$o= $m%50;

$m_vintecinco= $o/25;

$q= $o%25;

$m_dez= $q/10;

$s= $q%10;

$m_cinco=$s/5;

$m_umcent= $s%5;


//Resultados
echo ("NOTAS:\n");

echo (" nota(s) de R$ 100.00\n".$cem);

echo (" nota(s) de R$ 50.00\n".$cinquenta);

echo (" nota(s) de R$ 20.00\n".$vinte);

echo(" nota(s) de R$ 10.00\n".$dez);

echo (" nota(s) de R$ 5.00\n".$cinco);

echo (" nota(s) de R$ 2.00\n".$dois);



echo ("MOEDAS:\n");

echo (" moeda(s) de R$ 1.00\n".$m_um);

echo (" moeda(s) de R$ 0.50\n".$m_cinquenta);

echo (" moeda(s) de R$ 0.25\n".$m_vintecinco);

echo ("moeda(s) de R$ 0.10\n".$m_dez);

echo (" moeda(s) de R$ 0.05\n".$m_cinco);

echo (" moeda(s) de R$ 0.01\n".$m_umcent);
?>