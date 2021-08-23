<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"]; 
    $num3 = $_POST["num3"]; 
    $temperatura = $_POST["temp"];

    /*exercicio - 1 */
    if($_POST["funcao"] == "eh_positivo"){
        echo "<br> Numero recebido: $num1 <br>";/**professora eu faço isso para saber 
        o que está sendo lido no teclado */        
        echo eh_positivo($num1);
    }
    /*exercicio - 2 */
    if($_POST["funcao"] == "nulo"){
        echo "<br>Numero recebido: $num2 <br>";
        echo nulo($num2);
    }
    /*exercicio - 3 */
    if($_POST["funcao"] == "delta"){
        echo "<br>Numeros recebidos:$num1 / $num2 / $num3 <br>";
        echo delta($num1, $num2, $num3);
    }
    /*exercicio - 4  arrumar melhor esse exercicio*/ 
    if($_POST["funcao"] == "app_delta"){
        echo "<br>Numeros recebidos: $num1 / $num2 / $num3 <br>";
        echo raizes($num1, $num2, $num3);        
    }
    /*exercicio - 5 */ 
    if($_POST["funcao"] == "maior"){
        echo "<br>Numeros recebidos: $num1 / $num2 <br>";
        $vet=[$num1, $num2];
        echo maior($vet, 2);        
    }
    /*exercicio - 6 */ 
    if($_POST["funcao"] == "menor"){
        echo "<br>Numeros recebidos: $num1 / $num2 <br>";
        $vet=[$num1, $num2];
        echo menor($vet, 2);        
    }
    /*exercicio - 7 */ 
    if($_POST["funcao"] == "maior2"){
        echo "<br>Numeros recebidos: $num1 / $num2 /$num3 <br>";
        $vet=[$num1, $num2, $num3];
        echo maior($vet, 3); 
    }
    /*exercicio - 8 */ 
    if($_POST["funcao"] == "menor2"){
        echo "<br>Numeros recebidos: $num1 / $num2 /$num3 <br>";
        $vet=[$num1, $num2, $num3];
        echo menor($vet, 3); 
    }
    /*exercicio - 11 */ 
    if($_POST["funcao"] == "temperatura"){
        echo "<br>Numeros recebidos: $num1 e $temperatura <br>";
        switch($temperatura)
        {
            case 'celsius':
                $f=(9*$num1/5) +32;
                echo "A temperatura corresponde a $f.ºF";
                break;
            case 'farenheit':
                $c = 5*($num1-32)/9;
                echo "A temperatura corresponde a $c.ºC";
                break;
        }        
    }
     /*exercicio - 12 */ 
     if($_POST["funcao"] == "prova"){
        echo "<br>Numeros recebidos: $num1 / $num2 /$num3 <br>";
        $vet=[$num1, $num2, $num3];
        echo prova($vet,3); 
    }

    function eh_positivo($a){
        if($a>=0){
            return "é positivo";
        }else
        {
            return "é negativo";
        }
    }
    function nulo($a){
        if($a==0){
            return "é nulo";
        }
        else{
            return "não é nulo";
        }
    }
    function delta ($a, $b, $c){
        $delta = ($b*$b -4*$a*$c);
        return $delta;
    }
    function raizes ($a, $b, $c){
        $delta = delta($a, $b, $c);
        if(nulo($a)=="é nulo"){
            return "não existe";
        }
        elseif(eh_positivo($delta)=="é positivo"){
            $x = (-$b + sqrt($delta))/(2*$a);
            $y = (-$b - sqrt($delta))/(2*$a);
            return "delta= $delta, x = $x e y= $y";
        }
        else{
            $delta1 = -$delta;
            $x = (-$b + sqrt($delta1))/(2*$a);
            $y = (-$b - sqrt($delta1))/(2*$a);
            return "$x + $y*i";
        }
    }
    function maior($a,$n)
    {
        $maior=$a[0];
        for($i=0; $i<$n; $i++)
        {
            if($a[$i]>$maior)
            {
                $maior=$a[$i];
            }
        }
        return $maior;
    }
    function menor($a,$n)
    {
        $menor=$a[0];
        for($i=0; $i<$n; $i++)
        {
            if($a[$i]<$menor)
            {
                $menor=$a[$i];
            }
        }
        return $menor;
    }
    function prova($a,$n)
    {
        for($i=1; $i<$n; $i++)
        {
            for($j=0; $j <$n-1; $j++)
            {
                if($a[$j]<$a[$j+1])
                {
                    $hold = $a[$j];
                    $a[$j]=$a[$j+1];
                    $a[$j+1]=$hold;
                }
            }  
        }
        $media3=($a[0] + $a[1] + $a[2])/3;
        $pMaior=$a[0];
        $pMaior2=$a[1];
        $pMenor=$a[2];
        $media = ($pMaior+$pMaior2)/2;
        return "Media das 3 provas: ".$media3." <br> Media notas mais altas: ".$media."<br> Nota Maior:".$pMaior." / Nota Menor: ".$pMenor;
                 
    }
    
?>