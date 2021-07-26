<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php 
$match1giornata = [
    [
        'squadraCasa' => 'Parma',
        'squadraOspite' =>'Bologna',
        'puntiSquadraCasa' => rand(50,100),
        'puntiSquadraOspite' => rand(50,100)
    ],
    [
        'squadraCasa' => 'Milano',
        'squadraOspite' =>'Genova',
        'puntiSquadraCasa' => rand(50,100),
        'puntiSquadraOspite' => rand(50,100)
    ],
    [
        'squadraCasa' => 'Perugia',
        'squadraOspite' =>'Roma',
        'puntiSquadraCasa' => rand(50,100),
        'puntiSquadraOspite' => rand(50,100)
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-1</title>
</head>
<body>
    <h2>Match prima giornata basket</h2>
    <ul>
        <?php for($i =0; $i<count($match1giornata); $i++) { ?>
            <li>
                <?php 
                echo 'Olimpia ' . $match1giornata[$i]['squadraCasa'] . ' - ' . $match1giornata[$i]['squadraOspite'] . ' | ' . $match1giornata[$i]['puntiSquadraCasa'] . '-' . $match1giornata[$i]['puntiSquadraOspite']
                ?>
            </li>
            
        <?php } ?>
        
    </ul>
    
</body>
</html>