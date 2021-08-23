<?php
/**9.Crie uma função em linguagem PHP chamado Dado() que retorna, através de sorteio, 
um número de 1 até 6. */
echo  dado();

function dado(){
    
    return rand(1,6);
}
echo "\n";
/**10.Use a função da questão passado e lance o dado 1 milhão de vezes. Conte quantas 
vezes cada número saiu. A probabilidade deu certo? Ou seja, a porcentagem dos 
números foi parecida? */

$cont1=0; $cont2=0; $cont1=0; $cont3=0; $cont4=0; $cont5=0; $cont6=0; 
for($i=0;$i<1000000; $i++)
{
    $num=dado();
    if($num==1)
        $cont1 +=1;
    else if($num==2)
        $cont2 +=1;
    else if($num==3)
        $cont3 +=1;
    else if($num==4)
        $cont4 +=1;
    else if($num==5)
        $cont5 +=1;
    else
        $cont6 +=1;
}

$num_jogadas = 1000000;
echo ($cont1/$num_jogadas)*(100)."% = saiu num 1\n";
echo ($cont2/$num_jogadas)*(100)."% = saiu num 2\n";
echo ($cont3/$num_jogadas)*(100)."% = saiu num 3\n";
echo ($cont4/$num_jogadas)*(100)."% = saiu num 4\n";
echo ($cont5/$num_jogadas)*(100)."% = saiu num 5\n";
echo ($cont6/$num_jogadas)*(100)."% = saiu num 6\n";

/**Sim, é bem parecida a porcentagem dos numeros quando se joga 1 milhão de vezes */
?>