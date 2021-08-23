<?php
/**16. Faça uma rotina recursiva para o problema da Torre de Hanói.O problema da Torre de Hanói consiste de três pinos, A, B e C, denominados :
 origem, destino e trabalho, respectivamente, e n discos de diâmetros diferentes.  Inicialmente, todos os discos se encontram empilhados no pino origem, 
 em ordem decrescente de tamanho, de baixo para cima. O objetivo é empilhar todos os discos no pino destino, atendendo às seguintes restrições
Apenas um disco pode ser removido de cada vez. Qualquer disco não pode ser jamais colocado sobre outro de tamanho menor. */

echo "digite o numero de discos:";
$num=fgets(STDIN);
$origem='origem A';
$auxiliar = 'auxiliar B';
$destino = 'destino C';
echo moveHanoi($num, $origem,$destino, $auxiliar);

function moveHanoi($n, $o, $d, $a)
{
    if($n==1)
    {
        echo descreveMov(1, $o, $d);
    }else{
        moveHanoi($n-1,$o,$a,$d);
        descreveMov($n,$o, $d);
        moveHanoi($n-1, $a, $d, $o);
    }
}

function descreveMov($k, $or, $dest)
{
    echo "move disco ".$k." da torre ".$or." para torre ".$dest."\n";
}

?>