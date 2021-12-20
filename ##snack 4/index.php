

<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta-->


<?php 

$arrNum = [];

for($i = 1; $i < 16; $i++){
    $numRandom = rand(1, 30);
    if(!in_array($numRandom, $arrNum)){
        $arrNum[] = $numRandom;
        
    }
    echo $numRandom;
}
var_dump($arrNum);

$arr2 = [];
var_dump($arr2);
for($i = 1; $i < 16; $i++){
    $num = rand(1, 20) . '<br>';
    echo $num;
    if(!in_array($num, $arr2)){
        $arr2[] = $num;
}
}
echo $arr2;
?>