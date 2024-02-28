<?php 
    $valores = array(1,3,5,7,15,9,12);

    $maior = max(($valores));

    echo "O maior valor do array: " . "<br/>";
    
    foreach ($valores as $valores){
        echo $valores . " | ";
    }
    echo "<br/>";

    echo " é o valor " . $maior;
?>