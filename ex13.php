<?php
/**13. Faça uma rotina recursiva para calcular a somatória de todos os número de 
1 a N (N será lido do teclado).
Observação: se N é igual a 5 por exemplo, A somatória dos números será igual a 
15, ou seja,
1+2+3+4+5 = 15 */

echo "Digite um número: ";
$num = fgets(STDIN);
echo somaPA($num);

function somaPA ($n)
{
    if($n===1){
        return 1;
    }
    return $n+(somaPA($n-1));
}


?>