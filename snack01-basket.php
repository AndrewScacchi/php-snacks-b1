<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$results = [
    [
        [
            'nome' => 'Olimpia Milano',
            'casa' => true,
            'punteggio' => 55,
        ],
        [
            'nome' => 'Cantù',
            'casa' => false,
            'punteggio' => 60,
        ]
    ],
    [
        [
            'nome' => 'Treviglio',
            'casa' => true,
            'punteggio' => 78,
        ],
        [
            'nome' => 'Torino',
            'casa' => false,
            'punteggio' => 81,
        ]
    ],
    [
        [
            'nome' => 'Venezia',
            'casa' => true,
            'punteggio' => 122,
        ],
        [
            'nome' => 'Genova',
            'casa' => false,
            'punteggio' => 65,
        ]
    ]    
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack01 - Basket</title>
</head>
<body>
    <?php 
    $arrLength = count($results);
    for ($i=0; $i<$arrLength; $i++){
        echo "<div> {$results[$i][0]['nome']} - {$results[$i][1]['nome']} | {$results[$i][0]['punteggio']} - {$results[$i][1]['punteggio']} </div>";
    }
    
    ?>
    
</body>
</html>