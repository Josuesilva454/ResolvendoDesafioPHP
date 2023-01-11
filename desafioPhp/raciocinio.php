//Leia um valor inteiro correspondente à idade de uma pessoa em dias e informe-a em anos, meses e dias

//Observação: apenas para facilitar o cálculo, considere todo ano com 365 dias e todo mês com 30 dias. Nos casos de teste nunca haverá uma 

//situação que permita 12 meses e alguns dias, como 360, 363 e 364.s.

$idade = readline('Informe a sua idade: ');
$anos = readline('Informe a sua anos: ');
$meses = readline('Informe a sua meses: ');
$dias = readline('Informe a sua dias: ');
$DIAS_NO_ANO = 365;
$DIAS_NO_MES = 30;
$dias += ($anos * $DIAS_NO_ANO) + ($meses * $DIAS_NO_MES);
echo ("%d ano(s)\n%d mes(es)\n%d dia(s)\n" . $dias);
