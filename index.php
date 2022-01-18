<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
</head>
<body>
    <!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
    <?php

    $stage = [
        [
            'home' => 'Phoenix Suns',
            'guest' => 'Golden state Warrioirs',
            'homePoints' => 104,
            'guestPoints' => 96,
        ],
        [
            'home' => 'Menphis Grizzlies',
            'guest' => 'Utah Jazz',
            'homePoints' => 118,
            'guestPoints' => 119,
        ],
        [
            'home' => 'Dallas Mavericks',
            'guest' => 'Denver Nuggets',
            'homePoints' => 111,
            'guestPoints' => 101,
        ],
        [
            'home' => 'Los Angels Lakers ',
            'guest' => 'Los Angeles Clippers',
            'homePoints' => 115,
            'guestPoints' => 119,
        ],
    ];

    for ($i = 0; $i < count($stage); $i++) {
        echo "<p> {$stage[$i]["home"]} {$stage[$i]["guest"]} '-' {$stage[$i]["homePoints"]} {$stage[$i]["guestPoints"]} </p>";
    };

    // for ($i = 0; $i < count($stage); $i++) {
    //     echo '<p>' . $stage[$i]['home'] . ' - ' . $stage[$i]['guest'] . ' : ' . $stage[$i]['homePoints'] . ' - ' . $stage[$i]['guestPoints'] . '</p>';
    // };

    ?>

</body>
</html>
