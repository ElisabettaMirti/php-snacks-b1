Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60

<?php 

$calendarioPartite = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "puntiCasa" => 55,
        "puntiOspite" => 60,
    ],
    [
        "squadraCasa" => "Roma",
        "squadraOspite" => "Zagarolo",
        "puntiCasa" => 89,
        "puntiOspite" => 54,
    ],
    [
        "squadraCasa" => "Milano",
        "squadraOspite" => "Gorgonzola",
        "puntiCasa" => 33,
        "puntiOspite" => 56,
    ],
    [
        "squadraCasa" => "Venezia",
        "squadraOspite" => "Rovigo",
        "puntiCasa" => 37,
        "puntiOspite" => 22,
    ],
    [
        "squadraCasa" => "Reggio Calabria",
        "squadraOspite" => "Reggio Emilia",
        "puntiCasa" => 67,
        "puntiOspite" => 12,
    ],
];

foreach($calendarioPartite as  $valore){
    var_dump($valore);
};

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <main></main>
</body>
</html>
