<?php
/**15. Crie um programa que calcula o máximo divisor comum entre dois 
números usando a recursão.
Observação : Dois números naturais sempre têm divisores comuns. Assim, o máximo divisor
comum entre os dois é o maior de seus divisores.
Exemplificando...os divisores comuns de 12 e 18 são 1,2,3 e 6. Dentre eles, 6 é o maior.
Então, chamamos o 6 de máximo divisor comum de 12 e 18 e indicamos m.d.c.(12,18) = 6 */

echo "digite um número: ";
$num1 = fgets(STDIN);
echo "digite um número: ";
$num2 = fgets(STDIN);
echo "O mdc é:";
echo mdc($num1, $num2);

function mdc($a,$b)
{
    if($b != 0)
       return mdc($b, $a%$b);
    else 
       return $a;
}

?>