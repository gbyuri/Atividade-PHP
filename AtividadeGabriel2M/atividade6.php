<?php 
    $lista = array(1,3,5,7,9);
    $a = 0;

    for ($i = 0; $i < count($lista); $i++)
        $a = $a + $lista[$i];

    $b = $a / count($lista);
    echo "A resposta é " . $b;
?>
