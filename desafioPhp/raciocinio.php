<?php
//Leia um valor inteiro correspondente à idade de uma pessoa em dias e informe-a em anos, meses e dias

//Observação: apenas para facilitar o cálculo, considere todo ano com 365 dias e todo mês com 30 dias. Nos casos de teste nunca haverá uma 

//situação que permita 12 meses e alguns dias, como 360, 363 e 364.s.


$N = readline(' Informe o numero: ');

$ANOS=$N/365;

$MESES=($N%365)/30;

$DIAS=($N%365)%30;

echo (" ano(s)\n ".$ANOS ." mes(es)\n ".$MESES ." dia(s)\n ".$DIAS);


function mdc($a, $b)
{
if($b == 0)
    return $a;
else
return mdc($b, $a%$b);
    
}

function mdf()
{
    //cria o objeto bufferedreader
}
    //criação de variaveis
    $c = readline(' Informe o numero: ');
     
 
    
    //while para executar os c casos
    while(  $c-- > 0){
        //lê as frações e a operação
    $N1 = readline(' Informe o numero: ');
    $D1 = readline(' Informe o numero: ');
    $op = readline(' Informe o numero: ');
    $n2 = readline(' Informe o numero: ');
    $d2 = readline(' Informe o numero: ');
        //realiza a operação
        if($op == '+'){
            $num = $N1 * $d2 + $n2 * $D1;
            $den = $D1 * $d2;
            $simp = mdc($num, $den); //calcula o mdc para simpificar
            if($simp < 0)
                $simp *= -1;               
            echo($num + "/" . $den + " = " . ($num / $simp) + "/" . ($den / $simp));
        }else if($op == '-'){
            $num = $N1  * $d2 - $n2 * $D1;
            $den = $D1 * $d2;
            $simp = mdc($num, $den); //calcula o mdc para simpificar
            if($simp < 0)
                $simp *= -1;
            echo($num + "/" . $den . " = " + ($num / $simp) + "/" . ($den / $simp));
        }else if($op == '*'){
            $num = $N1 * $n2;
            $den = $D1 * $d2;
            $simp = mdc($num, $den); //calcula o mdc para simpificar
            if($simp < 0)
                $simp *= -1;
           echo($num + "/" . $den + " = " . ($num / $simp) . "/" . ($den / $simp));
        }else if($op == '/'){
            $num = $N1 * $d2;
            $den = $n2 * $D1;
            $simp = mdc($num, $den); //calcula o mdc para simpificar
            if($simp < 0)
                $simp *= -1;
            echo($num + "/" . $den . " = " . ($num / $simp) . "/" . ($den / $simp));
        }
    }
?>
