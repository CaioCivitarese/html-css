<?php
// 2 arrays e vamos verificar os numeros em comum.

    $array_0 = array(0,1,3,4,6,8);
    $array_1 = array(10,90,23,8,6);

 //Rodar dois looping e verificar se existe em um e no outro.
    $contador = 0;

    for ($i = 0; $i < count($array_0); $i++){
        for ($n =0; $n < count($array_1); $n++){
            echo $contador;
            echo '<br>';
        }if($array_0[$i] == $array_1[$n]){
            //Numero em comum!
            $em_comum = $array_0[$i];
        }
    }

    foreach($em_comum as $key => $value){
        echo $value;
        eccho '<br>';
    }

?>