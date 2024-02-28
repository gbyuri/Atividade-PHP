<?php
    
    function mostrarMatriz($x){
        for ($i = 0; $i < 3; $i++){
            echo "<br/>";
            for($j = 0; $j < 3; $j++){
                echo "| " . sprintf("%02d", $x[$i][$j]) . " |";
            }  
        }  
    }

    /* function converterMatriz($x, $y){
        for ($i = 0; $i < 3; $i++){
            for ($j = 0; $j < 3; $j++){
                $y[$i][$j] = $x[$j][$i];
            }
            
        }
    } */

    //Exemplo matriz simétrica

    /* $matriz = array(array(2,5,11),
                    array(5,4,17),
                    array(11,17,6)
                ); */
    
    //Exemplo matriz assimétrica

    for ($i = 0, $k = 0; $i < 5; $i++)
        for ($j = 0; $j <5; $j++, $k++){
            $matriz[$i][$j] = $k;
    }

    echo "Essa é a primeira matriz: " . "<br/>";
    mostrarMatriz($matriz);
    
    $matriz2 = array();
    /* converterMatriz($matriz, $matriz2); */
    
    for ($i = 0; $i < 3; $i++){
        for ($j = 0; $j < 3; $j++){
            $matriz2[$i][$j] = $matriz[$j][$i];
        }
        
    }

    echo "<br/>" . "<br/>";
    echo "Essa é a segunda matriz: " . "<br/>";
    mostrarMatriz($matriz2);

    echo "<br/>" . "<br/>";
    if ($matriz == $matriz2){
        echo "É uma matriz simétrica";
    }
    else {
        echo "Não é uma matriz simétrica";
    }
        
?>