<?php
/**14. Crie um programa em PHP que conte os dígitos de um determinado 
número usando recursão.
Observação: se o usuário inserir o número 250, a saída esperada deve ser : o número
digitado tem 3 dígitos. */

echo "digite um número:";
$num = fgets(STDIN);
echo "num digitados:";
echo contaDig($num);

function contaDig($n){
    static $cont=0;

    if($n>=1){
        $cont ++;
        contaDig($n/10);
    }
    return $cont;
}

?>