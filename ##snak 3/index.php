
<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
 DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->


<?php  

$arrayDate = [
    
        "01-01-2007" => [
        'title' => 'Post 1',
        'author'=>'Gigi',
        'text' => 'Text post 1',
        ]
    ,
    
    
        "02-02-2007" => [
        'title' => 'Post 2',
        'author'=>'Gennifer',
        'text' => 'Text post 2',
        ]
    ,
    
        "10-04-2008" => [
        'title' => 'Post 3',
        'author'=>'Gigi',
        'text' => 'Text post 3',
        ]
    ,
    
        "04-05-20010" => [
        'title' => 'Post 4',
        'author'=>'Luigi',
        'text' => 'Text post 4',
        ]
    ,

];

// $arrayChiavi = array_keys($arrayDate) -> ['"01-01-2007"', ...]

// lo iteri

// ogni chiave -> es. 01-01-2007

// --> $arrayDate["01-01-2007"]



echo $arrayDate["01-01-2007"][0]['title'] . ' - ' . $arrayDate["01-01-2007"][0]['author'] . ' - ' . $arrayDate["01-01-2007"][0]['text'] . "<br>";
echo $arrayDate["02-02-2007"]['title'] . ' - ' . $arrayDate["02-02-2007"]['author'] . ' - ' . $arrayDate["02-02-2007"]['text'] . "<br>";
echo $arrayDate["10-04-2008"]['title'] . ' - ' . $arrayDate["10-04-2008"]['author'] . ' - ' . $arrayDate["10-04-2008"]['text'] . "<br>";
echo $arrayDate["04-05-20010"]['title'] . ' - ' . $arrayDate["04-05-20010"]['author'] . ' - ' . $arrayDate["04-05-20010"]['text'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks blocco 1</title>
</head>
<body>
    
    <h2></h2>
 <?php
    $arrayDateLength = count($arrayDate);
    echo $arrayDateLength;

    for($i = 0; $i < $arrayDateLength; $i++){
         $arrayData = $arrayDate[$i];
         var_dump($arrayData);

        echo "<li>{$arrayData["DD-MM-YYYY"][$i]['title']} </li>";

    }

 ?>

</body>
</html>