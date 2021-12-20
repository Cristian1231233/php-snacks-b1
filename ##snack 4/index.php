

<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta-->


<?php 

$arrNum = [];

for($i = 1; $i < 16; $i++){
    $numRandom[$i] = rand(1, 30);
    if(!in_array($numRandom[$i], $arrNum)){
        $arrNum[] = $numRandom[$i];
    }
    
}
var_dump($arrNum);

?>