<?php 
    for ($i = 0, $k = 0; $i < 5; $i++)
        for ($j = 0; $j <5; $j++, $k++){
            $matriz[$i][$j] = $k;
        }

    for ($i = 0; $i < 5; $i++){
        echo "<br/>";
        for($j = 0; $j < 5; $j++){
            echo "| " . sprintf("%02d", $matriz[$i][$j]) . " |";
        }  
    }  

    echo "<br/>";

    for ($i = 0; $i < 5; $i++){
        echo "<br/>";
        for($j = 0; $j < 5; $j++){
            echo "| " . sprintf("%02d", $matriz[$j][$i]) . " |";
        }  
    } 
        
?>